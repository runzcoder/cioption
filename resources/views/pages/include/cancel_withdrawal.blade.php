  <!-- Modal -->
  <div class="modal fade bg-danger" id="cancel_withdrawal{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
      @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Withdrawal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
               Are you sure you want to  Withdrawal of $ {{$withdrawal->amount}}. 
      
                 <input type="hidden" name="id" value="{{$withdrawal->id}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="/dashboard/cancel_withdrawal/{{$withdrawal->id}}/"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </div>
        </div>
    </form>
</div>
