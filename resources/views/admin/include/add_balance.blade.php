  <!-- Modal -->
  <div class="modal fade" id="add_balance{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.add_balance') }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">Add bonus to user balance</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-dark p-5">
                             You're adding money to <b>{{$user->name}}'s balance</b>
                        </div>
                        <div class="col-12">
                               <input type="number" name="amount" placeholder="Enter Amount" class="w-100 alert alert-light">
                        </div>
                    </div>
                    
                    {{-- user id --}}
                    <input type="hidden" value="{{$user->id}}" name="user_id">
                    
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Update User Balane</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
