<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login Page</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-gray">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.jsp"><img src="images/logo.png" width="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <h3> <a class="nav-link active" aria-current="page" href="index.jsp">Home</a></h3>
                    </li>



            </div>
        </div>
    </nav>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Login</h2>

                        <form method="post" action="/LoginPage" class="register-form" id="register-form">
                            <div class="form-group">
                              @csrf
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="name" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label> <input type="password"
                                    name="password" id="password" placeholder="Password" />
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" /> <label
                                    for="agree-term" class="label-agree-term"><span><span></span></span>I
                                    agree all statements in <a href="#" class="term-service">Terms
                                        of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"
                                    value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure>
                            <img src="storage\logo\signin-image.jpg" rel="icon" alt="sing up image">
                        </figure>
                        <a href="#" class="signup-image-link">I am already
                            member</a>
                    </div>
                </div>
            </div>
        </section>


    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="alert/dist/sweetalert.css">
    <script type="text/javascript">
        // var obj = document.getElementById("status").value;
        // if (obj == "succes") {
        //     swal("Congratualation", "Your Account Created", "success");
        // }


        var password = document.getElementById('password');

        function check(ele) {
            if (ele.value.length > 0) {
                if (ele.value != password.value) {
                    document.getElementById('res').style.color = "red";
                    document.getElementById('res').innerText = "password does't mach";
                } else {
                    document.getElementById('res').innerText = "";

                }
            } else {
                document.getElementById('res').innerText = "Enter confirm password";

            }
        }
    </script>

</body>
<!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
