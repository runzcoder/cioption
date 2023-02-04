  <!-- Modal -->
  <div class="modal fade bg-muted" id="save_withdraw{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/dashboard/save_withdrawal" method="post">
      @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm Withdrawal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="bg-dark">
                      Enter Amount ($)
                      <input 
                      onkeyup="
                        document.getElementById('coin_amount{{$loop->index}}').innerHTML = `{{$currency->symbol}}` == 'NGN' ? `${(Number(this.value)  * Number(document.getElementById('rate{{$loop->index}}').value)).toFixed(8) || 0 }` : `${(Number(this.value)  / Number(document.getElementById('rate{{$loop->index}}').value)).toFixed(8) || 0 }`;
                        document.getElementById('withdrawal_amount{{$loop->index}}').innerHTML = this.value
                      " 
                      onclick="
                      getRate('{{$currency->name}}','{{$_getSetting::getSetting('naira_rate')}}').
                      then(e => { document.getElementById('rate{{$loop->index}}').value = `${e}`; document.getElementById('rate2{{$loop->index}}').innerHTML = `${e}`;}).catch(e=>alert(e.message))" 
                      required class="w-100 p-2 mb-3" id="amount" min="100" max="{{$_loggedUser->balance}}" type="number" name="amount" id="amount"  placeholder="0.00" required>
                     
                     <input required class="w-100 mb-3" id="rate{{$loop->index}}" type="text" name="rate" value="">  <br> 
                      
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
                       Withdrawl Amount:  <span id="withdrawal_amount{{$loop->index}}">0.0</span> <br>
                         Dollar Rate (1 {{strtoupper($currency->symbol)}} = $<span id="rate2{{$loop->index}}">0</span>) <br>
                       Your Will recieve:  <span id="coin_amount{{$loop->index}}">0</span>{{strtoupper($currency->symbol)}} <br>
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
