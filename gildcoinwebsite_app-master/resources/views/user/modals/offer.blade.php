<div class="modal modal_offer fade" id="offerModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="offerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            
            <div class="modal-header">
                
                <h5 class="modal-title" id="offerModalLabel">
                    <i class="fal fa-plus"></i> Create Offer
                </h5>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- /modal-header -->
            
            <div class="modal-body">
                <div class="container-fluid container-fluid-buy">

                    <header class="row g-0 header_steps py-4 mb-4">
            
                        <div class="col text-center active">
                            <span class="h6">Payment Method</span>
                        </div>

                        <div class="col text-center">
                            <span class="h6">Trade Pricing</span>
                        </div>

                        <div class="col text-center">
                            <span class="h6">Trade Instructions</span>
                        </div>

                    </header>
                    
                    <div class="tab-content tab-content-steps">
        
                        <div class="tab-pane fade show active" id="step_0" role="tabpanel">
                            
                            <h3 class="text-center mb-5">What would you like to do?</h3>

                            <div class="row">
                                <div class="col-3">
                                    <h1 class="text-end text-muted">
                                        <i class="far fa-inbox-out"></i>
                                    </h1>
                                </div>
                                <div class="col-9">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="doThis[]" value="sell" id="radioSell">
                                        
                                        <label class="form-check-label h5 mb-0" for="radioSell">
                                            Sell Gildcoin
                                        </label>

                                        <p>Once created, you offer will be available on the Buy Gildcoin page for potential buyers to see.</p>
                                    </div>
                                    <!-- /form-check -->
                                    
                                </div>
                            </div>
                            <!-- /row -->

                            <div class="row mb-5">
                                <div class="col-3">
                                    <h1 class="text-end text-muted">
                                        <i class="far fa-inbox-in"></i>
                                    </h1>
                                </div>
                                <div class="col-9">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="doThis[]" value="buy" id="radioBuy">
                                        
                                        <label class="form-check-label h5 mb-0" for="radioBuy">
                                            Buy Gildcoin
                                        </label>

                                        <p>Once created, you offer will be available on the Sell Gildcoin page for potential sellers to see.</p>
                                    </div>
                                    <!-- /form-check -->
                                    
                                </div>
                            </div>
                            <!-- /row -->

                        </div>
                        <!-- /#step_0 -->
                        
                        <div class="tab-pane fade" id="step_1" role="tabpanel">
                            
                            <div class="row row_step">
                        
                                <div class="col-md-8">
                                    <h4 class="mb-5">
                                        <span class="text-muted">Step 1:</span> <span class="text-primary">Select a payment method</span>
                                    </h4>

                                    <h6>Search all payment methods</h6>

                                    <div class="input-group mb-4">
                                        <div class="input-group-text bg-white">
                                            <i class="fal fa-search"></i>
                                        </div>
                                        <input type="text" name="search_payment_menthods" class="form-control">
                                    </div>

                                    <div class="row mb-4">
                                        
                                        <div class="col-4">
                                            
                                            <h6>Choose Category</h6>
                                            
                                            <div class="list-group list-group-payment-method-categories list-group-flush" id="categoriesList" role="tablist">
                                                
                                                <a href="#tab_1" class="list-group-item list-group-item-action active" role="tab" data-bs-toggle="list">Bank Transfers</a>    
                                                
                                                <a href="#tab_2" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Online Wallets</a>    
                                                
                                                <a href="#tab_3" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Gift Cards</a>    
                                                
                                                <a href="#tab_4" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Cash Payments</a>    
                                                
                                                <a href="#tab_5" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Debit/Credit Cards</a>    
                                                
                                                <a href="#tab_6" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Digital Currencies</a>    
                                                
                                                <a href="#tab_7" class="list-group-item list-group-item-action" role="tab" data-bs-toggle="list">Goods &amp; Services</a>

                                            </div>
                                            <!-- /list-group -->
                                        </div>
                                        <!-- /col -->
                                        
                                        <div class="col-8">
                                            <h6>Select payment method below</h6>

                                            <div class="tab-content">
                                                
                                                <div id="tab_1" class="tab-pane fade show active" role="tabpanel">
                                                    
                                                    <div class="list-group list-group-flush">
                                                        
                                                        <label class="list-group-item list-group-item-action">
                                                            <input class="form-check-input me-1" type="radio" name="payment_method[]" value="">
                                                            Standard Chartered Bank
                                                        </label>

                                                        <label class="list-group-item list-group-item-action">
                                                            <input class="form-check-input me-1" type="radio" name="payment_method[]"value="">
                                                            Barclays Bank
                                                        </label>

                                                        <label class="list-group-item list-group-item-action">
                                                            <input class="form-check-input me-1" type="radio" name="payment_method[]"value="">
                                                            Citi Bank
                                                        </label>

                                                    </div>
                                                    <!-- /list-group -->

                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_2" class="tab-pane fade" role="tabpanel">
                                                    222
                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_3" class="tab-pane fade" role="tabpanel">
                                                    333
                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_4" class="tab-pane fade" role="tabpanel">
                                                    444
                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_5" class="tab-pane fade" role="tabpanel">
                                                    555
                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_6" class="tab-pane fade" role="tabpanel">
                                                    666
                                                </div>
                                                <!-- /tab-pane -->

                                                <div id="tab_7" class="tab-pane fade" role="tabpanel">
                                                    777
                                                </div>
                                                <!-- /tab-pane -->

                                            </div>
                                            <!-- /tab-content -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <h6>Preferred currency</h6>
                                    

                                    <select class="form-select mb-2">
                                        <option value="1">US Dollar (USD)</option>
                                        <option value="2">Kenyan Shilling (KES)</option>
                                    </select>

                                    <p>Your offer will be posted and completed in this currency. For example, if you select USD, your offer will be visible for everybody looking to sell Gildcoin using USD.</p>
                                </div>
                                <!-- /left -->

                                <div class="col-md-4">
                                    <h5 class="text-muted">About This Step</h5>
                                    <p class="text-muted">We give you the option to accept different payment methods when making a transaction. Please make your selection on payment method and move onto the next step.</p>

                                    <ul class="text-muted">
                                        <li>Customers will sell Gildcoin for <strong>Kenya Shillings (KES)</strong></li>
                                        <li>You accept trades between <strong>2,500 KES</strong> and <strong>5,000 KES</strong></li>
                                        <li>Only users that meet your required minimum number of trades can begin a trade with you</li>
                                    </ul>
                                </div>
                                <!-- /right -->

                            </div>
                            <!-- /row_step -->

                        </div>
                        <!-- /#step_1 -->
                        
                        <div class="tab-pane fade" id="step_2" role="tabpanel">
                            
                            <div class="row row_step">
                        
                                <div class="col-md-8">
                                    <h4 class="mb-5">
                                        <span class="text-muted">Step 2:</span> <span class="text-primary">Trade pricing</span>
                                    </h4>

                                    <h6 class="mb-3">Choose Gildcoin rate you want to use</h6>

                                    <div class="row mb-3">
                                        
                                        <div class="col">
                                            <div class="pane">
                                                
                                                <div class="form-check mb-2">
                                                    <input name="priceType[]" value="market_price" class="form-check-input" type="radio" value="" id="marketPrice">
                                                    <label class="form-check-label h6" for="marketPrice">Market price</label>
                                                </div>

                                                <p>Your offer's selling price will change according to the market price of Gildcoin.</p>
                                            </div>
                                            <!-- /pane -->
                                        </div>
                                        <!-- /col -->

                                        <div class="col">
                                            <div class="pane">
                                                
                                                <div class="form-check mb-2">
                                                    <input name="priceType[]" value="fixed_price" class="form-check-input" type="radio" value="" id="fixedPrice">
                                                    <label class="form-check-label h6" for="fixedPrice">Fixed price</label>
                                                </div>

                                                <p>Your offer's selling price is locked when the offer is created, and won't change with the market price of Gildcoin.</p>
                                            </div>
                                            <!-- /pane -->
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                    <div class="contain">  

                                        <div class="row row_step_child">

                                            <div class="col-4">
                                                <h6>Percentage above market rate that your offer will list at <a href="#none" class="link-secondary"><i class="fal fa-question-circle"></i></a></h6>
                                            </div>
                                            <!-- /left -->

                                            <div class="col-8">

                                                <div class="d-flex mb-3 align-items-center">
                                                    
                                                    <div class="input-group input-group-percentage me-3">
                                                    
                                                        <a href="#none" class="btn btn-outline-secondary">
                                                            <i class="fal fa-minus"></i>
                                                        </a>
                                                        
                                                        <input name="percentage" type="number" class="form-control text-center">
                                                        
                                                        <a href="#none" class="btn btn-outline-secondary">
                                                            <i class="fal fa-plus"></i>
                                                        </a>
                                                        
                                                        <span class="input-group-text bg-white">%</span>
                                                    </div>
                                                    <!-- /input-group -->

                                                    <p class="m-0">on each sale</p>

                                                </div>
                                                <!-- /d-flex -->

                                                <p class="m-0">Current Gilcoin market price: <strong>100.00 KES</strong></p>
                                                
                                                <p class="m-0">Chosen payment method: <strong>Mpesa</strong></p>
                                                
                                                <p class="m-0">Offer Price: <strong>120.00 KES</strong> per Gildcoin (<strong>120%</strong> of the market price)</p>
                                                
                                                <p class="m-0">I will <strong>get 20.00 KES above</strong> the market price for every Gildcoin I sell</p>

                                            </div>
                                            <!-- /left -->
                                        </div>
                                        <!-- /row -->

                                        <div class="row row_step_child">

                                            <div class="col-4">
                                                <h6>Offer trade limits <a href="#none" class="link-secondary"><i class="fal fa-question-circle"></i></a></h6>

                                                <div class="btn-group">
                                                    
                                                    <a href="#none" class="btn btn-sm btn-outline-secondary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Min/max range</a>
                                                    
                                                    <a href="#none" class="btn btn-sm btn-outline-secondary" data-bs-toggle="button" autocomplete="off">Exact Amount</a>
                                                </div>
                                            </div>
                                            <!-- /left -->

                                            <div class="col-8">

                                                <div class="row">
                                                    
                                                    <div class="col">
                                                        <p class="mb-2 fw-bold">Minimum trade amount</p>
                                                        
                                                        <div class="input-group mb-3">
                                                            <input type="number" name="minimum_trade" class="form-control">
                                                            <span class="input-group-text bg-white">KES</span>
                                                        </div>
                                                    </div>
                                                    <!-- /col -->

                                                    <div class="col">
                                                        <p class="mb-2 fw-bold">Maximum trade amount</p>
                                                        
                                                        <div class="input-group mb-3">
                                                            <input type="number" name="maximum_trade" class="form-control">
                                                            <span class="input-group-text bg-white">KES</span>
                                                        </div>
                                                    </div>
                                                    <!-- /col -->    
                                                </div>
                                                <!-- /row -->

                                                <p class="m-0">Setting these limits will only allow people to start trades with you between your <strong>minimum</strong> and <strong>maximum</strong> trade amounts.</p>
                                                <p class="m-0">Once a transaction is initiated, the exact trade equivalent in Gildcoin will be moved into escrow.</p>
                                            </div>
                                            <!-- /left -->
                                        </div>
                                        <!-- /row -->

                                        <div class="row row_step_child">
                                            
                                            <div class="col-4">
                                                <h6>Offer time limit</h6>
                                            </div>
                                            <!-- /col -->
                                            
                                            <div class="col-8">

                                                <div class="input-group input-group-time mb-3">
                                                    <a href="#none" class="btn btn-outline-secondary">
                                                        <i class="fal fa-minus"></i>
                                                    </a>
                                                    <input type="number" name="offer_time_limit" class="form-control text-center">
                                                    <a href="#none" class="btn btn-outline-secondary">
                                                        <i class="fal fa-plus"></i>
                                                    </a>
                                                    <div class="input-group-text bg-white">Minutes</div>
                                                </div>

                                                <p>This indicates the amount of time your trade partner has to make their payment. The trade will <strong>automatically be canceled if the buyer has not clicked "Paid" before the payment window has expired.</strong></p>    
                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->

                                    </div>
                                    <!-- /contain -->

                                </div>
                                <!-- /left -->

                                <div class="col-md-4">
                                    <h5 class="text-muted">About This Step</h5>
                                    <p class="text-muted">Buyers often look for the best value and great vendor ratings. Choose a profit percentage that you think your target buyers will find attractive. Here, you can set your exact offer terms &amp; detailed instructions. Once you've made your selections you can move to the final step.</p>

                                    <p class="text-muted">If necessary you can configure your trade to automatically cancel if the buyer has not made payment by adjusting the auto-cancel time.</p>

                                    <ul class="text-muted">
                                        <li>Customers will pay you using <strong>Mpesa</strong> with <strong>Kenya Shillings (KES)</strong></li>
                                        <li>The escrow fee for your selected payment method is <strong>3%</strong></li>
                                        <li>You will earn <strong>20%</strong> for every sale</li>
                                        <li>You accept trades between <strong>2,500 KES</strong> and <strong>5,000 KES</strong></li>
                                        <li>Only users that meet your required minimum number of trades can begin to trade with you</li>
                                    </ul>
                                </div>
                                <!-- /right -->

                            </div>
                            <!-- /row -->

                        </div>
                        <!-- /#step_2 -->

                        <div class="tab-pane fade" id="step_3" role="tabpanel">
                            
                            <div class="row row_step">
                        
                                <div class="col-md-8">
                                    <h4 class="mb-5">
                                        <span class="text-muted">Step 3:</span> <span class="text-primary">Trade instructions</span>
                                    </h4>

                                    <h5>Offer tags</h5>

                                    <input name="offer_tags" class="form-control mb-2" type="text">
                                    
                                    <p class="text-muted mb-4">Select a maximum of 3 tags seperated by a comma, that best describe your offer terms.</p>

                                    <h5>Offer label</h5>

                                    <input name="offer_label" class="form-control mb-2" type="text">
                                    
                                    <p class="text-muted mb-4">Make your offer stand out to other users with a catchy label. Your offer label can be upto 25 characters long and can contain letters, numbers, the apostrophe and the hyphen.</p>

                                    <h5>Offer terms for the buyer</h5>

                                    <textarea name="offer_terms" class="form-control mb-2" rows="4" placeholder="Write your terms here"></textarea>

                                    <p class="text-muted mb-4">The offer terms should very clearly outline what the trade partner can expect, whether it's a cash receipt or if they are required to visit an external site. Shown publicly on your offer listing, this portion is purely informational and should not have details on how to complete a trade.</p>

                                    <h5>Trade instructions</h5>

                                    <textarea name="trade_instructions" class="form-control mb-2" rows="4" placeholder="List out your instructions for your trade partner here"></textarea>

                                    <p class="text-muted mb-4">These instructions are shown to your trade partner once the trade begins. Make them as clear and concise as possible, preferably as a bulleted list and include very clear action items to avoid confusion.</p>

                                    <h5>Verification</h5>

                                    <div class="form-check mb-5">
                                        <input class="form-check-input" type="checkbox" name="verified_id" value="" id="verifiedID">
                                        <label class="form-check-label" for="verifiedID">Require your trade partner to have verified their ID</label>
                                    </div>

                                    <h5 class="bg-light p-2 mb-3"><i class="far fa-sliders-h"></i> Advanced Options</h5>

                                    <h6>Minimum trades required</h6>

                                    <p class="mb-2">Only users that meet your required minimum number of trades can begin a trade with you</p>

                                    <div class="min_trades d-flex align-items-center">
                                        <input name="minimum_trades" class="form-control me-3 text-center" type="number">
                                        <p class="mb-0">past trades</p>
                                    </div>
                                    

                                </div>
                                <!-- /left -->

                                <div class="col-md-4">
                                    <h5 class="text-muted">About This Step</h5>
                                    <p class="text-muted">When a customer clicks into your offer, your terms and instructions will tell them what to provide during the trade.</p>

                                    <p class="text-muted">Keep in mind that you should describe your terms as precisely and in as few words as possible.</p>

                                    <p class="text-muted">You also have the option of moderating who is able to select your offers. Filters such as verification requirements, trusted accounts and minimum trade volumes can be modified under the advanced options section.</p>

                                    <ul class="text-muted">
                                        <li>Customer will pay you using <strong>Mpesa</strong> with <strong>Kenya Shillings (KES)</strong></li>
                                        <li>The escrow fee for your selected payment method is 3%</li>
                                        <li>You accept trades between <strong>2,500 KES</strong> and <strong>5,000 KES</strong></li>
                                        <li>Only users that meet your required minimum number of trades can begin a trade with you</li>
                                    </ul>
                                    
                                </div>
                                <!-- /right -->

                            </div>
                            <!-- /row -->

                        </div>
                        <!-- /#step_3 -->

                    </div>
                    <!-- /tab-content-steps -->

                </div>
                <!-- /container-fluid -->
            </div>
            <!-- /modal-body -->

            <div class="modal-footer">

                <!-- delete these tabs later -->
                <ul class="nav nav-tabs" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#step_0" type="button" role="tab" aria-selected="true">Step 0: Buy / Sell</button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#step_1" type="button" role="tab" aria-selected="false">Step 1: Payment Method</button>
                    </li>
                    
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#step_2" type="button" role="tab" aria-selected="false">Step 2: Trade Pricing</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#step_3" type="button" role="tab" aria-selected="false">Step 3: Trade Instructions</button>
                    </li>
                </ul>
                <!-- /delete these tabs later -->

                <button type="button" class="btn btn-outline-secondary  me-auto" data-bs-dismiss="modal">
                    <i class="fal fa-trash-alt"></i> Delete Offer
                </button>

                <a href="#none" class="btn btn-outline-secondary">
                    <i class="fal fa-arrow-left"></i> Previous Step
                </a>
                                        
                <a href="#none" class="btn btn-primary">
                    Next Step <i class="fal fa-arrow-right"></i>
                </a>
            </div>
            <!-- /modal-footer -->

        </div>
    </div>
</div>
<!-- /offerModal -->