<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<title>Document</title>
<style>
input {
width: 100%;
padding: 12px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
}
input[type=submit] {
background-color: #04AA6D;
color: white;
}
/* #message {
display:none;
background: #f1f1f1;
color: #000;
padding: 20px;
margin-top: 10px;
width: 600px;
margin: auto;
} */
/* #message p {
padding: 10px 35px;
font-size: 18px;
}
*/
/* .valid {
color: green;
}
.valid:before {
position: relative;
left: -35px;
content: "✔";
} */
/* .invalid {
color: red;
}
.invalid:before {
position: relative;
left: -35px;
content: "✖";
} */
.dgjjkj h2{padding-bottom: 20px;}
.ttryyu{ background: #f1f1f1;padding: 20px; box-shadow: 0 0 10px 2px;}
.dgjjkj{padding-top: 50px;}
.dgjjkj form{width: 400px;margin: auto;}
.vggg{display: flex;justify-content: space-between;}
</style>
</head>
<body>
<div class="container dgjjkj">
<form action="/admin-password-change" method="post" onsubmit ="return verifyPassword()">
@csrf
<input type="hidden" name="email" value="{{ $email }}">
<div class="ttryyu">
<h2 class="text-center">Enter New Password</h2>
<label for="password">New Password</label>
<input type="password" class="form-control" id="passwo" name="passwo" pattern="{8,}" title="at least 8 to 15 characters" >
<span id="message" style="color: red; font-size: 14px"></span><br>
<div class="vggg">
<label for="password"> Confirm Password</label>
<i class="bi bi-eye-slash" id="togglePassword"></i>
</div>
<input type="password" class="form-control" id="password" name="password" pattern="{8,}" title="at least 8 to 15 characters">
<span id="message1" style="color: red; font-size: 14px"></span><br>
<input type="submit" value="Submit">
</div>
</form>
</div>
<script type="text/javascript">
function verifyPassword() {
var pw = document.getElementById("password").value;
var pass = document.getElementById("passwo").value;
//check Password and confirm password
if (pass != pw ) {
document.getElementById("message1").innerHTML = "Please write same password!!";
return false;
}
//check empty password field
if(pw == "") {
document.getElementById("message").innerHTML = "Fill the password please!!";
return false;
}
//minimum password length validation
if(pw.length < 8) {
document.getElementById("message").innerHTML = "Password length must be atleast 8 characters!!";
return false;
}
//maximum length of password validation
if(pw.length > 15) {
document.getElementById("message").innerHTML = "Password length must not exceed 15 characters!!";
return false;
} else {
alert("Password is correct");
}
}
togglePassword.addEventListener('click', function (e) {
// toggle the type attribute
const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
password.setAttribute('type', type);
// toggle the eye / eye slash icon
this.classList.toggle('bi-eye');
});
</script>
</body>
</html>