  <!-- Modal -->
  <div class="modal fade" id="change_role{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.change_role') }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">Change User Role</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-dark p-5">
                             You're changing the role of <b>{{$user->name}}</b>
                        </div>
                        <div class="col-12">
                            <select name="level" id="" class="w-100 alert alert-primary">
                                <option value="">Choose Level</option>
                                
                                <option value="user">Ordinary User</option>
                                <option value="admin">Admin</option>
                         
                            </select>
                        </div>
                    </div>
                    
                    {{-- user id --}}
                    <input type="hidden" value="{{$user->id}}" name="user_id">
                    
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Change Role</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
