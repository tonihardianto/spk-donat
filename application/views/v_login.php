<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="<?php echo base_url('assets/images/icon.png'); ?>" type="image/ico" />

    <title><?php echo $title; ?> </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/vendors/animate.css/animate.min.css')?>" rel="stylesheet">
    <!-- Sweet alert -->
    <!-- <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> -->


    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>


      <div class="login_wrapper">

        <div class="animate form login_form">
            
          <section class="login_content">
            <form id="form-login" method="POST" action="<?php echo base_url('login/auth') ?>">
              <h1>Login Form</h1>
              <div style="font-style:normal;">
              <?php $this->load->view('menu/alert'); ?>
              </div>

              <div>
                <input type="text" id="username" value="admin" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div> 
                <input type="password" value="admin" id="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-login btn-success submit">Log in <i class="fa fa-sign-in"></i></button>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img width="40px" height="40px" src="<?php echo base_url('assets/images/icon.png') ?>" alt=""> Decision Maker System</h1>
                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url().'assets/vendors/jquery/dist/jquery.min.js';?>"></script>
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    //   $(document).ready(function() {

    //     $('#form-login').submit(function(){
    //         const Toast = Swal.mixin({
    //             toast: true,
    //             position: 'top-end',
    //             showConfirmButton: false,
    //             timer: 3000,
    //             // timerProgressBar: true,
    //             didOpen: (toast) => {
    //                 toast.addEventListener('mouseenter', Swal.stopTimer)
    //                 toast.addEventListener('mouseleave', Swal.resumeTimer)
    //             }
    //         });
    //         var username = $('[name="username"]').val();
    //         var password = $('[name="password"]').val();

    //         $.ajax({
    //             url: '<?php echo base_url('login/auth') ?>',
    //             type: 'POST',
    //             datatype: 'json',
    //             data: {
    //                 username: username,
    //                 password: password,
    //             },
    //             success:function(response){
    //                 if (response.status =='sukses') {
    //                     setTimeout(function() {
    //                         window.location.href = '<?php echo base_url('dashboard'); ?>';
    //                     }, 1500);
    //                     Toast.fire({
    //                     icon: 'success',
    //                     title: 'Signed in successfully',
    //                     });
    //                 }else{
    //                     setTimeout(function() {
    //                         window.location.href = '<?php echo base_url('login'); ?>';
    //                     }, 1500);
    //                     Toast.fire({
    //                     icon: 'error',
    //                     title: 'Login failed! Please try again!'
    //                     });
    //                 }
                    
    //             }

    //         });
    //         return false;

    //     }); 

    //   });
    </script>

  </body>
</html>
