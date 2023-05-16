<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="shortcut icon" href="images/logo.png"/>

<!-- Modal-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Modal-->
   <!-- Button-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Button-->

  <!-- table-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" type="text/css">
 <!-- table-->
  <title>User</title>
</head>

<style>

.wrapper{
  max-width: 100%;
  width: 80%;
  height: 100%;

}


.wrapper .form_containers{
 height: 400px;
  background: white;
  color: #0000b3;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 10px;
}
    :root {
  --navbar-bg-color: hsl(0, 0%, 15%);
  --navbar-text-color: hsl(0, 0%, 85%);
  --navbar-text-color-focus: white;
  --navbar-bg-contrast: hsl(0, 0%, 25%);
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  height: 100vh;
  font-family: "Roboto", sans-serif;
  background: #e6ecff;

}
.container {
  max-width: 1000px;
  padding-left: 1.4rem;
  padding-right: 1.4rem;
  margin-left: auto;
  margin-right: auto;
}
#navbar {
  --navbar-height: 64px;
  position: block;
  height: var(--navbar-height);
  background-color:#b30000;
  left: 0;
  right: 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
 color:white;
  display: flex;
    justify-content: space-between;
    padding: 15px 5%;
    align-items: center;


}
.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 100%;
  align-items: center;
  /* color: #0000b3; */
  color: white;

}
.navbar-item {
  margin: 0.4em;
  width: 100%;
  font-size: 20px;
  /* color:#b30000; */
  color: white;


}

.home-link,
.navbar-link {
  /* color: #b30000; */
  color: white;
  text-decoration: none;
  display: flex;
  font-weight: 100;
  align-items: center;
}

.home-link:is(:focus, :hover) {
  color: #ff1a1a;
}

.navbar-link {
  justify-content: center;
  width: 120%;
  padding: 0.4em 0.8em;
  border-radius: 5px;
  font-size: 18px;
  /* color:#b30000; */
  color:white;
  font-family: Helvetica;
}

.navbar-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
  /* background-color:#b30000; */
  background-color: #e60000;

}
.navbar-logo {
  border-radius: 50%;
  width: 10px;
  height: 30px;
  margin-right: 0.5em;
 color:white;
}
#navbar-toggle {
  cursor: pointer;
  border: none;
  background-color: transparent;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.icon-bar {
  display: block;
  width: 25px;
  height: 4px;
  margin: 2px;
  /* background-color:#b30000; */
  background-color:white;
}
#navbar-toggle:is(:focus, :hover) .icon-bar {
  background-color: #ffe6e6;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
  position: absolute;
  margin: 0;
  width: 30px;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
  transform: rotate(45deg);
}
#navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
  opacity: 0;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
  transform: rotate(-45deg);
}
#navbar-menu {
  position: fixed;
  top: var(--navbar-height);
  bottom: 0;
  opacity: 0;
  visibility: hidden;
  left: 0;
  right: 0;
}
#navbar-toggle[aria-expanded="true"] + #navbar-menu {
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 1;
  visibility: visible;
}
.navbar-links {
  list-style: none;
  position: absolute;
  background-color: #b30000;
  color:white;
  display: flex;
  flex-direction: column;
  align-items: center;
  left: 0;
  right: 0;
  margin: 1.4rem;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

#navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
  padding: 1em;
}
@media screen and (min-width: 700px) {
  #navbar-toggle,
  #navbar-toggle[aria-expanded="true"] {
    display: none;
  }

  #navbar-menu,
  #navbar-toggle[aria-expanded="true"] #navbar-menu {
    visibility: visible;
    opacity: 1;
    position: static;
    display: block;
    height: 100%;

  }

  .navbar-links,
  #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links  {
    margin: 0;
    padding: 0;
    box-shadow: none;
    position: static;
    flex-direction: row;
    width: 100%;
    height: 100%;
  }

}



.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}

@media only screen and (max-width: 768px) {


  .navbar-link {
  justify-content: center;
  width: 100%;
  padding: 0.4em 0.8em;
  font-size: 18px;
  /* color:#b30000; */
  color:white;
}

}


