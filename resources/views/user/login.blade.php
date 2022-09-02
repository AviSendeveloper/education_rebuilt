<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/tsparticles@1.18.3/dist/tsparticles.min.js"></script>
</head>
<body >
   <div class="logggg">
    <div id="tsparticles"></div>
    
    <div class="login-box">
      @if(Session::has('success'))
        <div class="alert alert-success" role="alert" style="color: yellow;font-size: 16; text-align:center;padding-bottom:20px;">
            {{Session::get('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert" style="color: red;font-size: 16; text-align:center;padding-bottom:20px;">
            {{Session::get('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
      <h2>Login</h2>
      <form method="post" action="/login-check">
        @csrf
        <div class="user-box">
          <input type="email" name="email" required="">
          <label>Email</label>
        </div>
        <div class="user-box">
          <input type="password" name="password" required="">
          <label>Password</label>
        </div>
        <button type="submit"><a>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Submit
          </a></button>
          <div class="gyuyhj">
            <a href="/register">Go to <b>Register</b> Page</a>
          </div>
      </form>
    </div>
   </div>
<script>
    tsParticles.load("tsparticles", {
  fpsLimit: 60,
  particles: {
    color: {
      value: ["#E3F8FF", "#28CC9E", "#A6ED8E"]
    },
    move: {
      enable: true,
      direction: "top-right",
      random: true,
      speed: 1.5
    },
    number: {
      value: 50
    },
    opacity: {
      value: 0.6,
      random: {
        enable: true,
        minimumValue: 0.3
      }
    },
    shape: {
      type: ["square", "circle"]
    },
    size: {
      value: 2
    }
  }
});
</script>
</body>
</html>