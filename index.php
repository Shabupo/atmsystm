<?php
    require __DIR__. "/authenticate.php";
    echo password_hash('password123', PASSWORD_DEFAULT);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./loader/loader.css">
    
  
    <title>Login</title>
</head>

<body>
    <div class="login-wrapper position-relative min-vh-100 d-flex align-items-center justify-content-center">
        <div class="login-container d-flex align-items-center justify-content-center w-100">
            <div class="form-container col-md-8 col-lg-6 col-xxl-3">  
                <div class="loader-container" id="loader-container">
                    <div class="loader" id="loader"></div>
                </div>
                <div class="card" id="card">
                    <div class="card-body"> 
                        <div class="image-container mb-2 text-center"> 
                            <img src="./assets/image/google.png" class="img-logo" alt="">
                        </div>
                        <form Method="POST" > 
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" Name="email" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./loader/loader.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>