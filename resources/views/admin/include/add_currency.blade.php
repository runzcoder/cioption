  <!-- Modal -->
  <div class="modal fade" id="add_currency" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.add_currency') }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Currency</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="name"><b>name</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="text" name="name" class="w-100" placeholder="name eg. DOLLAR, NAIRA, ETHEREUM">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="symbol"><b>symbol</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="text" name="symbol" class="w-100" placeholder="symbol e.g. USDT, NGN, ETH">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="image"><b>image</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="text" name="image" class="w-100" placeholder="image url">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="type"><b>type</b></label>:
                        </div>
                        <div class="col-9">
                           <select name="type" class="w-100" id="">
                            <option value="">Select Type</option>
                            <option value="fiat">Fiat</option>
                            <option value="crypto">Crypto</option>
                           </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <label for="network"><b>network</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="text" name="network" class="w-100" placeholder="network">
                            <small class="text-warning p-2">Enter blockchain network for crypto only</small>
                        </div>
                    </div>
                   
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add Currency</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
