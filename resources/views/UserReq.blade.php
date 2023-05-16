<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="shortcut icon" href="images/logo.png"/>
    <title>Request Form</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    background: #D7DDE5;
    font-family: "Roboto", sans-serif;
}

nav {
    display: flex;
    justify-content: space-between;
    padding: 15px 5%;
    align-items: center;
    background: #b30000;
}

.logo {
    color:white;
    /* color: #b30000; */
    font-size: 22px;
}

ul {
    list-style: none;
    margin-bottom: -5px;
}

ul li {
    display: inline-block;
}

ul li a {
    text-decoration: none;
    /* color: #b30000; */
    color:white;
    padding: 8px 30px;
    border-radius: 7px;
    transition: all .3s ease;
}

ul li a:hover,
ul li a.active {
    color: #FFF;
    background:#ff1a1a;
}

#icon {
 
    padding: 5px 7px 3px 7px;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s ease;
    color: white;
}

#icon svg {
    color: #FFF;
    height: 28px;
    transition: all .3s ease;
}

#icon:hover {
    background: #FFF;
    color: #b30000;
}

#icon:hover svg {
  background: white;
    color: #b30000;
    padding: 5px 7px 3px 7px;
    border-radius: 4px;
    cursor: pointer;
    transition: all .3s ease;
}

#checkbox,
#icon {
    display: none;
}


.link i {
    padding-left: 7px;
}

.link:hover {
    text-decoration: underline;
    background-color: black;
}
@media screen and (max-width: 768px) {
    /* nav {
        border-bottom: 1px solid #455468;
    } */

    ul {
        position: absolute;
        width: 100%;
        height: calc(30vh - 40px);
        background-color: #b30000;
        left: 0;
        top: 0;
        text-align: center;
        display: none;
        margin-top: 70px;
        
        
    }

    ul li {
        display: block;
        padding: 10px 15px;
       
    }

    ul li a {
        display: block;
        padding: 10px 0;
    }

    #icon {
        display: block;
    }

    #checkbox:checked~ul {
        display: block;
    }
}



    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;

}

body{
  height: 100vh;
  background: #e1edf9;
}

.wrapper{
  max-width: 655px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
  font-family: Helvetica;
  font-size: 16px;
  
}

.heading{
   background:#b30000; 
  /* background:	 #f2f2f2;  */
  margin: -30px;
  text-align: center;
   color: white; 
   /* color: #b30000;  */
  font-size: 22px;
  margin-bottom: 5px;
  padding: 10px;
  font-family: Helvetica;
}

.btn{
  background:#b30000; 
  color:white;
  border: 1px solid white;
  padding-bottom:20px;
  font-size: 18px;
  height: 40px;
  
}
#sub:hover{
  background-color: rgba(195, 0, 0, 0.95); /* Green */
  color: white;
}




.input-data input{
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.16);
}


.input-data label{
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}

#column1{
    margin-right: 5px;
}
</style>
<body>

