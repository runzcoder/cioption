  <!-- Modal -->
  <div class="modal fade bg-danger" id="delete_investment_type{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.delete_investment_type',[$item->id]) }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">{{ $item->active == "yes"?"Disable":"Activate"}} Investment Type</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                 Are you sure you want to {{ ucfirst($item->active == "yes"?"disable":"activate") }} {{$item->package}} Investment Type ?
        
                   
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-{{ $item->active == "yes"?"danger":"success"}}">{{ $item->active == "yes"?"Disable":"Activate"}} {{$item->package}}</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
