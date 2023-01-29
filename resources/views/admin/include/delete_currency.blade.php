  <!-- Modal -->
  <div class="modal fade bg-danger" id="delete_currency{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.delete_currency',[$currency->id]) }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $currency->active == "yes"?"Disable":"Activate"}} Currency</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                 Are you sure you want to {{ $currency->active == "yes"?"disable":"activate"}} {{$currency->symbol}}
        
                   
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-{{ $currency->active == "yes"?"danger":"success"}}">{{ $currency->active == "yes"?"Disable":"Activate"}} {{$currency->symbol}}</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
