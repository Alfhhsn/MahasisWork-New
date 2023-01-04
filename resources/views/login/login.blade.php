<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MahasisWork | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="overlay"></div>
    <form action="{{ route('authenticate') }}" method="post" class="box">
    @if (Session::has('status'))
        <div class="alert w-100 btn btn-lg mt-3" style="background-color: rgb(136, 212, 255)" role="alert">
            {{ Session::get('message') }}
        </div>
    @endif    
    @csrf
        <div class="header">
            <h4>Login To Your Account</h4>
            <p>Please login your account as a freelance or student! Lets make a journey with MahasisWork!</p>
            
        </div>
        <div class="login-area">
            <input type="text" class="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
            <input type="password" class="password" placeholder="Password" required>
            <input type="submit" value="Login" class="submit">
            <a href="http://mahasiswork-new.test/Becomeastudent">Don't have account? Register Here!</a>
        </div>
    </form>
</body>
</html>