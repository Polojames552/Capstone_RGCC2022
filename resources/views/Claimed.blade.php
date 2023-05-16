<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
   
    <link rel="stylesheet" href="css/styles.css"> 

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png"/>

     <!-- table-->
 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" type="text/css">
 <!-- table-->
    <title>Claimed Documents</title>
</head>
<style>
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

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">RGCC</span>
                    <span class="profession">Request System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-link">
                    <li class="nav-link">
                        <a href="dashboard"method="GET">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="Adduser"method="GET">

                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Add User</span>
                        </a>
                    
                    </li>
                    
                    <li class="nav-link">
                        <a href="NewRequest">
                        <i class='bx bxs-file-plus icon'></i>
                            <span class="text nav-text">New Request</span>
                        </a>
                    </li> 

                    <li class="nav-link">
                        <a href="Claimed"method="GET">
                        <i class='bx bx-task icon'></i>
                            <span class="text nav-text">Claimed</span>
                        </a>
                    </li> 

               
                    <li class="nav-link">
                        <a href="Unclaimed">
                        <i class='bx bxs-file icon'></i>
                            <span class="text nav-text">Unclaimed </span>
                        </a>
                    </li> 

                    <form method="POST" action="{{ route('logout') }}">
                            @csrf

                      
                    <li class="nav-link">
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                     </li>
                     
                </form>
               </ul>
            </div>
        </div>      
    </nav>


    <section class="home">
        <div class="text">Claimed Documents</div>
<!--         
        <div class="row">
       
        <div class="main-section">
        <div class="columns">
		<div class="dashbord">
			<div class="icon-section">
				<i class="bx bx-task" aria-hidden="true"></i><br>
				<small>Claimed Documents</small>
				<p>{{$claimed}}</p>
			</div>
			<div class="detail-section">
				<a href="Claimed">More Info </a>
			</div>
		</div>
        </div>
        <div class="columns">
		<div class="dashbord dashbord-red">
			<div class="icon-section">
				<i class="bx bxs-file-plus" aria-hidden="true"></i><br>
				<small>New Request</small>
				<p>{{$new}}</p>
			</div>
			<div class="detail-section">
				<a href="NewRequest" method="GET">More Info </a>
			</div>
		</div>
        </div>
        <div class="columns">
		<div class="dashbord dashbord-orange">
			<div class="icon-section">
				<i class="bx bxs-file" aria-hidden="true"></i><br>
				<small>Unclaimed Process Document</small>
				<p>{{$ready}}</p>
			</div>
			<div class="detail-section">
				<a href="Unclaimed">More Info </a>
			</div>
            </div>
		</div>
	</div>
        </div> -->
      <br>
    <div class="wrapper">
     @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
    <div class="form_container">
    <div style="overflow-x:auto;">

<table id="example" class="display"  width="100%">
                                    <thead>
                                        <tr>
                                            <th>Request ID</th>
                                            <th>Student ID</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Course</th>
                                            <th>Date</th>
                                            <th>Requested Documnet</th>
                                            <th>Purpose</th>
                                            <th>Status</th>
                                            <th>Processes</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    
                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->stud_id}}</td>
                                            <td>{{$data->Name}}</td>
                                            <td>{{$data->cp}}</td>
                                            <td>{{$data->Course}}</td>
                                            <td>{{$data->date}}</td>
                                            <td>{{$data->HonDismissal}} 
                                           
                                            @if ($data->Special_Order != " ")
                                                @if ($data->HonDismissal != " ")
                                                ,{{$data->Special_Order}}
                                                @else
                                                {{$data->Special_Order}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Diploma != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " ")
                                                ,{{$data->Diploma}}
                                                @else
                                                {{$data->Diploma}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->TOR != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " ")
                                                ,{{$data->TOR}}
                                                @else
                                                {{$data->TOR}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Form137 != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " ")
                                                ,{{$data->Form137}}
                                                @else
                                                {{$data->Form137}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->GoodMoral != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " ")
                                                ,{{$data->GoodMoral}}
                                                @else
                                                {{$data->GoodMoral}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->UnitEarned != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " ")
                                                ,{{$data->UnitEarned}}
                                                @else
                                                {{$data->UnitEarned}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Graduation != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " ")
                                                ,{{$data->Graduation}}
                                                @else
                                                {{$data->Graduation}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->GWA != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " " or $data->Graduation != " ")
                                                ,{{$data->GWA}}
                                                @else
                                                {{$data->GWA}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Grades != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " " or $data->Graduation != " " or $data->GWA != " ")
                                                ,{{$data->Grades}}
                                                @else
                                                {{$data->Grades}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Auth_Transcript != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " " or $data->Graduation != " " or $data->GWA != " " or $data->Grades != " ")
                                                ,{{$data->Auth_Transcript}}
                                                @else
                                                {{$data->Auth_Transcript}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Auth_Special_Order != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " " or $data->Graduation != " " or $data->GWA != " " or $data->Grades != " " or $data->Auth_Transcript != " ")
                                                ,{{$data->Auth_Special_Order}}
                                                @else
                                                {{$data->Auth_Special_Order}}
                                                @endif
                                            @else
                                            @endif

                                            @if ($data->Auth_Diploma != " ")
                                                @if ($data->HonDismissal != " " or $data->Special_Order != " " or $data->Diploma != " " or $data->TOR != " " or $data->Form137 != " " or $data->GoodMoral != " " or $data->UnitEarned != " " or $data->Graduation != " " or $data->GWA != " " or $data->Grades != " " or $data->Auth_Transcript != " " or $data->Auth_Special_Order != " ")
                                                ,{{$data->Auth_Diploma}}
                                                @else
                                                {{$data->Auth_Diploma}}
                                                @endif
                                            @else
                                            @endif
                                            
                                            </td> 
                                            <td>{{$data->Purpose}}</td>
                                            <td>{{$data->Status}}</td>
                                            <td style="color:#0FA418">
                                                Done
                                                <!-- <a href="javascript:void(0)" class="btn btn-primary" id="editbtn"><i class='bx bx-message-check' data-toggle="tooltip" title="Edit"></i></a> -->
                                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-edit-alt'></i></button> -->
                                                <!-- <button type="button" class="btn btn-success"><i class='bx bx-receipt'></i></button> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>

    </section>

    <style>
        #item{
            color: red;
        }
    </style>
    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})


    </script>

        <!-- <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>   grap link
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
       -->

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
