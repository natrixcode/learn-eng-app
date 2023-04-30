@extends('layouts.user_type.guest')

@section('content')

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&display=swap');
    h3 {
      font-family: "Playfair Display";
      font-size: 48px;
    }
</style>


  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-dark text-gradient">Welcome back</h3>
                  <p class="mb-0">Create a new account or sign in</p>
                  <!-- <p class="mb-0">Email <b>admin@softui.com</b></p>
                  <p class="mb-0">Password <b>secret</b></p> -->
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/session">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                        <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-100 mt-4 mb-0">Sign in</button>
                    </div>

                    <!-- 
                      Google auth button
                    -->
                   
                    
                  </form>
                </div>
                <div class="text-center">
                      <button type="submit" class="btn bg-gradient-dark w-20 mt-4 mb-0" style="float: left; background-image: linear-gradient(to right, #EA4335,#FBBC05);">
                      <svg width="18" height="18" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                      <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"/></svg>
                      </button>
                    </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class="text-muted">Forgot you password? Reset you password 
                  <a href="/login/forgot-password" class="text-info text-dark font-weight-bold">here</a>
                </small>
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="register" class="text-info text-dark font-weight-bold">Sign up</a>
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  
@endsection
