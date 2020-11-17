@extends('layouts.master')
<header>
  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://images.unsplash.com/photo-1578587200671-c00030df5e3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1267&q=80');
      height: 100vh;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="card">
          <div class="card-body">
            
                    <!-- Form -->
                <!-- Default form login -->
<form class="text-center border border-light p-5" action="#!">

  <p class="h4 mb-4">Sign in</p>

  <!-- Email -->
  <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">

  <!-- Password -->
  <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Password">

  <div class="d-flex justify-content-around">
      <div>
          <!-- Remember me -->
          <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
              <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
          </div>
      </div>
      <div>
          <!-- Forgot password -->
          <a href="">Forgot password?</a>
      </div>
  </div>

  <!-- Sign in button -->
  <button class="btn btn-info btn-block my-4" type="submit">Sign in</button>

  <!-- Register -->
  <p>Not a member?
      <a href="">Register</a>
  </p>

  <!-- Social login -->
  <p>or sign in with:</p>

  <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
  <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

</form>
<!-- Default form login -->
          </div>
        </div>
        <!--end-->
        </div>
      </div>
    </div>
  </div>
</header>
 
      