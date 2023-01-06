 @extends('admin.layouts.main')
               @section('main')
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>DashBoard</h2>
                           </div>
                        </div>
                     </div>


                     <!-- <div class="modal">
   <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>The modal body is where all the text, images, and links go.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
   </div>
</div> -->

<!-- Model popup End  -->


 <!-- Button HTML (to Trigger Modal) -->
 <button type="button" class="btn btn-lg btn-primary" data-bs-target="#myModalr" data-bs-toggle="modal">Launch Demo Modal</button>

<!-- Modal HTML -->
<div id="myModalr" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
          
          <a href="" data-bs-toggle="modal" data-bs-target="#myModall" data-title="Feedback" class="mx-3">Feedback</a>


<div id="myModall" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-titlee">Modal Window</h5>
                    <button type="button" class="btn-close" data-bs dismiss="modal"></button>
                </div>
                <div class="modal-body">                        
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="text" class="form-control">
                    </div>
                                     
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
          
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                
            </div>
        </div>
    </div>
</div>
</div>
<script>
$(document).ready(function() {
    $("#myModal").on("show.bs.modal", function(event) {
        // Get the button that triggered the modal
        var button = $(event.relatedTarget);

        // Extract value from the custom data-* attribute
        var titleData = button.data("titlel");

        // Change modal title
        $(this).find(".modal-titlee").text(titleData);
    });
});
</script>
<!-- Container-fluid div Close -->
</div>
<div>
  <!-- footer -->
                 @endsection