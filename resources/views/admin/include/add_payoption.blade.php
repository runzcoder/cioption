  <!-- Modal -->
  <div class="modal fade" id="add_payoption" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="{{ route('admin.add_payoption') }}" method="post">
        @csrf
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h3 class="modal-title fs-5" id="exampleModalLabel">New Payment Option</h3>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <label for="name"><b>Currency</b></label>:
                        </div>
                        <div class="col-12">
                            <select name="currencies" id="" class="w-100">
                                <option value="">Choose currency</option>
                                @foreach($currencies as $currency)
                                <option value="{{$currency->id}}">{{$currency->symbol}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="name"><b>Type</b></label>:
                        </div>
                        <div class="col-12">
                            <select name="type" id="" class="w-100">
                                <option value="">Choose Type</option>
                                <option value="fiat">Fiat</option>
                                <option value="crypto">Crypto</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="symbol"><b>Bank_name</b></label>:
                        </div>
                        <div class="col-12">
                            <input type="text" name="bank_name" class="w-100" placeholder="bank_name for fiat only">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="image"><b>account_number</b></label>: <br>
                            <input type="text" name="account_number" class="w-100" placeholder="account_number for fiat only">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <label for="network"><b>Crypto Type</b></label>:
                            <input type="text" name="network" class="w-100" placeholder="Crypto only e.g. ERC-20, BEP-20 etc">
                        </div>
                    </div>

                 <div class="row">
                        <div class="col-12">
                            <label for="wallet_address"><b>Wallet Addrtess or Account name</b></label>: <br>
                            <input type="text" name="wallet_address" class="w-100" placeholder="wallet_address for crypto  or account name for fiat">
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
