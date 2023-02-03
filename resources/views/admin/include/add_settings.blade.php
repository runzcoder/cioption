  <!-- Modal -->
  <div class="modal fade" id="add_settings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ route('admin.add_settings') }}" method="post">
      @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="exampleModalLabel">New Settings</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                      <div class="col-12">
                          <label for="symbol"><b>Setting</b></label>:
                      </div>
                      <div class="col-12">
                          <input type="text" name="name" class="w-100" placeholder="Enter Settings title. lower case no spaces">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <label for="image"><b>Value</b></label>: <br>
                          <input type="text" name="value" class="w-100" placeholder="Enter settings value">
                      </div>
                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>
