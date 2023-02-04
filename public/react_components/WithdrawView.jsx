'use strict';

const e = React.createElement;

class WithdrawView extends React.Component {

    constructor(props){
        super(props)
        this.state = {
            token: document.querySelector('meta[name="csrf-token"]').content,
            pay_options: [],
            currencies: [],
            amount: 0.0,
            selectedPayOption: "Nill",
            selectedPaySymbol: "Nill",
            selectedOptionRate:0.0,
            currency_id: ""
        }
        this.fetchPayOptions = this.fetchPayOptions.bind(this)
        this.getCurrency = this.getCurrency.bind(this)
        this.choosePayOption = this.choosePayOption.bind(this)
        this.getAmount = this.getAmount.bind(this)
    }

    fetchPayOptions(){
        fetch(location.protocol+"//"+location.host+"/get_pay_options")
        .then(res => res.json())
        .
        then(data => {
            this.setState({pay_options: data[0], currencies: data[1]})
        });
    }

    choosePayOption(e)
    {
       let currency = this.getCurrency(this.getPayOption(e.target.value).currencies) || null;
       if (currency == null) {
        throw "failed"
       }
        fetch(`https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${currency.name}&order=market_cap_desc&per_page=100&page=1&sparkline=false`)
        .then(res => res.json())
        .then(data => {
            this.setState({
                selectedPayOption: data[0].symbol,
                selectedOptionRate:data[0].current_price,
                currency_id:data[0].id
            })
        })
        .catch(e =>{
            this.setState({
                selectedPayOption: "Nill",
                selectedOptionRate: "Nill",
                currency_id: ""
            })
        });
    }

    getCurrency(id)
    {
        return this.state.currencies.find(e => e.id == id) || {}
    }
    getPayOption(id)
    {
        return this.state.pay_options.find(e => e.id == id) || {}
    }

    getAmount(e)
    {
        this.setState({amount: e.target.value})
    }

    componentDidMount(){
        this.fetchPayOptions();
    }

    render(){
        return  <div class="row">
         <div class="col-md-8" >
         <div>
            <form action="/dashboard/submit_deposit" method="post" id="submitpaymentform">
            <input type="hidden" name="_token" id=""  value={this.state.token} />
              <div className="row">
                  <div className="mb-4 col-md-12">
                      <h5 className="card-title ">Enter Amount (USD)</h5>
                      <input className="form-control " onChange={this.getAmount}  value={this.state.amount} placeholder="Enter Amount" min="50"
                          type="number" name="amount" required />
                  </div>
                  <div className="mb-4 col-md-12">
                      <input type="hidden" name="currency_id" value={this.state.currency_id} id="paymethod" required />
                      <input type="hidden" name="dollar_rate" value={this.state.selectedOptionRate} id="paymethod" required />
                  </div>
                  <div className="mt-2 mb-1 col-md-12">
                      <h5 className="card-title ">Choose Payment Method from the list below</h5>
                  </div>

                 
                      {this.state.pay_options.length < 1 ?
                        <div className="mb-2 col-md-6 alert alert-info">

                          No Payment option available

                      </div>
                      :
                      
                          this.state.pay_options.map(e =>
                            <div className="mb-2 col-md-6" key={e.id}>
                            <a style={{cursor: "pointer"}} data-method="Bank Transfer"
                                id="12" className="text-decoration-none">
                                <div className="rounded shadow ">
                                    <div
                                        className="card-body d-flex justify-content-between align-items-center">
                                        <span className="">
                                            <img width="30px" src={this.getCurrency(e.currencies).image} alt="" /> 
                                          {this.getCurrency(e.currencies).symbol.toUpperCase()}
                                        </span>
                                        <span>
                                            <input onChange={this.choosePayOption} type="radio" id="12customCheck1" name="pay_options_id" value={e.id}
                                                readOnly />
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>)}
                          

                      <div className="mt-2 mb-1 col-md-12">
                          <input type="submit" className="px-5 btn btn-primary btn-lg"
                              value="Procced to Payment" disabled={this.state.selectedPayOption == "Nill" || this.state.amount < 1} />
                      </div>
              </div>
          </form>
        </div>
         </div>
         <div class="mt-4 col-md-4">
             <div class="card">

                 <div class="card-body">
                     <div class="pb-4">
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h6 class="mb-0">USD ($)</h6>
                             </div>
                             <div class="col-6">
                                 <h6 class="mb-1">
                                     ${this.state.amount}
                                 </h6>
                                 
                             </div>
                         </div>
                         <div class="row align-items-center">
                             <div class="col-6">
                                 <h6 class="mb-0">
                                    {this.state.selectedPayOption.toUpperCase()}
                                    </h6>
                             </div>
                             <div class="col-6">
                                 <h6 class="mb-1">
                                    {(this.state.amount / this.state.selectedOptionRate).toFixed(9)}
                                 </h6>
                             </div>
                         </div>
                     </div>

                 </div>
                 <div class="card-footer">
                     <div class="actions d-flex justify-content-between">
                         <a href="ph.html" class="action-item">
                             <span class="btn-inner--icon">View deposit history</span>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    }
}


const withdraw_form = document.querySelector('#withdraw_form');
const root = ReactDOM.createRoot(withdraw_form);
root.render(<WithdrawView />);