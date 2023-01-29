  <!-- Modal -->
  <div class="modal fade bg-danger" id="delete_payoption{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.delete_payoption',[$option->id]) }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">Delete Payment Option</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-danger">
                 Are you sure you want to delete {{$option->currency->symbol}}
        
                   
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete {{$option->currency->symbol}}</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
