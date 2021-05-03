@extends('user/layouts/layout_outer')

@section('title', 'About')

@section('navbar-bg', 'bg-light')

@section('logo')

	@include('user/partials/logo')

@endsection

@section('content')

	<div id="carouselAbout" class="carousel carousel-fade carousel-light bg-dark slide" data-bs-ride="carousel">

        <ol class="carousel-indicators">
            <li data-bs-target="#carouselAbout" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselAbout" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselAbout" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselAbout" data-bs-slide-to="3"></li>
        </ol>
        
            <div class="carousel-inner">

                <div class="carousel-item active" style="background-image: url(user_outer/assets/img/carousels/a_01.jpg);">

                    <div class="max-width">

                        <div class="carousel-caption d-md-block">
                            <h2>Barter Trade</h2>
                            <p>In the ancient days, we used commodities such as cows and chickens to execute a trade. <br />This is called Barter Trade.</p>
                        </div>

                    </div>
                    <!-- /max-width -->

                </div>
                <!-- /carousel-item -->

                <div class="carousel-item" style="background-image: url(user_outer/assets/img/carousels/a_02.jpg);">

                    <div class="max-width">

                        <div class="carousel-caption d-md-block">
                            <h2>Money-Paper &amp; Coins</h2>
                            <p>However, after the modernization of society, the need to track value across larger regions increased. <br />This gave rise to need for the creation of money-paper and coins.</p>
                        </div>

                    </div>
                    <!-- /max-width -->

                </div>
                <!-- /carousel-item -->

                <div class="carousel-item" style="background-image: url(user_outer/assets/img/carousels/a_03.jpg);">

                    <div class="max-width">

                        <div class="carousel-caption d-md-block">
                            <h2>Credit &amp; Debit Cards</h2>
                            <p>Decades later, credit and debit cards were introduced to substitute notes and coins. <br />This was the start of electronic payments.</p>
                        </div>

                    </div>
                    <!-- /max-width -->

                </div>
                <!-- /carousel-item -->

                <div class="carousel-item" style="background-image: url(user_outer/assets/img/carousels/a_04.jpg);">

                    <div class="max-width">

                        <div class="carousel-caption d-md-block">
                            <h2>Cryptocurrencies</h2>
                            <p>As the internet slowly became popularized and widely accessible, the foundation of cryptocurrencies was announced. Rapid globalization in the past 10 years has pushed popularity and growth of cryptocurrecies continues to steadily rise.</p>
                        </div>

                    </div>
                    <!-- /max-width -->

                </div>
                <!-- /carousel-item -->


                

            </div>
            <!-- /carousel-inner -->

        

    </div>
    <!-- /carouselAbout -->

    <div class="container-fluid container-fluid-body">

        <header class="row my-5">
            
            <div class="col">
                
                <h4 class="text-center">A cryptocurrency is a digital or virtual currency that is secured by cryptography which makes it nearly impossible to counterfeit or double-spend. Many cryptocurrencies are decentralized networks based on blockchain technology—a distributed ledger enforced by a disparate network of computers.</h4>

                <p class="text-center mt-5">A cryptocurrency/virtual currency is a digital asset designed to work as a medium of exchange.</p>

            </div>

        </header>


        <div class="row my-5">
            <div class="col">
                <h1 class="text-center">Facts about Gildcoin</h1>
            </div>
        </div>
        

        <div class="d-flex d-flex-facts align-items-start">
            
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                
                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                    General Information
                </a>

                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-blockchain" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Blockchain Technology
                </a>
                
                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    Trading Gildcoin
                </a>
                
                <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                    Safety &amp; Transparency
                </a>
                
                <a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                    Reliability &amp; Simplicity
                </a>

            </div>
            <!-- /nav -->

            <div class="tab-content" id="v-pills-tabContent">
                
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <p class="lead"><strong>Gildcoin is simply, cryptocurrency powered by a technology called blockchain.</strong></p>

                    <p>Gildcoin is an internet based medium of exchange that is created and held electronically. It uses cryptographic functions to conduct financial transactions. No one controls it since Gildcoin leverage blockchain technology to gain decentralization, transparency and immutability.</p>

                    <p>The most important feature of Gildcoin is that it is not controlled by any central authority hence it is not tied to any government and not subject to any regulation.</p>
                    
                </div>
                <!-- /tab-pane -->

                <div class="tab-pane fade" id="v-pills-blockchain" role="tabpanel" aria-labelledby="v-pills-blockchain-tab">
                    
                    <p>Gildcoin uses block chain technology to record and store data. It uses complex mathematical problems and code to be the self-operation system that it is. This results in ease of use and immense flexibility;</p>

                    <p>This is because the GILDCOIN system can automatically control and track each unit of a cryptocurrency and with this, users can transfer their digital money securely, without compromising on transparency and speed.</p>

                    <p>When joining GildCoin, clients become some portion of a worldwide system of Gildcoin excavators, who can pick among various approaches to utilize their Gildcoins. You can trade the coin and advantage from its worth. You will likewise have the option to make installments and move cash to and from any part of the world.</p>

                </div>
                <!-- /tab-pane -->

                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    
                    <p>You can join the cryptocurrency ecosystem and by trading; or through the buying and selling of Gildcoin.</p>
                    
                    <p>Traders use technical analysis just like in stock securities, to evaluate the price of Gildcoin and inform the making of investment decisions.</p>

                    <p>Technical analysis is not difficult as it all boils down to an analysis of supply and demand in the market to determine where the price trend is headed. Simple!</p>

                    <p>Technical traders use the price history of Gildcoin and the price patterns that form, as a basis for making trading decision and analysis.</p>

                    <p>This technique uses the price chart of an asset as a key determinant in forecasting where the price will go next. By making the right predictions, traders get 100% of their total investments. Many of our traders have been able to make an income of $ 100 to $ 200 daily!</p>

                    <p>In addition to this, you can work as a partner and earn up to $ 30 daily by just referrals, no initial capital required.</p>

                    <p>Ultimately, what Gildcoin offers you, is a way to generate income at your freedom and at the convenience of your phone whether at home, in school, with friends or at work.</p>

                    <p><strong>YOU CAN EARN ANYWHERE, AT ANY TIME.</strong></p>
                </div>
                <!-- /tab-pane -->
                
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    
                    <p>GildCoin makes digital currency straightforward!</p>

                    <p>With GildCoin, digital currency becomes a part of our everyday budgetary culture and a part of our regular daily life.</p>

                    <p>It also enables businesses to accomplish more and perform better in the 21st Century as popularity of and demand for online currencies rises.</p>

                    <p>We are transparent and carry out our dealings with integrity, which has been the firm foundation behind the inception of Gildcoin.</p>
                </div>
                <!-- /tab-pane -->
                
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                    <p>At GildCoin, we are more than capable, prepared and experienced to do more than any other individual to fulfill the requirements of our customers.</p>

                    <p>Gildcoin is right at the cutting edge of the future of finance; everyone is able to be a part of the online currencies trading stage.</p>

                    <p>Practically anyone can turn into a trader with our almost effortless system.</p>
                </div>
                <!-- /tab-pane -->
            
            </div>
            <!-- /tab-content -->
        </div>
        <!-- /align-items-start -->
        



    </div>
    <!-- /container-fluid -->

    <div class="container-fluid container-fluid-other max-width">

        <div class="row pt-5">
            <div class="col">
                <h1 class="text-center">Other Cryptocurrencies</h1>
            </div>
        </div>


        <div id="carouselOthers" class="carousel carousel-dark slide" data-bs-ride="carousel">
            
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselOthers" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselOthers" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselOthers" data-bs-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    
                    <div class="row text-center py-5">
            
                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/gildcoin_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Gildcoin</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/bitcoin_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Bitcoin</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/ethereum_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Ethereum</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/bitcoin_cash_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Bitcoin Cash</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /carousel-item -->

                <div class="carousel-item">
                    
                    <div class="row text-center py-5">
            
                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/ripple_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Ripple</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/stellar_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Stellar</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/litecoin_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Litecoin</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/neo_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">NEO</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <!-- /carousel-item -->

                <div class="carousel-item">
                    
                    <div class="row text-center py-5">
            
                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/tron_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">TRON</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/omise_go_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">OmiseGo</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/cardano_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Cardano</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->

                        <div class="col-6 col-md-3">
                            
                            <div class="card pt-3 mb-2">
                                <div class="img" style="background-image: url(user_outer/assets/img/crypto_logos/cosmos_logo.svg);"></div>
                                <div class="card-body">
                                    <h5 class="card-title mb-0 text-primary">Cosmos</h5>
                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <!-- /carousel-item -->

            </div>
            <!-- /carousel-inner -->
            
        </div>
        <!-- /carouselOthers -->
        
    </div>
    <!-- /container-fluid -->

    <div class="strip strip_crypto py-5" style="background-color: rgba(0,0,0, 0.1);">
        
        <div class="max-width container-fluid">
            
            <div id="carouselCrypto" class="carousel slide" data-bs-ride="carousel">

                <div class="row">

                    <div class="col-md-3">
                        
                        <h4 class="mb-5">What you <br />
                        should know <br />
                        about <br />
                        cryptocurrencies</h4>

                        <div class="carousel-controls">
                            <a class="carousel-control-prev" href="#carouselCrypto" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>

                            <a class="carousel-control-next" href="#carouselCrypto" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                        <!-- /carousel-controls -->

                    </div>
                    <!-- /col -->

                    <div class="col-md-9">
                        
                        <div class="carousel-inner">
                    
                            <div class="carousel-item active">
                                
                                <div class="row">
                                    
                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">
                                                    <img src="user_outer/assets/img/portraits/Bill.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Bill Gates</h5>
                                                    <p class="text-muted">Co-founder of Microsoft, American business magnate</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">Bitcoin is better than currency in that you don’t have to be physically in the same place and, of course, for large transactions, currency can get pretty inconvenient.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">
                                                    <img src="user_outer/assets/img/portraits/Mike.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Mike Novogratz</h5>
                                                    <p class="text-muted">Former hedge fund manager at Fortress Investment Group and a Goldman Sachs partner</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">Ten percent of my net worth is in this space. It’s the best investment of my life.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                </div>
                                <!-- /row -->

                            </div>
                            <!-- /carousel-item -->

                            <div class="carousel-item">
                                
                                <div class="row">
                                    
                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">

                                                    <img src="user_outer/assets/img/portraits/Richard.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Richard Branson</h5>
                                                    <p class="text-muted">English business magnate, investor and philanthropist</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">Well, I think [Bitcoin] is working. People have made fortunes off Bitcoin, some have lost money. It is volatile, but people make money off of volatility too.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">
                                                    <img src="user_outer/assets/img/portraits/Peter.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Peter Thiel</h5>
                                                    <p class="text-muted">Co-Founder of Paypal.</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">I do think Bitcoin is the first [encrypted money] that has the potential to change the world.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                </div>
                                <!-- /row -->

                            </div>
                            <!-- /carousel-item -->

                            <div class="carousel-item">
                                
                                <div class="row">
                                    
                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">
                                                    <img src="user_outer/assets/img/portraits/Jeremy.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Jeremy Liew</h5>
                                                    <p class="text-muted">Venture capitalist, the first investor of Snapchat.</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">Bitcoin is already simple to buy and hold, and as the asset continues to mature, we’ll continue to see an increase in the development and deployment of surrounding products.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                    <div class="col-6 col-md-6">
                                        
                                        <div class="card">
                                            
                                            <div class="row row_person mt-3 mb-2 px-3">
                                                <div class="col-3">
                                                    <img src="user_outer/assets/img/portraits/Peter.png" class="card-img-top" alt="">
                                                </div>
                                                <!-- /col -->
                                                <div class="col-9">
                                                    <h5 class="text-primary mb-0">Chamath Palihapitiya</h5>
                                                    <p class="text-muted">Venture capitalist, one of the original investors in Facebook.</p>
                                                </div>
                                                <!-- /col -->
                                            </div>
                                            <!-- /row -->
                                            
                                            <div class="card-body pt-0">
                                                
                                                <p class="card-text">Reiterating my belief about BTC. It’s the ultimate insurance policy against autocracy, currency curbs and other forms of value destruction.</p>
                                                
                                            </div>
                                            <!-- /card-body -->
                                        </div>
                                        <!-- /card -->

                                    </div>
                                    <!-- /col -->

                                </div>
                                <!-- /row -->

                            </div>
                            <!-- /carousel-item -->

                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselCrypto" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselCrypto" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselCrypto" data-bs-slide-to="2"></li>
                            </ol>

                        </div>
                        <!-- /carousel-inner -->

                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
                
            </div>
            <!-- /carouselCrypto -->
        </div>
        <!-- /container-fluid -->
    </div>
    <!-- /strip -->

    <div class="container-fluid">
        
        <div class="row mt-5 mb-3">
            
            <div class="col">
                
                <h1 class="text-center">What our clients say</h1>
                <p class="text-center">Trusted by investors around the world.</p>

            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

        <div class="row mb-5">

            <div class="col-6 col-md-3">
                
                <div class="card mb-2">
                                            
                    <h3 class="px-3 mt-3 text-primary"><i class="fas fa-quote-left"></i></h3>
                    
                    <div class="card-body pt-0">
                        
                        <p class="card-text text-muted">One of my favorite crypto sites. The platform is just an easy and affordable way to dive into investment.</p>
                        <p class="mb-0">- John Voot</p>
                        
                    </div>
                    <!-- /card-body -->
                </div>
                <!-- /card -->

            </div>
            <!-- /col -->
            <div class="col-6 col-md-3">
                
                <div class="card mb-2">
                                            
                    <h3 class="px-3 mt-3 text-primary"><i class="fas fa-quote-left"></i></h3>
                    
                    <div class="card-body pt-0">
                        
                        <p class="card-text text-muted">Contacting support was simple and easy. I was surprised by how quick the response was.</p>
                        <p class="mb-0">- Abraham Barr</p>
                        
                    </div>
                    <!-- /card-body -->
                </div>
                <!-- /card -->

            </div>
            <!-- /col -->
            <div class="col-6 col-md-3">
                
                <div class="card mb-2">
                                            
                    <h3 class="px-3 mt-3 text-primary"><i class="fas fa-quote-left"></i></h3>
                    
                    <div class="card-body pt-0">
                        
                        <p class="card-text text-muted">Easy to use, keeps me updated with the market charts every time. I need it to generate more income.</p>
                        <p class="mb-0">- Lhyne  Ahmed</p>
                        
                    </div>
                    <!-- /card-body -->
                </div>
                <!-- /card -->

            </div>
            <!-- /col -->
            <div class="col-6 col-md-3">
                
                <div class="card mb-2">
                                            
                    <h3 class="px-3 mt-3 text-primary"><i class="fas fa-quote-left"></i></h3>
                    
                    <div class="card-body pt-0">
                        
                        <p class="card-text text-muted">This is a great platform for trading. I really like it because its user interface is very simple and user friendly.</p>
                        <p class="mb-0">- Bre Thomas</p>
                        
                    </div>
                    <!-- /card-body -->
                </div>
                <!-- /card -->

            </div>
            <!-- /col -->
            
        </div>
        <!-- /row -->
    </div>
    <!-- /container-fluid -->

@endsection