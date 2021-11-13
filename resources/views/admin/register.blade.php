<!DOCTYPE html>
<html lang="en">

<head>
   @include('admin.head')
</head>

<body>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                  <a href="index.html"><img src="/assets/admin/images/logo/logo.png" alt="Logo"></a>
               </div>
                <h1 class="auth-title">Sign Up</h1>

                <form action="" method="post">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" name="email" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" name="name" placeholder="Username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Sign Up</button>
                @csrf
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="{{route('login')}}" class="font-bold">Log
                            in</a>.</p>
                </div>
            </div>
        </div>
       <div class="col-lg-7 d-none d-lg-block">
           <div id="auth-right">
               <img src="/assets/admin/images/anh-tuyet-roi.jpg" height="100%" alt="tuyet">

           </div>
      </div>
    </div>

</div>
</body>

</html>
