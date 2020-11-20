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
    <title>Register</title>
</head>

<body>

    <div class="card my-5 mx-auto" style="width: 35%;">
        <div class="card-header bg-white border-0">
            <h1 class="text-center">REGISTER</h1>
        </div>
        <div class="card-body">
            <form action="../actions/register.php" method="post">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" class="form-control mb-2" required autofocus>

                <label for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" class="form-control mb-2" required>

                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control mb-2" maxlength="15" required placeholder="max length: 15">

                <label for="passw">Password</label>
                <input type="password" name="passw" id="passw" class="form-control mb-5" required>

                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" class="form-control mb-2" required>

                <label for="MT">Mother Tongue</label>
                <input type="text" name="MT" id="MT" class="form-control mb-2" required>

                <label for="studentYN">Student</label>
                <br>
                <div class="row justify-content-around">
                    <div class="custom-control custom-radio d-inline px-0">
                        <input type="radio" name="studentYN" id="sYes" class="form-control-input" value="Y">
                        <label for="sYes" class="costom-control-label">Yes</label>
                    </div>
                    <div class="custom-control custom-radio d-inline pl-0 pr-2">
                        <input type="radio" name="studentYN" id="sNo" class="form-control-input" checked value="N">
                        <label for="sNo" class="costom-control-label">No</label>
                    </div>
                </div>
                
                

                <button type="submit" class="mt-3 btn btn-success btn-block" name="btnRegister" value="register">Register</button>
            </form>

            <div class="text-center mt-3 small">
                <p>Registered already? <a href="../views">Log in</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>