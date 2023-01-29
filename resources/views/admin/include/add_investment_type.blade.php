  <!-- Modal -->
  <div class="modal fade" id="add_investment_type" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.add_investment_type') }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Investment Type</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-3">
                            <label for="package"><b>package</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="text" name="package" class="w-100" placeholder="package name eg. Basic, Standard, Professional">
                        </div>

                        <div class="col-3">
                            <label for="duration"><b>duration</b></label>:
                        </div>
                        <div class="col-9">
                            <select name="duration" id="" class="w-100">
                                <option value="">Select Duration</option>
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="bi-weekly">Bi-Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                                <option value="midyearly">6 Months</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>

                        <div class="col-3">
                            <label for="roi"><b>ROI</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="number" name="roi" class="w-100" placeholder="eg. 10, 25, 30">
                        </div>

                        <div class="col-3">
                            <label for="min"><b>Minimum</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="number" name="min" class="w-100" placeholder="Enter minimum amount">
                        </div>

                        <div class="col-3">
                            <label for="max"><b>Minimum</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="number" name="max" class="w-100" placeholder="Enter maximum amount">
                        </div>
                        <div class="col-3">
                            <label for="cover_image_url"><b>Cover Image</b></label>:
                        </div>
                        <div class="col-9">
                            <input type="string" name="cover_image_url" class="w-100" placeholder="Enter cover image url">
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Add Investment Type</button>
                  </div>
              </div>
          </div>
      </form>
  </div>
