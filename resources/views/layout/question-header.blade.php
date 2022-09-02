<style>
    .modal {
    display: none;
    position: fixed;
    z-index: 100;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}


.modal-content {
    background-color: #fff;
    top: 50%;
    left: 50%;
    color: #4a4a4a;
    max-width: 100%;
    position: relative;
    border-radius: 10px;
    border: 1px solid #ccc;
    width: 40%;
    transform: translate(-50%, -50%);
}

.modal-header {
    align-items: stretch;
    box-shadow: 0 1px 1px rgb(10 10 10 / 10%);
    display: flex;
}

.modal-header-title {
    text-align: center;
    color: #363636;
    /* display: flex; */
    flex-grow: 1;
    font-weight: 700;
    padding: 5px 15px;
    font-size: 40px;

}

.modal-header-icon {

    background: 0 0;
    border: none;
    color: currentColor;
    font-family: inherit;
    font-size: 1em;
    margin: 0;
    padding: 0;
    align-items: center;
    cursor: pointer;
    display: flex;
    justify-content: center;
    padding: 0.75rem 1rem;
}

#modal-content.animation-1 {
    animation: animation-1 0.5s forwards;
}

.modal-body {
    padding: 33px 50px;
}

.hei {
    height: 44px !important;
}
.modal-header {
    padding: 2px 16px;
    background-color: #fff !important;
    color: #000 !important;
}
@keyframes animation-1 {
    0% {
        transform: translate(-50%, -50%) scale(0);
    }

    50% {
        transform: translate(-50%, -50%) scale(1.2);
    }

    70% {
        transform: translate(-50%, -50%) scale(0.9);
    }

    100% {
        transform: translate(-50%, -50%) scale(1);
    }
}
</style>
<header class="TopNav-module_header_Vbbj6">
    <div class=" container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12">
          
            <div class="TopNav-module_anonUser_362Im">
                
                <a href="/" aria-label="logo" tabindex="0" class="TopNav-module_logoLink_2AGYy"><img
                        src="../_next/static/img/logo.png" alt=""></a>
           
        </div>

            </div>
            <div class="col-md-8 col-lg-8 col-sm-12">
                <div class="dfsdfds" style="display:flex;">
                    <div>
                        <button style="border: none;background: transparent;"><a href="https://quickmints.com/"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Home</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="https://documents.quickmints.com/"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Free Worksheets</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="/question-index"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Post Question</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="/"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Kids Talent Zone</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="/myaccount"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Create a Slot</a></button>
                    </div>
                    @if (Auth::check())
                    <div>
                        <button style="border: none;background: transparent;"><a href="/upload-subject-list"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">View Talent
                                  List</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="/upload-question-list"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">View Question
                                List</a></button>
                    </div>
                    @endif
                    <div>
                        <button style="border: none;background: transparent;"><a href="https://quickmints.com/#/sub-category-class/"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Classes</a></button>
                    </div>
                    <div>
                        <button style="border: none;background: transparent;"><a href="https://blogs.quickmints.com/"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Blogs</a></button>
                    </div>
                    @if (!Auth::check())
                    <div><button id="open-modal" style="border: none;background: transparent;"><a
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Login</a></button>
                    </div>
                    @endif
                    @if (Auth::check())
                    <div><button style="border: none;background: transparent;"><a href="/logout"
                                class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb ">Logout</a></button>
                    </div>
                    @endif
            </div>
            </div>
        </div>
       
        
    </div>
</header>

<!-- for login -->
<div id="myModal" class="modal">


    <div id="modal-content" class="modal-content animation-1">

        <header class="modal-header">
            <p class="modal-header-title">
                Log In
            </p>
            <button id="close" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->

        <div class="modal-body">
            <form method="post" action="/login-check">
                @csrf
                <div class="form-group">

                    <input type="text" name="email" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <br>
                    <input type="password" name="password" class="form-control hei" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter password">

                </div>
                <div class="form-group clearfix"><label class="radio-item form-check-label float-left"><a href="/forgot-password" class="float-right forgot-txt">Forgot
                        Password?</a></div>
                <br>
                <div style="text-align: center;">
                    <button style="border: none;background: transparent;"><a
                            class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                            style="width: 115px;">Login</a></button>
                </div>
                <br>
                <div id="open-modal1" class="d-flex justify-content-center modal-bottom-links"> Don't have an account?
                    <a href="javascript:void(0);" class="ml-2">Register</a></div>
            </form>
        </div>


    </div>

