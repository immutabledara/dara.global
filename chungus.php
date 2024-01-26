<?PHP
#
# Market Info API used by index.php
#
##

$pancake_api = "https://api.pancakeswap.info/api/v2/tokens/0x0255af6c9f86f6b0543357bacefa262a2664f80f";
$coingecko_api = "https://api.coingecko.com/api/v3/coins/immutable?localization=false&community_data=false&developer_data=false&sparkline=false";
$cmc_api = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?id=11340";

coingecko();

function pancake(){
# Do NOT Use.. Missing Volume info
global $pancake_api, $price, $marketcap, $volume;
	$apiURL = curl_init();
	curl_setopt($apiURL, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($apiURL, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($apiURL, CURLOPT_URL, $pancake_api);
	$apiResult = curl_exec($apiURL);
	curl_close($apiURL);
	$resultjson = json_decode($apiResult);
	$price = $resultjson->data->price;
	$marketcap = ($price * 42000000);
}

function coingecko(){
global $coingecko_api, $price, $marketcap, $volume;
	$apiURL = curl_init();
	curl_setopt($apiURL, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($apiURL, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($apiURL, CURLOPT_URL, $coingecko_api);
	$apiResult = curl_exec($apiURL);
	curl_close($apiURL);
	$resultjson = json_decode($apiResult);
	$price = $resultjson->market_data->current_price->usd;
	$volume = $resultjson->market_data->total_volume->usd;
	$marketcap = ($price * 42000000);
}
?>
