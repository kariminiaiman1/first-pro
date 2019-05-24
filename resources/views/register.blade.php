@extends('welcome-main')
@section('content')
    <div class="rehomes-search-form-area wow fadeInUp" data-wow-delay="200ms">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sx-6">
              <h2 style="color:white;">Register</h2>
              <form action="#" method="">
                <div class="col-lg-8 col-md-8 col-sx-8">
                <label for="username" style="color:white;">Username:</label>
                <input class="form-control" type="username" name="username" placeholder="username">
                </div>
                <br>
                <div class="col-lg-8 col-md-8 col-sx-8">
                <label for="Email" style="color:white;">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="email">
                </div>
                <br>
                <div class="col-lg-8 col-md-8 col-sx-8">
                <label for="password" style="color:white;">Password:</label>
                <input class="form-control" type="password" name="password" placeholder="password" />
                </div>
                <br>
                <div class="col-lg-8 col-md-8 col-sx-8">
                <input class="form-control" type="password" name="password" placeholder="password confirm" />
                </div>
                <br>
                <div class="col-lg-8 col-md-8 col-sx-8">
                <label for="number" style="color:white;">Phone Number:</label>
                <input class="form-control" type="phone" name="number" placeholder="phone number" />
                </div>
                <br>
                <div class="col-lg-8 col-md-8 col-sx-8">
                <button class="form-control"type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Sign Up</button>
                </div>
              </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sx-6">
              <h2 style="color:white;">login</h2>
              <form action="#" method="">
                <div class="col-lg-6 col-md-6 col-sx-6">
                <label for="username" style="color:white;">Username:</label>
                <input class="form-control" type="username" name="username" placeholder="username">
                </div>
                <br>
                <div class="col-lg-6 col-md-6 col-sx-6">
                <label for="password" style="color:white;">Password:</label>
                <input class="form-control" type="password" name="password" placeholder="password" />
                </div>
                <br>
                <div class="col-lg-6 col-md-6 col-sx-6">
                <button class="form-control"type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
@endsection
