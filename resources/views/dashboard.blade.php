<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/styles.css">

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" type="text/css">
    <link rel="shortcut icon" href="images/logo.png"/>
    <title>Admin Dashboad</title>
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

<section id="home">
<div class="wrapper">
    <div class="form_container">


    </div>
        </div>

</section>
    <section class="home">

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
        </div>
      <br>


  <h5 class="add">Enrolled Student: <b id="mark">{{$num}}</b></h5>


    <div class="wrapper">
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
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
                                            <th>Account No.</th>
                                            <th>Student ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Suffix</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Mobile Number</th>
                                            <th>Processes</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    @foreach($data as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->student_id}}</td>
                                            <td>{{$data->First_Name}}</td>
                                            <td>{{$data->Middle_Name}}</td>
                                            <td>{{$data->Last_Name}}</td>
                                            <td>{{$data->suffix}}</td>
                                            <td>{{$data->course}}</td>
                                            <td>{{$data->year}}</td>
                                            <td>{{$data->cp_num}}</td>
                                            <td>
                                                <!-- <button class="btn btn-primary" id="editbtn" data-toggle="tooltip"><i class="bx bx-edit-alt" title="Edit"></i></button> -->
                                                <button type="button" class="btn btn-primary"  id="edit" data-toggle="modal" data-target="#EditStudent{{$data->id}}"><i class="bx bx-edit-alt" title="Edit"></i></button>
                                                @include('modal.EditStudent')
                                                <!-- <a href="javascript:void(0)" class="btn btn-success" id="editbtn"><i class="bx bx-edit-alt" data-toggle="tooltip" title="Edit"></i></a> -->
                                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><i class='bx bx-edit-alt'></i></button> -->
                                                <!-- <button type="button" class="btn btn-success"><i class='bx bx-receipt'></i></button> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                                </div>
        </div>
    </section>

<!-- Edit css -->

<!-- Modal start -->
 <div id="EditMe" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="editstudent" method="post" enctype="multipart/form-data" id="editForm">
      {{ csrf_field() }}
      <div class="modal-body">
					<!-- <div class="modal-body">
						<p>Are you sure you want to Delete this record?</p>
					</div> -->
            <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Student ID<span class="text-danger"></span></label>
                    <input type="text" name="StudentId" id="EditStudentId" class="form-control" placeholder="Student ID" required>
                </div>

                <div class="form_item">
                    <label>First Name<span class="text-danger"></span></label>
                    <input type="text" name="FirstName" id="EditFirstName"  class="form-control" placeholder="Enter First Name" required>
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Last Name<span class="text-danger"></span></label>
                    <input type="text" name="LastName" id="EditLastName" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form_item">
                    <label>MiddleName<span class="text-danger"></span></label>
                    <input type="text" name="EditMiddleName" id="EditMiddleName" class="form-control" placeholder="Enter Middle Name">
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                    <label>Suffix<span class="text-danger"></span></label>
                    <input type="text"  name="EditSuffix" id="EditSuffix" class="form-control" placeholder="Suffix">
                    </div>
                    <div class="form_item">
                    <label>Mobile Number<span class="text-danger"></span></label>
                    <input type="text"  name="EditMobileNumber" id="EditMobileNumber" class="form-control" placeholder="+639......" required>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <label>Course<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditCourse" id="EditCourse" required>
                        <option value="" selected="selected" disabled="disabled">Course</option>
                        <option value="BEED">BEED</option>
                        <option value="BSED">BSED Mathematics</option>
                        <option value="">BSED English</option>
                        <option value="">BSED Filipino</option>
                        <option value="BSCM">BSCM  Major in Management</option>
                        <option value="BSBA">BSBA Financial Management </option>
                        <option value="">BSBA Human Resource and Development and Management</option>

                                    </select>
                    </div>

                    <div class="form_item">
                    <label>Year<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditYear" id="EditYear" required>
                        <option value="" selected="selected" disabled="disabled">Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                    </select>
                    </div>
            </div>


      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Edit">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->

<script>
     // Edit
     $(document).ready(function(){

        $('.TableData').on('click', '#editbtn', function(){
        $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            $('#EditStudentId').val(data[1]);
            $('#EditFirstName').val(data[2]);
            $('#EditLastName').val(data[4]);
            $('#EditMiddleName').val(data[3]);
            $('#EditSuffix').val(data[5]);
            $('#EditCourse').val(data[6]);
            $('#EditYear').val(data[7]);
            $('#EditMobileNumber').val(data[8]);
            // $('#delete_modal_Form').attr('action', 'assets-delete/'+data[0]);
            $('#editForm').attr('action', 'EditStudent/'+data[0]);
            $('#EditMe').modal('show');
        });
});
</script>
    <style>
        #mark{
            color:rgba(225, 15, 0, 0.8);
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



</body>

<!-- table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- table -->

<script>
  //table script pagination
$(document).ready(function () {
    $('#example').DataTable({
        pagingType: 'full_numbers',
    });
});
</script>
</html>
