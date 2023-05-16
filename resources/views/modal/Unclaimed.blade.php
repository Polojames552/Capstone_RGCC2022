<!-- Modal start -->
<div class="modal fade" id="Unclaimed{{$data->id}}">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div> 
      <form action="{{ route ('claim' , $data->id) }}" method="post" enctype="multipart/form-data" id="claimform">
      {{ csrf_field() }}
      <div class="modal-body">
       <!-- <input type="text" name="TrasnID" id="TrasnID" class="form-control" disabled>  -->
      <!-- <input type="text" name="FullName" id="FullName" class="form-control" disabled> -->
		The Document has been <b>Claimed</b>!
      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Send">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div> 
<!-- Modal end -->