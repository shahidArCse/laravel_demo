<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: rgba(255, 1, 1, 0.1)
}

.card {
    border: none;
    border-radius: 0;
    width: 420px !important;
    margin: 0 auto
}

.signup {
    display: flex;
    flex-flow: column;
    justify-content: center;
    padding: 10px 50px
}

a{
    text-decoration:none !important;
}

h5 {
    color: #ff0147;
    margin-bottom: 3px;
    font-weight: bold
}

small {
    color: rgba(0, 0, 0, 0.3)
}

input {
    width: 100%;
    display: block;
    margin-bottom: 7px
}

.form-control {
    border: 1px solid #dc354575;
    border-radius: 30px;
    background-color: rgba(0, 0, 0, .075);
    letter-spacing: 1px
}

.form-control:focus {
    border: 0.5px solid #dc354575;
    border-radius: 30px;
    box-shadow: none;
    background-color: rgba(0, 0, 0, .075);
    color: #000;
    letter-spacing: 1px
}

.btn {
    display: block;
    width: 100%;
    border-radius: 30px;
    border: none;
    background: linear-gradient(to right, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%);
    background: -webkit-linear-gradient(left, rgba(249, 0, 104, 1) 0%, rgba(247, 117, 24, 1) 100%)
}

.text-left {
    color: rgba(0, 0, 0, 0.3);
    font-weight: 400
}

.text-right {
    color: #ff0147;
    font-weight: bold
}

span.text-center {
    color: rgba(0, 0, 0, 0.3)
}

.fab {
    padding: 15px;
    font-size: 23px
}

.fa-facebook {
    color: #0303d9bf
}

.fa-twitter {
    color: #0078fade
}

.fa-linkedin {
    color: #18b1c0
}
</style>
<body>

<div class="container">
@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif 
    
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
     
@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    
@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Please check the form below for errors</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="row">
        <div class="col-md-6 mx-auto py-4 px-0">
            <div class="card p-0">
                <div class="card-title text-center">
                    <h5 class="mt-5">HEY, THERE</h5> <small class="para">Login to your cool account below.</small>
                </div>
                <form id="loginForm" action="{{ route('login_check') }}" method="post" class="signup">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        @error('email')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password"  placeholder="password">
                        @error('password')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    </div> 
                    <button id="btnSumbit" type="submit" class="btn btn-primary" >Login</button>
                    <div class="row">
                        <div class="col-6 col-sm-6">
                            <a href="#"><p class="text-left pt-2 ml-1">Forgot password?</p></a>
                        </div>
                        <div class="col-6 col-sm-6">
                           <a href="#"> <p class="text-right pt-2 mr-1">Sign Up Now</p></a>
                        </div>
                    </div> <span class="text-center">Or</span> <span class="text-center pt-3">Login Using</span>
                    <div class="row">
                        <div class="d-flex mx-auto pt-1 pb-3"> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin"></i></a> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>