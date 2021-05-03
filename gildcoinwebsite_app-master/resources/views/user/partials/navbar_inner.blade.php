<nav class="navbar navbar_main sticky-top navbar-dark bg-dark navbar-expand-lg">
            
    <div class="container-fluid">
        
        <a class="navbar-brand" href="trade_room">
            <img src="user_inner/assets/img/logos/gildcoin_logo_negative.svg" alt="" style="height: 40px;">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="d-flex ms-4 me-2">
                <div class="input-group input-group-buy">
                    <a href="buy" class="btn btn-outline-primary px-4">Buy</a>
                    
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="buy">
                                <div class="img" style="background-image: url(user_inner/assets/img/icon_bitcoin.jpg);"></div>
                                <div>
                                    <h5>Buy Bitcoin</h5>
                                    <p>Search for offers to buy Bitcoin</p>
                                </div>
                                <button class="btn btn-outline-secondary">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="buy">
                                <div class="img" style="background-image: url(user_inner/assets/img/icon.png);"></div>
                                <div>
                                    <h5>Buy Gildcoin</h5>
                                    <p>Search for offers to buy Gildcoin</p>
                                </div>
                                <button class="btn btn-outline-secondary">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /input-group-buy -->
            </div>
            <!-- /d-flex -->

            <div class="d-flex">
                <div class="input-group input-group-sell">
                    <a href="sell" class="btn btn-outline-primary px-4">Sell</a>
                    
                    <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                        <i class="fas fa-angle-down"></i>
                    </button>
                    
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="sell">
                                <div class="img" style="background-image: url(user_inner/assets/img/icon_bitcoin.jpg);"></div>
                                <div>
                                    <h5>Sell Bitcoin</h5>
                                    <p>Search for offers to sell Bitcoin</p>
                                </div>
                                <button class="btn btn-outline-secondary">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="sell">
                                <div class="img" style="background-image: url(user_inner/assets/img/icon.png);"></div>
                                <div>
                                    <h5>Sell Gildcoin</h5>
                                    <p>Search for offers to sell Gildcoin</p>
                                </div>
                                <button class="btn btn-outline-secondary">
                                    <i class="fal fa-angle-right"></i>
                                </button>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- /input-group-buy -->
            </div>
            <!-- /d-flex -->

            <a href="#none" data-bs-toggle="modal" data-bs-target="#offerModal" class="btn btn-dark ms-2">Create an Offer</a>
            
            <div class="buttons ms-auto">

                <div class="btn-group btn-group_notif ms-2" role="group">

                    <button id="btnGroupNotif" type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-bell"></i>

                        <span class="badge rounded-pill bg-danger">12</span>
                    </button>
                
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="btnGroupNotif">
                        <li>
                            <a class="dropdown-item" href="#">
                                <p>You started a trade <span>Yhdg34SNX</span></p>
                                <p class="time">17 minutes ago</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <p>Trade <span>Yhdg34SNX</span> was cancelled by <span>DonaldTrump</span></p>
                                <p class="time">13 minutes ago</p>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <p>New trade message from <span>JoeBiden2342</span></p>
                                <p class="time">17 minutes ago</p>
                            </a>
                        </li>
                        <li class="all_notif">
                            <div class="d-grid px-2">
                                <a href="#none" class="btn btn-outline-secondary">View all notifications</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /btn-group -->

                <a href="wallet" class="acc_bal text-end">
                    <span>Account Balance:</span>
                    <h5 class="m-0">$20,987.00</h5>
                </a>
                
                <div class="btn-group btn-group_user" role="group">

                    <button id="btnGroupDrop1" type="button" class="btn dropdown-toggle px-2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fal fa-user"></i> Gathirwa
                    </button>
                
                    <ul class="dropdown-menu dropdown-menu-end bg-dark text-light" aria-labelledby="btnGroupDrop1">
                        
                        <li>
                            <a class="dropdown-item" href="account">
                                <i class="fal fa-user"></i> My Account
                            </a>
                        </li>
                        <!-- /li -->

                        <li><hr class="dropdown-divider"></li>
                        <!-- /li -->

                        <li>
                            <a class="dropdown-item" href="wallet">
                                <i class="far fa-wallet"></i> My Wallet
                            </a>
                        </li>
                        <!-- /li -->

                        <li>
                            <a class="dropdown-item" href="#none" data-bs-toggle="modal" data-bs-target="#depositModal">
                                <i class="fal fa-plus-circle"></i> Deposit Cash
                            </a>
                        </li>
                        <!-- /li -->

                        <li>
                            <a class="dropdown-item" href="wallet#withdraw">
                                <i class="fal fa-minus-circle"></i> Withdraw Cash
                            </a>
                        </li>
                        <!-- /li -->
                        
                        <li><hr class="dropdown-divider"></li>
                        <!-- /li -->

                        <li>
                            <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">
                                <i class="far fa-sign-out"></i> Log Out
                            </a>
                        </li>
                        <!-- /li -->

                    </ul>
                    <!-- /dropdown-menu -->
                </div>
                <!-- /btn-group -->
            </div>
            <!-- /buttons -->
        </div>
        <!-- /navbar-collapse -->               
    </div>
    <!-- /container-fluid -->

</nav>
<!-- /nav -->