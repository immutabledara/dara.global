function buyDARA() {
	$('.dara-stats').addClass("d-none").hide();
	$('.buy-dara').removeClass("d-none").show();
}
async function addDARAToken(){
	try {
		const addDARAToken = await ethereum.request({
			method: 'wallet_watchAsset',
			params: {
				type: 'ERC20',
				options: {
					address: '0x0255af6c9f86F6B0543357baCefA262A2664f80F',
					symbol: 'DARA',
					decimals: 18,
					image: 'https://dara.global/assets/images/daratoken.png',
				},
			},
		});
		if (addDARAToken) {
			console.log('Added DARA Token');
		}
	} catch (error) {
		console.log(error);
	}
}

async function addDARAwBNBLPToken(){
	try {
		const addDARAwBNBLPToken = await ethereum.request({
			method: 'wallet_watchAsset',
			params: {
				type: 'ERC20',
				options: {
					address: '0xb506424ea3ac7a907f8411a842b8a895d739df0f',
					symbol: 'DARA-wBNB',
					decimals: 18,
					image: 'https://dara.global/assets/images/daratoken.png',
				},
			},
		});
		if (addDARAwBNBLPToken) {
			console.log('Added DARA-wBNB LP');
		}
	} catch (error) {
		console.log(error);
	}
}
async function addDARABUSDLPToken(){
	try {
		const addDARABUSDLPToken = await ethereum.request({
			method: 'wallet_watchAsset',
			params: {
				type: 'ERC20',
				options: {
					address: '0x18d3da2f42489de147d7937c6d7e07c2ffbc3026',
					symbol: 'DARA-BUSD',
					decimals: 18,
					image: 'https://dara.global/assets/images/daratoken.png',
				},
			},
		});
		if (addDARABUSDLPToken) {
			console.log('Added DARA-BUSD LP');
		}
	} catch (error) {
		console.log(error);
	}
}

async function addBSCNetwork() {
	try {
		const addBSCNetwork = await ethereum.request({
		method: 'wallet_addEthereumChain',
		params: [{
			chainId: '0x38',
			chainName: 'BNB Smart Chain Mainnet',
			nativeCurrency: {
				name: 'BNB',
				symbol: 'BNB',
				decimals: 18,
			},
			rpcUrls: ['https://bsc-dataseed1.binance.org'],
			blockExplorerUrls: ['https://bscscan.com'],
			}
		]});
		if (addBSCNetwork) {
			console.log('Done!');
		}
	}catch (error) {
		console.log(error);
	}
}


$(document).ready(function() {
	/* Spinning Loader */
	jQuery("#load").fadeOut();
	jQuery("#loading").delay(0).fadeOut("slow");

	/* Back to Top */
	$('#back-to-top').fadeOut();
	$(window).on("scroll", function() {
		if ($(this).scrollTop() > 250) {
			$('#back-to-top').fadeIn(1400);
		} else {
			$('#back-to-top').fadeOut(400);
		}
	});
	$('#top').on('click', function() {
		$('top').tooltip('hide');
		$('body,html').animate({ scrollTop: 0 }, 150);
		return false;
	});

	/* Sticky Header */
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > 20) {
			$('header').addClass('menu-sticky');
		} else {
			$('header').removeClass('menu-sticky');
		}
	});
});
