'use strict';

const e = React.createElement;

class DepositConfirm extends React.Component {

    constructor(props) {
        super(props)
        this.state = {
            token: document.querySelector('meta[name="csrf-token"]').content,
            walletAddress: "0x...",
            pay_options: {},
            amount: 1,
            dollar_rate: 1,
            currency_id: "",
            currency_symbol: "",
            currency_network: "",
            payment_proof: "",
            status: "pending",
            pay_options_id: "",
            selectedPayOption: "Nill",
            selectedOptionRate: "Nill",
            pay_options: [],
            currencies: [],
            deposit_id: 0,
            deposit:{}
        }

        this.getCurrency = this.getCurrency.bind(this)
        this.getPayOption = this.getPayOption.bind(this)
        this.fetchCoinData = this.fetchCoinData(this)
        this.copyAddress = this.copyAddress.bind(this)
    }

    fetchCoinData(id) {
        try {
            fetch(`https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${id}&order=market_cap_desc&per_page=100&page=1&sparkline=false`)
                .then(res => res.json())
                .then(data => {
                    this.setState({ coin_data: data[0] })
                })
        } catch (error) {

        }
    }

    getCurrency(id) {
        return this.state.pay_options.find(e => e.currency_id == id);
    }

    copyAddress() {
        navigator.clipboard.writeText(this.state.walletAddress);
        alert("Copied");
    }



    // choosePayOption(e)
    // {
    //     fetch(`https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${e.target.value}&order=market_cap_desc&per_page=100&page=1&sparkline=false`)
    //     .then(res => res.json())
    //     .then(data => {
    //         console.log(data[0])
    //         this.setState({
    //             selectedPayOption: data[0].symbol,
    //             selectedOptionRate:data[0].current_price,
    //             currency_id:data[0].id
    //         })
    //     })
    //     .catch(e =>{
    //         this.setState({
    //             selectedPayOption: "Nill",
    //             selectedOptionRate: "Nill",
    //             currency_id: ""
    //         })
    //     });
    // }

    getCurrency(id) {
        return this.state.currencies.find(e => e.id == id) || {}
    }

    getPayOption(id) {
        return this.state.pay_options.find(e => e.id == id) || {}
    }

    componentDidMount() {
        let myurl = location.href
        myurl = myurl.split("/");
        fetch(location.protocol + "//" + location.host + `/dashboard/deposit_confirm/${myurl[myurl.length - 1]}/yes`)
            .then(res => res.json())
            .
            then(async data => {
                this.setState({
                    amount: data[0].amount,
                    pay_options_id: data[0].pay_options_id,
                    deposit_id: data[0].id,
                    dollar_rate: data[0].dollar_rate,
                    payment_proof: data[0].payment_proof,
                    status: data[0].status,
                    walletAddress: data[1].wallet_address,
                    currency_symbol: data[2].symbol.toUpperCase(),
                    currency_network: data[2].network,
                    deposit: data[0]
                })
            })
            .then(() => {
            })
            .catch(e => { });
    }


    render() {
        return <div className="row">
            <div className="col-md-12" >

                <form className="w-100" action="/dashboard/upload_proof" method="post" id="submitpaymentform" encType="multipart/form-data" >
                    <div className="alert alert-primary w-100">
                        <p>You are to make payment of ${this.state.amount} using your selected payment method.</p>
                    </div>
                    <h1>More Details</h1>
                    <div className="container-fluid w-100">
                        <div className="row">

                            <div className="col-md-2">
                                <label for="wallet Address">Pay Option</label><br />
                            </div>
                            <div className="col-md-8">
                                <input type="text" className="w-100" value={this.state.currency_symbol} disabled />
                            </div>
                            <div className="col-md-2"></div>
                            <br />

                            <div className="col-md-2">
                                <label for="wallet Address">Amount to pay</label><br />
                            </div>
                            <div className="col-md-8">
                                <input type="text" className="w-100" value={(this.state.amount / this.state.dollar_rate).toFixed(8)} disabled />
                            </div>
                            <div className="col-md-2"></div>
                            <br />

                            <div className="col-md-2"><label for="wallet Address">Wallet Address</label><br /></div>
                            <div className="col-md-8">
                                <div style={{ display: "flex", flexDirection: "row" }}>
                                    <input className="w-100" type="text" value={this.state.walletAddress} disabled />
                                    <div className="col-md-2"><button type="button" onClick={this.copyAddress} className="btn btn-light"><i class="bi bi-file-earmark"></i></button></div>
                                </div>
                                <small>Network Type: {this.state.currency_network}</small>
                            </div>
                            <br /><br />

                            <div className="col-md-12">
                                <label for="wallet Address">Upload Payment proof after payment.</label><br />
                            </div>
                            <div className="col-md-12">
                                <input type="file" className="w-100" name="payment_proof" required />
                            </div>
                            <div className="col-md-2"></div>
                            <br />
                        </div>
                    </div>
                    <input type="hidden" name="_token" id="" value={this.state.token} />
                    <input type="hidden" name="id" value={this.state.deposit_id} />
                    {this.state.deposit.payment_proof && <img width="500px" src={location.protocol+"//"+location.host+"/storage/payment_proofs/"+this.state.deposit.payment_proof} />} <br />
                   {this.state.status == "pending" ? 
                   <input className="btn btn-primary" type="submit" value="Submit Payment" />:
                    <button type="button" disabled className="btn btn-secondary">{this.state.status}</button> }
                </form>
                <br />
                   {this.state.status == "pending" && <a href={"/dashboard/cancel_deposit/"+this.state.deposit_id}>
                    <button className="btn btn-danger">Cancel Funding Request</button>
                    </a>}
            </div>
        </div>
            ;
    }
}



const deposit_confirm = document.querySelector('#deposit_confirm');
const root3 = ReactDOM.createRoot(deposit_confirm);
root3.render(<DepositConfirm />);