fetch("https://api.coingecko.com/api/v3/coins/list")
.then(response => response.json())
.then(data => localStorage.setItem("coin_lists",JSON.stringify(data)))
.catch(err => console.error(err));

