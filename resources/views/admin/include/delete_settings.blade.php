  <!-- Modal -->
  <div class="modal fade bg-danger" id="delete_settings{{ $loop->index }}" tabindex="-1"
      aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.delete_settings') }}" method="post">
          @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel"> Settings</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      Are you sure you want to delete {{ $setting->name }}
                      <input type="hidden" name="id" value="{{ $setting->id }}">

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-danger">Delete {{ $setting->name }}</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
