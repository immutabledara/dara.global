<?PHP include("chungus.php");?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="$DARA is the token of Project DARA - A token built to support decentralized storage, and immutable knowledge preservation.">
	<meta name="keywords" content="DARA, DARA Token, Project DARA, The Immutable Network, Decentralized Storage">
	<meta property="og:title" content="Unstoppable Knowledge - Forever DARA">
	<meta property="og:site_name" content="DARA Token">
	<meta property="og:url" content="https://dara.global">
	<meta property="og:description" content="$DARA is the token of Project DARA - A token built to support decentralized storage, and immutable knowledge preservation.">
	<meta property="og:type" content="website">
	<meta property="og:image" content="https://dara.global/assets/images/ogdara.png" />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Unstoppable Knowledge - Forever DARA">
	<meta name="twitter:site" content="@daratoken">
	<meta name="twitter:image" content="https://dara.global/assets/images/twitterdara.png">

	<title>Unstoppable Knowledge - Forever DARA</title>
	<link rel="shortcut icon" href="/assets/icons/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
	<link rel="manifest" href="/assets/icons/site.webmanifest">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100i,200,300,400,700,800,900">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>

<body>
	<div id="loading">
		<div id="loading-center">
			<div class='loader loader2'><div><div><div><div><div><div></div></div></div></div></div></div></div>
		</div>
	</div>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<a class="navbar-brand" href="javascript:void(0)">
							<img src="/assets/images/logo.png" class="img-fluid" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
							<i class="bi bi-three-dots-vertical"></i>
						</button>
						<div class="collapse navbar-collapse" id="navbarMenu">
							<ul class="navbar-nav mr-auto w-100 justify-content-end">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarProjects" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
									<div class="dropdown-menu" aria-labelledby="navbarProjects">
										<a class="dropdown-item" target="_blank" href="https://dara.theimmutable.net">DARA Dashboard</a>
										<a class="dropdown-item" target="_blank" href="https://chrome.google.com/webstore/detail/dara/iompmkajdofndagijpjmknmnmhkapbhj">DARA Browser Extension</a>
										<a class="dropdown-item" target="_blank" href="https://encyclopedia.dara.global">Encyclopedia DARA</a>
										<a class="dropdown-item" target="_blank" href="https://deathrow.dara.global">Wikipedia's Deathrow</a>
										<a class="dropdown-item" target="_blank" href="https://gme.dara.global">Superstonk Library (#GME)</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarLinks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Misc</a>
									<div class="dropdown-menu" aria-labelledby="navbarLinks">
										<a class="dropdown-item" target="_blank" href="/misc/1inch-howto.pdf">DARA on 1Inch Exchange</a>
										<a class="dropdown-item" target="_blank" href="https://theimmutable.medium.com/the-immutable-codex-bfb04e4e2673">The Immutable Codex</a>
										<a class="dropdown-item" target="_blank" href="https://projectdara.org">Project DARA</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarLinks" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Service Menu</a>
									<div class="dropdown-menu" aria-labelledby="navbarLinks">
										<a class="dropdown-item" target="_blank" href="https://metamask.io/download/">Download Metamask</a>
										<a class="dropdown-item" href="#" onclick="addDARAToken();return false;">Add DARA Token to Metamask</a>
										<a class="dropdown-item" href="#" onclick="addDARAwBNBLPToken();return false;">Add DARABNB LP Token to Metamask</a>
										<a class="dropdown-item" href="#" onclick="addDARABUSDLPToken();return false;">Add DARABUSD LP Token to Metamask</a>
										<a class="dropdown-item" href="#" onclick="addBSCNetwork();return false;">Add BSC Network to Metamask</a>
										</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarContacts" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contacts</a>
									<div class="dropdown-menu" aria-labelledby="navbarContacts">
										<a class="dropdown-item" target="_blank" href="mailto:info@dara.global">email</a>
										<a class="dropdown-item" target="_blank" href="https://dara.global/discord">Discord</a>
										<a class="dropdown-item" target="_blank" href="https://twitter.com/daratoken">Twitter</a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div id="home" class="dara-banner" style="overflow: hidden;">
		<div class="banner-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2 class="dara-font-white">UNSTOPPABLE KNOWLEDGE<br><b class="dara-font-green" style="font-size: 62px;">FOREVER DARA</b>
						</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center dara-mb-20">
						<img style="width:195px;" class="img-fluid" src="/assets/images/dara.png" alt="">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 text-center r9-mt-50">
						<div class="about-dara" style="background: rgb(145 255 0 / 2%)">
							<div class="banner-text text-left dara-font-white">
								<h2 class="dara-font-white dara-tw-7 dara-mb-20">Immutable projects are built with <b class="dara-font-green">$DARA</b> Token</h2><br>
								<p class="text-bigger">
									$DARA is the utility token of <a href="https://projectdara.org">Project DARA</a> - A token built to support our decentralized storage platform which is designed for safeguarding information, and immortalizing knowledge.
								</p>
								<p class="text-bigger">
									Project DARA aims to preserve all the endangered sources of knowledge, and creates simple and accessible platforms for the immutable conservation and retrieval of data.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 text-center r9-mt-50">
						<div class="dara-stats" style="background: rgb(145 255 0 / 2%)">
							<h2 class="dara-tw-8 dara-font-green">Live Market Data:</h2>
							<ul id="stats">
								<li class="border-white"><span class="days">$<?= round($price,4) ?></span>
									<p class="days_text ">Price</p>
								</li>
								<li class=" border-white"><span class="hours">$<?= number_format($marketcap); ?></span>
									<p class="hours_text">Marketcap</p>
								</li>
								<li class=" border-white"><span class="minutes">$<?= number_format($volume*7); ?></span>
									<p class="minutes_text">Volume</p>
								</li>
							</ul>
							<a href="#" onclick="addDARAToken();return false;" class="button dara-mt-20 dara-ml-10">Add $DARA to Metamask</a>
							<a href="#" onclick="buyDARA();return false;" class="button dara-mt-20 dara-ml-10">Buy $DARA</a>
							<p class="text-bigger dara-mt-20 dara-ml-10">BNB Smart Chain (BSC) Contract Address
								<a target="_blank" href="https://bscscan.com/token/0x0255af6c9f86F6B0543357baCefA262A2664f80F">0x0255af6c9f86F6B0543357baCefA262A2664f80F</a>
							</p>
						</div>
						<div class="buy-dara embed-responsive d-none" style="background: rgb(145 255 0 / 2%)">
							<h2 class="dara-tw-8 dara-font-green">Buy DARA</h2>
							<iframe id="flooz" class="embed-responsive-item"  width="400" height="730"  frameborder="0" allow="clipboard-read *; clipboard-write *; payment *;" src="https://flooz.trade/embed/trade?swapDisabled=false&swapToTokenAddress=0x0255af6c9f86F6B0543357baCefA262A2664f80F&onRampLockToken=true&swapLockToToken=true&onRampDisabled=false&onRampAsDefault=true&onRampDefaultAmount=1000&onRampTokenAddress=0x0255af6c9f86F6B0543357baCefA262A2664f80F&network=bsc&lightMode=false&primaryColor=%237ab729&roundedCorners=30&padding=20&backgroundColor=transparent&hideReferLink=true&refId=Tp519p"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-contain">
<!--
		<section id="dara-chart" class="overview-block-pb dara-chart">
			<div class="container container-rounded" style="background: rgb(145 255 0 / 2%)">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-title" style="margin-bottom: 5px;">
							<small class="dara-font-green">Price Chart</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="row align-items-center justify-content-center">
							<coingecko-coin-price-chart-widget  coin-id="immutable" currency="usd" height="300" locale="en" background-color="#191d1b"></coingecko-coin-price-chart-widget>
						</div>
					</div>
				</div>
			</div>
		</section>
-->
		<section id="dara-exchanges" class="overview-block-ptb dara-exchanges">
			<div class="container container-rounded" style="background: rgb(145 255 0 / 2%)">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-title" style="margin-bottom: 5px;">
							<small class="dara-font-green">Listings</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://pancakeswap.finance/swap?outputCurrency=0x0255af6c9f86F6B0543357baCefA262A2664f80F&inputCurrency=BNB">
										<img class="img-fluid center-block" src="/assets/images/pancake.png" alt="#">
									</a>
								</div>
							</div>
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://app.1inch.io/#/56/simple/BNB/DARA"><img class="img-fluid center-block" src="/assets/images/1inch.png" style="max-width: 300px;" alt="#"></a>
								</div>
							</div>
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://flooz.trade/trade/0x0255af6c9f86F6B0543357baCefA262A2664f80F?network=bsc"><img class="img-fluid center-block" src="/assets/images/flooz.png" alt="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section id="dara-trackers" class="overview-block-pb dara-trackers">
			<div class="container container-rounded" style="background: rgb(145 255 0 / 2%)">
				<div class="row">
					<div class="col-sm-12">
						<div class="heading-title" style="margin-bottom: 5px;">
							<small class="dara-font-green">Market Data</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="row align-items-center justify-content-center">
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://www.coingecko.com/en/coins/immutable"><img class="img-fluid center-block" src="/assets/images/coingecko.png" alt="#"></a>
								</div>
							</div>
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://coinmarketcap.com/currencies/immutable/"><img class="img-fluid center-block" src="/assets/images/coinmarketcap.png" alt="#"></a>
								</div>
							</div>
							<div class="col-lg-3 iq-r-mt-40 text-center">
								<div class="iq-small-icon">
									<a target="_blank" href="https://bscscan.com/token/0x0255af6c9f86F6B0543357baCefA262A2664f80F"><img class="img-fluid center-block" src="/assets/images/bscscan.png" alt="#"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="overview-block-pb">
			<div class="container dara-partners container-rounded" style="background: rgb(145 255 0 / 3%)">
				<div class="row r9-mt-50">
					<div class="col-sm-12">
						<div class="heading-title" style="margin-bottom: 5px;">
							<small class="iq-font-green">Partners</small>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-3 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/nkn.png" alt="icon">
							</div>
						</div>
						<div class="col-lg-3 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/vsys.png" alt="icon">
							</div>
						</div>
						<div class="col-lg-3 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/encyclosphere.png" alt="icon" style="max-height: 60px;">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="overview-block-pb">
			<div class="container dara-tech container-rounded" style="background: rgb(145 255 0 / 3%)">
				<div class="row r9-mt-50">
					<div class="col-sm-12">
						<div class="heading-title" style="margin-bottom: 5px;">
							<small class="iq-font-green">Technologies</small>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-1 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/web3.png" alt="icon">
							</div>
						</div>
						<div class="col-lg-1 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/ipfs.png" alt="icon">
							</div>
						</div>
						<div class="col-lg-1 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/bsc.png" alt="icon">
							</div>
						</div>
						<div class="col-lg-1 iq-r-mt-40 text-center">
							<div class="iq-small-icon">
								<img src="/assets/images/solidity.png" alt="icon">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="dara-quotes dara-ptb-60 light-bg">
			<div class="container">
				<div class="row ">
					<div class="col-lg-12 col-md-12 text-center">
						<h5><span style="color:#7ab729">„</span>The ideas of <span style="color:#7ab729">The Immutable</span> are certainly interesting.<span style="color:#7ab729">”</span></h5>
						<span>Sunny King, creator of Proof-of-Stake</span>
					</div>
				</div>
				<div class="row ">&nbsp;</div>
				<div class="row ">
					<div class="col-lg-12 col-md-12 text-center">
						<h5><span style="color:#7ab729">„</span>It's a good dream to have... a <span style="color:#7ab729">decentralized Medium</span> that is immutable!<span style="color:#7ab729">”</span></h5>
						<span>Zheng 'Bruce' Li, co-founder of NKN</span>
					</div>
				</div>
				<div class="row ">&nbsp;</div>
				<div class="row ">
					<div class="col-lg-12 col-md-12 text-center">
						<h5><span style="color:#7ab729">„</span>Censorship is out of control. It's time to hit the brakes and give people what they need, simple products to change their lives and preserve their thoughts.<span style="color:#7ab729">”</span></h5>
						<span>Gig, founder of The Immutable</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer id="contact" class="dara-footer">
		<div class="footer-bottom dara-ptb-20 ">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 align-self-center">
						<div class="dara-copyright dara-font-white">dara.global v1.5 ©2023<a href="https://projectdara.org/" target="_blank">Project DARA</a></div>
					</div>
					<div class="col-sm-6">
						<ul class="dara-media-blog ">
							<li><a target="_blank" href="mailto:info@dara.global"><i class="bi bi-at"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/daratoken"><i class="bi bi-twitter"></i></a></li>
							<li><a target="_blank" href="https://discord.com/invite/jhQEVWyCNN"><i class="bi bi-discord"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="back-to-top">
		<a class="top" id="top" href="#top"><i class="bi bi-arrow-bar-up" aria-hidden="true"></i> </a>
	</div>
	<canvas id="canvas1"></canvas>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="/assets/js/bubbly-bg.js"></script>
	<script src="/assets/js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js"></script>
<!--
	<script src="https://widgets.coingecko.com/coingecko-coin-price-chart-widget.js"></script>
-->
</body>
</html>