<nav>
 <!-- <img src="images/logo.png" width="50" height="40"> -->
      <b><div class="logo">RGCC</div></b>  
        <input type="checkbox" id="checkbox">
        <label for="checkbox" id="icon">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </label>
        <ul>
           

          <b>
            <li><a href="UserDash">{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name[0]}}. {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</a></li>
            <!-- <li><a href="#">LogOut</a></li> -->
            </b>
        </ul>
    </nav>



<!-- <header class="header">
        <nav class="navbar">
        <img src="images/logo.png" width="60" height="70"> 
          
            <ul class="nav-menu">
              <li>
                <form method="POST" action="{{ route('logout') }}">
                            @csrf
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="nav-link">Hi, James</span>
                    </a>
                </form>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header> -->



<div class="wrapper">
 <div class="form_container">
        
        
        
                <div class="heading">
                  <!-- <img src="images/logo.png" width="60" height="80"> -->
                    <p >R.G. de Castro Colleges</6>
                    <h6>Bulan Sorsogon</h4>
                </div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(session()->has('message1'))
            <div class="alert alert-danger">
                {{ session()->get('message1') }}
            </div>
        @endif
       <br>         
  <form action="docu_request" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
    <div class="container-fluid"> 
  <b><center> <h3 >Request Form</h3></center></b>  
    <!-- <div class="dat">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
    </div>  -->

  <i><b><p>May I Request for:</p></b> </i> 

        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" name="Hon_Dismissal" type="checkbox" value="Honorable Dismissal" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Honorable Dismissal
                </label>
         </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" name="TOR" type="checkbox" value="Transcript of Record" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Transcript of Record
                </label>
        </div>
        </div>

        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                 <input class="form-check-input" name="SO" type="checkbox" value="Special Order" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Special Order
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
        <input class="form-check-input" name="Form137" type="checkbox" value="Form 137" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Form 137
                </label>
        </div>
        </div>


        
        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                 <input class="form-check-input" name="Diploma" type="checkbox" value="Diploma" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Diploma
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" name="GoodMoral" type="checkbox" value="Good Moral" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Good Moral Character
                </label>
        </div>
        </div>
<br>
      <b><p>Certification of:</p></b>  




        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" name="UnitEarned" type="checkbox" value="Units Earned" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Unit Earned
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" name="GWA" type="checkbox" value="GWA" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                General Weighted Average
                </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" name="Graduation" type="checkbox" value="Graduation" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Graduation
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" name="Grades" type="checkbox" value="Grades" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Grades
                </label>
        </div>
        </div>

        <br>
        <b><p>Authentication:</p></b>
        

        <div class="container-fluid">

        <div class="row">
        <div class="col-md-4 p-4">
                <input class="form-check-input" name="auth_Transcript" type="checkbox" value="Authenticated Transcript" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Transcript
                </label>
        </div>

        <div class="col-md-4 p-4">
                <input class="form-check-input" name="auth_SO" type="checkbox" value="Authenticated Special Order" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Special Order
                </label>
        </div>

        <div class="col-md-4 p-4">
                <input class="form-check-input"name="auth_Diploma" type="checkbox" value="Authenticated Diploma" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Diploma
                </label>
        </div>
        </div>
        </div>

       <!-- <b><p>Purpose:</p></b> 
        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input game" name="Enroll" type="checkbox" value="Enrollment" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Enrolment
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input game" name="Employ" type="checkbox" value="Employement" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Employment
                </label>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 p-6">
                <input class="form-check-input game" name="License_Exam" type="checkbox" value="Licensure Examination" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Licensure Examination
                </label>
        </div>
        </div> -->


        <b><p>Purpose for:</p></b>
        
        <!-- hello -->

        <div class="container-fluid">

        <div class="row">
        <div class="col-md-4 p-4">
        <input class="form-check-input game" name="Enroll" type="checkbox" value="Enrollment" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Enrolment
                </label>
        </div>

        <div class="col-md-4 p-4">
        <input class="form-check-input game" name="Employ" type="checkbox" value="Employement" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Employment
                </label>
        </div>

        <div class="col-md-4 p-4">
        <input class="form-check-input game" name="License_Exam" type="checkbox" value="Licensure Examination" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Licensure Exam
                </label>
        </div>
        </div>
        </div>

        <div class="container-fluid">
        <div class="row">
        <div class="col-md-3 p-4" >
            <input class="form-check-input game" id="box1" name="Others" type="checkbox" value="Others" id="flexCheckChecked">
            <label class="form-check-label" for="flexCheckChecked">
            Others:
            </label>   
        </div>
            
        <div class="col-md-7 p-4" >
            <div class="input-data">
                <input type="text" id="Others" name="Others" disabled>
            </div>
        </div>
      
        </div>
        </div>

        <script>
            document.getElementById('box1').onchange = function() {
            document.getElementById('Others').disabled = !this.checked;
            document.getElementById('Others').focus();
            };
        </script>
        <br>
        <div class="d-grid gap-3">
      <!-- <button class="btn btn-success" type="submit" id="sub">Submit</button> -->
      <input type="submit" class="btn" id="sub" value="Submit">
      </div>

    </div>
  </form>
 </div>
</div>
<script>
    var max_limit = 1; // Max Limit
    $(document).ready(function (){
        $(".game:input:checkbox").each(function (index){
            this.checked = (".game:input:checkbox" < max_limit);
        }).change(function (){
            if ($(".game:input:checkbox:checked").length > max_limit){
                this.checked = false;
            }
        });
    });
</script>

<script>
        const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>


</html>