<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="card w-25 mx-auto my-5">
        <div class="card-header bg-white border-0">
            <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="card-body">
            <form action="../actions/login.php" method="post">
                <input type="text" name="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>
                <input type="password" name="passw" placeholder="PASSWORD" class="form-control mb-4">
                <button type="submit" class="btn btn-dark btn-block" name="btnRegister" value="register">Log in</button>

                <div class="text-center mt-3 small">
                    <a href="register.php">Create Account</a>
                </div>

            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>