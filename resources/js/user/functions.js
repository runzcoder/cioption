window.getRate = async (coin, ngnrate=0) => {
    if(coin.toUpperCase() == "NGN" || coin.toUpperCase() == "NAIRA")
    {
        return ngnrate;
    }
    return fetch(`https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=${coin}&order=market_cap_desc&per_page=100&page=1&sparkline=false`)
    .then(res => res.json())
    .then(data => data[0].current_price)
    .catch(e => {return 0})
}