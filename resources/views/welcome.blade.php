<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<!-- Css Styles -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/themify-icons.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/nice-select.css" type="text/css">
<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">

    <title>Registration form laravel </title>
</head>
<body>
    <h1>Welcome to laravel</h1>






    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                       
                       
                        <p class="text-success">{{Session::get('message')}}</p>
                        <form action="store" method="POST" Route="web.php">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="group-input">
                                <label for="username">Username </label>
                                <input name="name" type="text" id="username">
                            </div>
                            <div class="group-input">
                                <label for="email" >Email</label>
                                
                            <input name="email"  type="text" id="email">
                           
                            </div>
                            <div class="group-input">
                                <label for="mobile">mobile number</label>
                              
                                <input name="mobile" type="text" id="mob">
                            </div>
                            <button type="submit" name="submit" class="site-btn register-btn">REGISTER</button>
                        </form>

                        


                        <div class="col-12">

<div class="alert alert-danger mt-4">
{{$errors->first('name')}} 
{{$errors->first('email')}} 
{{$errors->first('mobile')}} 
</div>

</div>




                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.zoom.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>