</div>

<!-- for register -->
<div id="myModal1" class="modal">


    <div id="modal-content1" class="modal-content animation-1">

        <header class="modal-header">
            <p class="modal-header-title">
            Register
            </p>
            <button id="close1" class="modal-header-icon">
                <span class="icon">
                    <i class='bx bx-x'></i>
                </span>
            </button>
        </header>
        <!-- Modal body -->

        <div class="modal-body">
            <form method="post" action="/register" onsubmit="return validateForm()">
                @csrf
                <div class="form-group">

                    <input type="text" name="firstname" class="form-control hei" id="fname" aria-describedby="emailHelp"
                        placeholder="Enter firstname" required>
                        <span id ="fnameM" style="color:red"></span> 
                    <br>
                    <input type="text" name="lastname" class="form-control hei" id="lname" aria-describedby="emailHelp"
                        placeholder="Enter lastname" required>
                        <span id ="lnameM" style="color:red"></span>
                    <br>
                    <input type="email" name="email" class="form-control hei" id="email" aria-describedby="emailHelp"
                        placeholder="Enter email" required>
                        <span id ="emailM" style="color:red"></span>
                    <br>
                    <input type="password" name="password" class="form-control hei" id="pwd" aria-describedby="emailHelp"
                        placeholder="Enter password">
                        <span id ="pwdM" style="color:red"></span>
                    <br>
                    <input type="password" name="confirm-password" class="form-control hei" id="cpwd" aria-describedby="emailHelp"
                        placeholder="Enter confirm password">
                        <span id ="cpwdM" style="color:red"></span>
                </div>
                <div class="form-group clearfix"><label class="radio-item form-check-label float-left"></label><a href="/forgot-password" class="float-right forgot-txt">Forgot
                        Password?</a></div>
                <br>
                <div style="text-align: center;">
                    <button style="border: none;background: transparent;"><a
                            class="btn btn-teal btn-normal Button-module_btn_1JCnt Button-module_teal_298Cb "
                            style="width: 115px;">Register</a></button>
                </div>
                <br>
                <!--<div id="open-modal" class="d-flex justify-content-center modal-bottom-links"> Already have an account?-->
                <!--    <a href="javascript:void(0);" class="ml-2">Login</a></div>-->
            </form>
        </div>


    </div>

</div>
<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("open-modal");
var span = document.getElementById("close");
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var modal1 = document.getElementById("myModal1");
var btn1 = document.getElementById("open-modal1");
var span1 = document.getElementById("close1");
btn1.onclick = function() {
    modal1.style.display = "block";
}
span1.onclick = function() {
    modal1.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal1.style.display = "none";
    }
}
</script>


<script>
function validateForm() {  
    //collect form data in JavaScript variables  
    var pwd = document.getElementById("pwd").value;  
    var cpwd = document.getElementById("cpwd").value;
    var email = document.getElementById("email").value;
    var fname = document.getElementById("fname").value;  
    var lname = document.getElementById("lname").value;  
      
    //check empty first name field  
    if(fname == "") {  
      document.getElementById("fnameM").innerHTML = "**Fill the first name";  
      return false;  
    }  
      
    //character data validation  
    if(!isNaN(fname)){  
      document.getElementById("fnameM").innerHTML = "**Only characters are allowed";  
      return false;  
    }  
  
   //character data validation  
    if(!isNaN(lname)){  
      document.getElementById("lnameM").innerHTML = "**Only characters are allowed";  
      return false;  
    }
    
    //check empty email field  
    if(email == "") {  
      document.getElementById("emailM").innerHTML = "**Fill the email";  
      return false;  
    }
    
    //check empty password field  
    if(pwd == "") {  
      document.getElementById("pwdM").innerHTML = "**Fill the password please!";  
      return false;  
    }  
    
    //check empty confirm password field  
    if(cpwd == "") {  
      document.getElementById("cpwdM").innerHTML = "**Enter the password please!";  
      return false;  
    }
    
    if(pwd != cpwd) {  
      document.getElementById("cpwdM").innerHTML = "**Passwords are not same";  
      return false;  
    }  
 }  
</script>
