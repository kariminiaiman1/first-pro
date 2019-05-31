<?php

namespace App\Http\Controllers;
use App\User;
use App\Ads;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class advertise extends Controller
{
  public function create(Request $request)
  {
       $sdf= new Ads();
       $sdf->user_id=auth()->user()->id;
       $sdf->title= $request->title;
       $sdf->description= $request->description;
       $sdf->state= $request->state;
       $sdf->city= $request->city;
       $sdf->subcategory= $request->subcategory;
       $sdf->phone= $request->phone;
       $sdf->price= $request->price;
       if($request->hasFile('image'))
        {
            $names = [];
            foreach($request->file('image') as $image)
            {
                $destinationPath = './img/ads';
                $filename = $image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);
            }
            $sdf->img=$names[0];
            $sdf->imgs= json_encode($names);
        }else {
          $sdf->img="default.jpg";
        }
       $sdf->latit= $request->latitude;
       $sdf->long= $request->longitude;
       $sdf->category= $request->category;
       $sdf->save();
       return redirect('/');
  }
}
