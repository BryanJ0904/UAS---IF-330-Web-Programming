@include('tampilan.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="login">
        <div class="cardlogin">
            <div class="cardkonten">
                <p class="welcome"><b>Welcome Back</b></p>

                <form action="#" method="POST">
                    <input class="kotak" type="text" name="txtUname" placeholder="Username"><br><br><br>
                    <input class="kotak" type="password" name="txtPass" placeholder="Password"><br>
                    <input class="btnsubmit" type="submit" value="Login">
                </form>

            </div>
        </div>
    </div>
@include('tampilan.footer')
</body>
</html>