.nav-link{
  color:white;
}

.list-group-item{
  height: 40px;
}


 .row {
  display: flex;
}

.column {
  flex: 50%;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

.item{
  font-weight: bold;
  font-size: 22px;
  color:white;
}
.main-profile-img {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        border-style: solid;
        border-color: #FFFFFF;
        box-shadow: 0 0 8px 3px #B8B8B8;
    }
    
</style>
<body>

 <header id="navbar">
  <nav class="navbar-container container">

     <b><div class="item">RGCC</div></b>

    </a>
    <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div id="navbar-menu" aria-labelledby="navbar-toggle">
      <ul class="navbar-links">

     <li class="navbar-item"><a class="navbar-link" href="UserReq">Request</a></li>

     <li class="navbar-item"><form action="{{ route('logout') }}" method="POST">
                                @csrf
                    <a  class="navbar-link"  href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    <span >Logout</span>
     </a>
                    </form>
    </li>
    </ul>
    </div>
  </nav>

</header>
<center>

<div class="column">

    <div class="wrapper">

      <div class="form_container">

      <div class="row">
  <div class="column">

        <form name="form">
        <img src="images\icon.png" class="main-profile-img" />

                          <div class="mt-3">
                          <h4>{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name[0]}}. {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</h4>
                            <p class="text-muted font-size-sm">ID: <b>{{Auth::user()->student_id}}</b></p>
                            <p class="text-secondary mb-1">{{Auth::user()->course}} - {{Auth::user()->year}}</p>
                          </div>
          </form>

  </div>

  <div class="column">

      <table>

  <tr>
    <td>Student ID</td>
    <td>{{Auth::user()->student_id}}</td>

  </tr>
  <tr>
    <td>Full Name</td>
    <td>{{Auth::user()->First_Name}} {{Auth::user()->Middle_Name}} {{Auth::user()->Last_Name}} {{Auth::user()->suffix}}</td>

  </tr>
  <tr>
    <td>Course</td>
    <td>{{Auth::user()->course}}</td>
  </tr>
  <tr>
    <td>Year</td>
    <td>{{Auth::user()->year}}</td>
  </tr>
  <tr>
    <td>User Name</td>
    <td>{{Auth::user()->email}}</td>

  </tr>
  <!-- <tr>
    <td>Password</td>
    <td>{{$pass}}</td>

  </tr> -->
  <tr>
    <td>Mobile Number</td>
    <td>{{Auth::user()->cp_num}}</td>

  </tr>
</table>


  </div>

</div>
      </div>
    </div>
    </div>






<div class="wrapper">

 <div class="form_container">
      @if(session()->has('message'))
            <div class="alert alert-danger">
                {{ session()->get('message') }}
            </div>
        @endif
   <form name="form">
    <div class="heading">
  </div>
  <br>

  <div style="overflow-x:auto;">

   <table id="example" class="display"  width="100%">
                                    <thead>
                                        <tr>
                                            <!-- <th>Request ID</th> -->
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Course</th>
                                            <th>Date</th>
                                            <th>Requested Documnet</th>
                                            <th>Purpose</th>
                                            <th>Status</th>
                                            <th>Delete_Data</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    @foreach($doc as $doc)
                                        <tr>
                                            <!-- <td>{{$doc->id}}</td> -->
                                            <td>{{$doc->stud_id}}</td>
                                            <td>{{$doc->Name}}</td>
                                            <td>{{$doc->cp}}</td>
                                            <td>{{$doc->Course}}</td>
                                            <td>{{$doc->date}}</td>
                                            <td>{{$doc->HonDismissal}}

                                            @if ($doc->Special_Order != " ")
                                                @if ($doc->HonDismissal != " ")
                                                ,{{$doc->Special_Order}}
                                                @else
                                                {{$doc->Special_Order}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Diploma != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " ")
                                                ,{{$doc->Diploma}}
                                                @else
                                                {{$doc->Diploma}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->TOR != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " ")
                                                ,{{$doc->TOR}}
                                                @else
                                                {{$doc->TOR}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Form137 != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " ")
                                                ,{{$doc->Form137}}
                                                @else
                                                {{$doc->Form137}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->GoodMoral != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " ")
                                                ,{{$doc->GoodMoral}}
                                                @else
                                                {{$doc->GoodMoral}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->UnitEarned != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " ")
                                                ,{{$doc->UnitEarned}}
                                                @else
                                                {{$doc->UnitEarned}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Graduation != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " ")
                                                ,{{$doc->Graduation}}
                                                @else
                                                {{$doc->Graduation}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->GWA != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " " or $doc->Graduation != " ")
                                                ,{{$doc->GWA}}
                                                @else
                                                {{$doc->GWA}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Grades != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " " or $doc->Graduation != " " or $doc->GWA != " ")
                                                ,{{$doc->Grades}}
                                                @else
                                                {{$doc->Grades}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Auth_Transcript != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " " or $doc->Graduation != " " or $doc->GWA != " " or $doc->Grades != " ")
                                                ,{{$doc->Auth_Transcript}}
                                                @else
                                                {{$doc->Auth_Transcript}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Auth_Special_Order != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " " or $doc->Graduation != " " or $doc->GWA != " " or $doc->Grades != " " or $doc->Auth_Transcript != " ")
                                                ,{{$doc->Auth_Special_Order}}
                                                @else
                                                {{$doc->Auth_Special_Order}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($doc->Auth_Diploma != " ")
                                                @if ($doc->HonDismissal != " " or $doc->Special_Order != " " or $doc->Diploma != " " or $doc->TOR != " " or $doc->Form137 != " " or $doc->GoodMoral != " " or $doc->UnitEarned != " " or $doc->Graduation != " " or $doc->GWA != " " or $doc->Grades != " " or $doc->Auth_Transcript != " " or $doc->Auth_Special_Order != " ")
                                                ,{{$doc->Auth_Diploma}}
                                                @else
                                                {{$doc->Auth_Diploma}}
                                                @endif
                                            @else
                                            @endif

                                            </td>
                                            <td>{{$doc->Purpose}}</td>
                                            <td>{{$doc->Status}}</td>
                                            @if ($doc->Status == "New")
                                            <td>
                                              <button type="button" class="btn btn-danger"  id="deletebtn" data-toggle="modal" data-target="#Delete{{$doc->id}}"><i class='bx bx-trash'></i></button>
                                              @include('modal.DeleteRequest')
                                            </td>
                                            @else
                                            <td style="color:#E32421">This document is already processed!</td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


<!-- Delete Modal HTML -->
<!-- <div id="deleteModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

				<form id="delete_modal_Form" method="POST">
				{{ csrf_field() }}
            	{{ method_field('DELETE') }}
					<div class="modal-header">
						<h4 class="modal-title">Warning</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
					<input type="hidden" id="delete_youth_id">
						<p>Are you sure you want to delete your request?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-primary" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>

			</div>
		</div>
	</div> -->
<!-- Delete Modal HTML -->
<style>
    #del{
        color: red;
    }
</style>

<!-- <script>
              $(document).ready(function(){

                  $('.TableData').on('click', '#deletebtn', function(){
                    $tr = $(this).closest('tr');
                      var data = $tr.children("td").map(function(){
                          return $(this).text();
                      }).get();
                      $('#delete_youth_id').val(data[0]);
                      $('#delete_modal_Form').attr('action', 'request-delete/'+data[0]);
                      $('#deleteModal').modal('show');
                  });
              });
        </script> -->
  </form>
 </div>
</div>
</center>




<script>
  const navbarToggle = navbar.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);
</script>




     <!-- table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- table -->

</body>

<script>
  //table script pagination
$(document).ready(function () {
    $('#example').DataTable({
        pagingType: 'full_numbers',
    });
});
</script>
</html>
