<!-- Modal start -->
<div class="modal fade" id="Delete{{$doc->id}}">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b>Warning!</b></h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form method="POST" action="delete_data{{$doc->id}}">
      <!-- <input type="text" value="{{$doc->id}}"> -->
      <div class="modal-body">
		  <h6> Are you sure you want to <b><i id="del">Delete</i></b> this request?</h6>
      <div class="modal-footer">
          <!-- <input type="submit" class="btn btn-danger" value="Delete"> -->
          <a href="{{ url('delete/'.$doc->id) }}" class="btn btn-danger">Delete</a>
          <input type="button" class="btn btn-primary" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->
<style>
    #del{
        color: red;
    }
</style>
