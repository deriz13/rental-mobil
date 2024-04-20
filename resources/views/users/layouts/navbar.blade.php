@if (Session::has('error'))
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ Session::get('error') }}
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if ($errors->has('email'))
    <div class="alert alert-danger">
        {{ $errors->first('email') }}
    </div>
@endif


<div class="container-fluid">
    <div class="row align-items-center py-1 px-xl-4">
        <div class="col-lg-4 d-none d-lg-block">
            <a href="{{ url('/') }}" class="text-decoration-none">
                <h4 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">B</span>Balisuntours</h4>
            </a>
        </div>
        <div class="col-lg-6 col-6 text-center">
                <div class="input-group" style="width: 40%;">
                </div> 
        </div>
        <div class="col-lg-2 col-6 text-right">
    <button class="btn border "data-toggle="modal" data-target="#registerModal">
    <span class="badge">Register</span>
</button>
    <button class="btn border" style="border-radius: 20px; background-color: #FF6600; color: white;" data-toggle="modal" data-target="#loginModal">
      <span class="badge">Login</span>
  </button>
</div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="registerModalLabel">Register</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form Register -->
          <form action="{{ route('register') }}" method="post">
              @csrf
            <div class="form-group">
              <label for="registerUsername">Username</label>
              <input type="text" name="name" class="form-control" id="registerUsername" placeholder="Enter username">
            </div>
            <div class="form-group">
              <label for="registerEmail">Email</label>
              <input type="email" name="email" class="form-control" id="registerEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="registerEmail">Address</label>
              <input type="text" name="address" class="form-control" id="registerAddress" placeholder="Enter address">
            </div>
            <div class="form-group">
              <label for="registerEmail">Phone</label>
              <input type="text" name="phone" class="form-control" id="registerPhone" placeholder="Enter phone">
            </div>
            <div class="form-group">
              <label for="registerPassword">Password</label>
              <input type="password" name="password" class="form-control" id="registerPassword" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Login -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form Login -->
          <form action="{{ route('login') }}" method="post">
                           @csrf
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Name</label>
                                       <input type="name" name="name" class="form-control" id="email" aria-describedby="email" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder=" ">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-between">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">Remember Me</label>
                                    </div>
                                    <!-- <a href="recoverpw.html">Forgot Password?</a> -->
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign In</button>
                              </div>
                              <!-- <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/fb.svg" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/gm.svg" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/im.svg" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="../../assets/images/brands/li.svg" alt="li"></a>
                                    </li>
                                 </ul>
                              </div>
                              <p class="mt-3 text-center">
                                 Don’t have an account? <a href="sign-up.html" class="text-underline">Click here to sign up.</a>
                              </p> -->
                           </form>
        </div>
      </div>
    </div>
  </div>
