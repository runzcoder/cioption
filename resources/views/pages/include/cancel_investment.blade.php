  <!-- Modal -->
  <div class="modal fade bg-danger" id="cancel_investment{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="dashboard/cancel_investment/" method="post">
      @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Investment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
               Are you sure you want to  Investment of $ {{$_investment->amount}}. <div class="alert alert-danger">Note that if you cancel investment before the due date you will not get any profit</div>
      
                 <input type="text" name="id" value="{{$_investment->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>
