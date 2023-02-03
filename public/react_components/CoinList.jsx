'use strict';

const e = React.createElement;

class SelectCoin extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      coin_list: JSON.parse(localStorage.getItem("coin_lists") || "[]"),
      coin_data: {},
      pay_option: "crypto"
     };
    this.fetchCoinData = this.fetchCoinData.bind(this);
    this.handleType = this.handleType.bind(this);
  }

  fetchCoinData(e)  {
   try {
    fetch(`https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${e.target.value}&order=market_cap_desc&per_page=100&page=1&sparkline=false`)
    .then(res => res.json())
    .then(data => {
      // console.log(data)
      this.setState({coin_data: data[0]})
    })
   } catch (error) {
    
   }
  }

  handleType(e)
  {
    this.setState({pay_option: e.target.value});
  }

  render() {
   
    return (<div className="modal-dialog">
              <div className="modal-content">
                  <div className="modal-header">
                      <h1 className="modal-title fs-5" id="exampleModalLabel">Add New Currency</h1>
                      <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div className="modal-body">
                  <div className="row">
                        <div className="col-12 text-center w-100">
                          {this.state.coin_data.image && <img width="100px" src={this.state.coin_data.image} alt="" />}
                          </div>
                          </div>
                  <div className="row">
                        <div className="col-12">
                            <label for="type"><b>Choose currency type</b></label>:
                        </div>
                        <div className="col-12">
                           <select name="type" value={this.state.pay_option} onChange={this.handleType} className="w-100" id="">
                            <option value="">Select Type</option>
                            <option value="fiat">Fiat</option>
                            <option value="crypto">Crypto</option>
                           </select>
                        </div>
                    </div><br />

                    <div className="row">
                        <div className="col-12">
                        {
                        this.state.pay_option == "crypto" ? <select name="name" className="w-100" onChange={this.fetchCoinData}>
                        <option value=""  >Select Currency</option>
                        {this.state.coin_list.map(e => <option  key={e.id} value={e.id}>{e.name}</option>)}
                      </select>
                      : 
                      <span>
                      <br />
                      <label>Enter currency</label> 
                      <input className="w-100" type="text" name="name" placeholder="Naira, Dollar, Euros" />
                      </span>
                      }
                        </div>
                    </div>

                    <div className="row">
                      
                        <div className="col-12">
                        {
                        this.state.pay_option == "crypto" ?
                         <input type="hidden" value={this.state.coin_data.symbol} name="symbol" className="w-100" placeholder="name eg. DOLLAR, NAIRA, ETHEREUM" />
                         : 
                         <span><br />
                         <label>Enter currency symbol</label> 
                         <input type="text" name="symbol" className="w-100" placeholder="name eg. NGN, USD" />
                         </span>}
                        </div>
                    </div>
                    <div className="row">
                        <div className="col-12">
                        {
                        this.state.pay_option == "crypto" ?
                            <input type="hidden" value={this.state.coin_data.image} name="image" className="w-100" placeholder="image url" />
                            :
                            <span><br />
                            <label>Enter  image url</label> 
                             <input type="text" name="image" className="w-100" placeholder="image url" required />
                            </span>
                           }
                        </div>
                    </div>
                   
                    {
                        this.state.pay_option == "crypto" && <div className="row">
                        <div className="col-12">
                            <label for="network"><b>network</b></label>:
                        </div>
                        <div className="col-12">
                            <input type="text" name="network" className="w-100" placeholder="network" />
                            <small className="text-warning p-2">Enter blockchain network for crypto only</small>
                        </div>
                       
                    </div>
                    }
                  </div>
                  <div className="modal-footer">
                      <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" className="btn btn-primary">Add Currency</button>
                  </div>
              </div>
          </div>      
    );
  }
}

const domContainer = document.querySelector('#add_currency_form');
const root = ReactDOM.createRoot(domContainer);
root.render(<SelectCoin />);