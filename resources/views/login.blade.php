@include('tampilan.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
</head>
<body class="body">
      <div class="text-center">
      @if(session('success'))
         <div class="alert alert-success">
            {{ session('success') }}
         </div>
      @endif
      @if(session('error'))
         <div class="alert alert-danger">
            {{ session('error') }}
         </div>
      @endif
      </div>
      <div class="login">
      <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Log in</div>
                     <form class="flip-card__form" action="{{ url('/login') }}" method="POST">
                        @csrf
                        <input class="flip-card__input" type="text" name="txtUname" placeholder="Username" required>
                        <input class="flip-card__input" type="password" name="txtPass" placeholder="Password" required>
                        <input class="flip-card__btn btnsubmit" type="submit"></input>
                     </form>
                  </div>
                  <div class="flip-card__back">
                     <div class="title">Sign up</div>
                     <form class="flip-card__form" action="{{ url('/register') }}" method="POST">
                        @csrf
                        <input class="flip-card__input" type="text" name="txtUname" placeholder="Username" required>
                        <input class="flip-card__input" type="email" name="txtEmail" placeholder="Email" required>
                        <input class="flip-card__input" type="password" name="txtPass" placeholder="Password" required>
                        <button class="flip-card__btn btnsubmit" type="submit">Register</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
    </div>
    </div>
@include('tampilan.footer')
</body>
</html>