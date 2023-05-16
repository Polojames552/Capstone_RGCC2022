
<!-- Modal start -->
<div id="EditStudent{{$data->id}}" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="{{ route ('EditStudent' , $data->id) }}" method="post" enctype="multipart/form-data" id="SendForm">
      <!-- <form action="editstudent" method="post" enctype="multipart/form-data" id="editForm"> -->
      {{ csrf_field() }}
      <div class="modal-body">
					<!-- <div class="modal-body">
						<p>Are you sure you want to Delete this record?</p>
					</div> -->
            <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Student ID<span class="text-danger"></span></label>
                    <input type="text" name="StudentId" id="EditStudentId" class="form-control" placeholder="Student ID" value="{{$data->student_id}}" required>
                </div>

                <div class="form_item">
                    <label>First Name<span class="text-danger"></span></label>
                    <input type="text" name="FirstName" id="EditFirstName"  class="form-control" placeholder="Enter First Name" value="{{$data->First_Name}}" required>
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Last Name<span class="text-danger"></span></label>
                    <input type="text" name="LastName" id="EditLastName" class="form-control" placeholder="Enter Last Name" value="{{$data->Last_Name}}" required>
                </div>
                <div class="form_item">
                    <label>MiddleName<span class="text-danger"></span></label>
                    <input type="text" name="EditMiddleName" id="EditMiddleName" class="form-control" placeholder="Enter Middle Name" value="{{$data->Middle_Name}}">
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                    <label>Suffix<span class="text-danger"></span></label>
                    <input type="text"  name="EditSuffix" id="EditSuffix" class="form-control" placeholder="Suffix" value="{{$data->suffix}}">
                    </div>
                    <div class="form_item">
                    <label>Mobile Number<span class="text-danger"></span></label>
                    <input type="text"  name="EditMobileNumber" id="EditMobileNumber" class="form-control" placeholder="+639......" value="{{$data->cp_num}}" required>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <label>Course<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditCourse" id="EditCourse" required>
                        <option value="" selected="selected" disabled="disabled">Course</option>
                        @if($data->course == "BEED")
                            <option value="BEED" selected>BEED</option>
                            <option value="BSED Mathematics">BSED Mathematics</option>
                            <option value="BSED English">BSED English</option>
                            <option value="BSED Filipino">BSED Filipino</option>
                            <option value="BSCM  Major in Management">BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                        @elseif($data->course == "BSED Mathematics")
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" selected>BSED Mathematics</option>
                            <option value="BSED English">BSED English</option>
                            <option value="BSED Filipino">BSED Filipino</option>
                            <option value="BSCM  Major in Management">BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                        @elseif($data->course == "BSED English")
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" >BSED Mathematics</option>
                            <option value="BSED English" selected>BSED English</option>
                            <option value="BSED Filipino">BSED Filipino</option>
                            <option value="BSCM  Major in Management">BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                         @elseif($data->course == "BSED Filipino")
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" >BSED Mathematics</option>
                            <option value="BSED English" >BSED English</option>
                            <option value="BSED Filipino" selected>BSED Filipino</option>
                            <option value="BSCM  Major in Management">BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                        @elseif($data->course == "BSCM  Major in Management")
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" >BSED Mathematics</option>
                            <option value="BSED English" >BSED English</option>
                            <option value="BSED Filipino" >BSED Filipino</option>
                            <option value="BSCM  Major in Management" selected>BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                        @elseif($data->course == "BSBA Financial Management")
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" >BSED Mathematics</option>
                            <option value="BSED English" >BSED English</option>
                            <option value="BSED Filipino" >BSED Filipino</option>
                            <option value="BSCM  Major in Management" >BSCM  Major in Management</option>
                            <option value="BSBA Financial Management" selected>BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management">BSBA Human Resource and Development and Management</option>
                        @else
                            <option value="BEED" >BEED</option>
                            <option value="BSED Mathematics" >BSED Mathematics</option>
                            <option value="BSED English" >BSED English</option>
                            <option value="BSED Filipino" >BSED Filipino</option>
                            <option value="BSCM  Major in Management">BSCM  Major in Management</option>
                            <option value="BSBA Financial Management">BSBA Financial Management</option>
                            <option value="BSBA Human Resource and Development and Management" selected>BSBA Human Resource and Development and Management</option>
                        @endif
                    </select>
                    </div>

                    <div class="form_item">
                    <label>Year<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditYear" id="EditYear" required>
                        <option value="" selected="selected" disabled="disabled">Year</option>
                        @if($data->year == "1st")
                            <option value="1st" selected>1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                        @elseif($data->year == "2nd")
                            <option value="1st">1st</option>
                            <option value="2nd" selected>2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                        @elseif($data->year == "3rd")
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd" selected>3rd</option>
                            <option value="4th">4th</option>
                        @else
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th" selected>4th</option>
                        @endif
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