  <!-- Modal -->
  <div class="modal fade bg-muted" id="save_withdraw{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="dashboard/save_withdraw/" method="post">
      @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Withdrawal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="bg-primary">
                      Enter Amount ($)
                      <input required class="w-100 p-2 mb-3" id="amount" min="100" max="{{$_loggedUser->balance}}" type="number" name="amount" id="amount"  placeholder="0.00" required>
                     
                     <input required class="w-100 mb-3" type="hidden" name="rate" value="">  <br> 
                      
                      <input required class="w-100 mb-3" type="hidden" name="currency_id" value="{{$currency->id}}">  
                      @if ($currency->type == "fiat")
                      Enter Account Numner
                      @else
                      Enter Wallet Address 0x...
                      @endif
                      <input required class="w-100 mb-3" type="text" name="accno_address" value="">  
                      @if ($currency->type == "fiat")
                     Bank
                      @else
                      Network Type:  ERC-20, BEP20 etc
                      @endif
                      <input required class="w-100 mb-3" type="text" name="bank_network" value="">  
                      
                      @if ($currency->type == "fiat")
                      Enter Account Name
                      <input required class="w-100 mb-3" type="text" name="account_name" value="">  

                      @endif
                      <br>
                     
                      
                      <p class="bg-dark p-3">
                        Your balance is ${{$_loggedUser->balance}} <br>
                         Dollar Rate (1 {{strtoupper($currency->symbol)}} = <span id="rate">0</span>$)
                      </p>
                  </p>
                  <hr>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Make Withdrawal</button>
                </div>
             </div>

                </div>
             
            </div>
      
    </form>
   </div>
