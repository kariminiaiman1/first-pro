<?php

namespace App\Http\Controllers;
use App\User;
use App\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
      public function index() {
        $tasks =DB::table('ads')->join('users','users.id','=','ads.user_id')->select('ads.*','users.name')->latest('ads.created_at')->paginate(6);
        return view('home', compact('tasks',Auth::user()));
    }

    public function destroy(Ads $ads){
            $ads->delete();
            return back();
    }
    public function edit(Ads $ads) {
      $adsid=$ads->id;
      $taskedit=DB::table('ads')->where(function ($query) use ($adsid) {$query->where('id', '=', $adsid);})->get();
      return view('edit', compact('taskedit',Auth::user()));
  }

  public function update(Request $request,$id){
    $post['user_id']=Auth::user()->id;
    $post['title']=$request->title;
    $post['city']=$request->city;
    $post['state']=$request->state;
    $post['description']=$request->description;
    $post=DB::table('ads')->where('id', $id)->update($post);
  }

  public function search(Request $request){
    $post=$request->title;
    $category=$request->category;
    $subcategory=$request->subcategory;
    $city=$request->city;
    $state=$request->state;
    $minprice=$request->minprice;
    $maxprice=$request->maxprice;
    $tasks =DB::table('ads')->join('users','users.id','=','ads.user_id')->select('ads.*','users.name')
    ->where('ads.title','LIKE', "%{$post}%")
    ->where('ads.category', 'LIKE', "%{$category}%")
    ->where('ads.subcategory', 'LIKE', "%{$subcategory}%")
    ->where('ads.city', 'LIKE', "%{$city}%")
    ->where('ads.state', 'LIKE', "%{$state}%")
    ->whereBetween('ads.price', [$minprice, $maxprice])
    ->latest('ads.created_at')->paginate(6);
    return view('search', compact('tasks',Auth::user()));
  }
}
