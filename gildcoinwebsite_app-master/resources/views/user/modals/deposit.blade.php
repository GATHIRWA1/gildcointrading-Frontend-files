<div class="modal modal_deposit fade" id="depositModal" tabindex="-1" aria-labelledby="depositModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                
                <h5 class="modal-title" id="depositModalLabel">
                    Deposit Cash
                </h5>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- /modal-header -->
            
            <div class="modal-body">
                <div class="container-fluid container-fluid-deposit">
                    <div class="row g-2">
                        
                        <div class="col-md-3 col_pills">
                            
                            <div class="nav flex-column nav-pills nav-pills_visa" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                
                                <a class="nav-link active" id="v-pills-1-tab" data-bs-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                                    
                                    <div class="row g-1">
                                        <div class="col-3">
                                            <img src="user_inner/assets/img/logos/visa_mastercard.svg" class="img-fluid" style="width: 40px;" alt="">
                                        </div>
                                        
                                        <div class="col-9">
                                            <p class="p-0 m-0 text-secondary">Visa / Mastercard</p>
                                            <p class="p-0 m-0 text-muted">Instant</p>
                                        </div>
                                    </div>

                                </a>
                                <!-- /nav-link -->
                                
                                <a class="nav-link" id="v-pills-2-tab" data-bs-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
                                    
                                    <div class="row g-1">
                                        
                                        <div class="col-3">
                                            <img src="user_inner/assets/img/logos/mpesa.svg" class="img-fluid" style="width: 40px;" alt="">
                                        </div>
                                        
                                        <div class="col-9">
                                            <p class="p-0 m-0 text-secondary">Mpesa</p>
                                            <p class="p-0 m-0 text-muted">Instant</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- /nav-link -->

                            </div>
                            <!-- /nav -->

                        </div>
                        <!-- /col -->

                        <div class="col-md-9">
                            
                            <div class="tab-content" id="v-pills-tabContent">
                                
                                <div class="tab-pane tab-pane_visa fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                    
                                    <form action="wallet">
                                        
                                        <div class="row row_cards mb-3 g-0">
                                        
                                            <div class="col-8">
                                                
                                                <div class="card-a p-3 pt-5">
                                                    
                                                    <div class="mb-3 mt-3 pe-3">
                                                        <input name="card_number" type="number" class="form-control form-control-lg" placeholder="Card Number" required="required">
                                                    </div>

                                                    <div class="row g-2 pe-3">
                                                        
                                                        <div class="col-5 valid_thru align-content-center mb-3">
                                                            <p class="m-0 text-end text-light">VALID</p>
                                                            <p class="m-0 text-end text-light">THRU</p>
                                                        </div>
                                                        
                                                        <div class="col-3 mb-3">
                                                            
                                                             <input name="mm" type="number" class="form-control form-control-lg" placeholder="MM" maxlength="2" required="required">

                                                        </div>
                                                        
                                                        <div class="col-1 align-items-middle text-light"> 
                                                            <h1 class="slash text-center m-0">/</h1> 
                                                        </div>
                                                        
                                                        <div class="col-3 mb-3">

                                                            <input name="yy" type="number" class="form-control form-control-lg" placeholder="YY" maxlength="2" required="required">
                                                            
                                                        </div>

                                                    </div>
                                                    <!-- /row -->

                                                     <div class="pe-3">
                                                        <input name="card_holder" type="text" class="form-control form-control-lg" placeholder="Card Holder" required="required">
                                                    </div>

                                                </div>
                                                <!-- /card-a -->

                                            </div>
                                            <!-- /col -->
                                            
                                            <div class="col-4">
                                                
                                                <div class="card-b p-3">
                                                    
                                                    <div class="strip"></div>

                                                    <div class="row">
                                                        <div class="col-8 offset-2">
                                                            
                                                            <input name="cvc" type="number" class="cvc form-control form-control-lg mb-0" placeholder="CVC" maxlength="3" required="required">

                                                            <p class="cvc_text text-light"><small>The last 3 digits on the reverse</small></p>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->

                                        <div class="row g-1">

                                            <div class="col-3">
                                                
                                                <select name="currency" class="form-select form-select-lg" required="required">
                                                    <option selected>Currency</option>
                                                    <option value="1">&#36; USD</option>
                                                    <option value="2">&#128; EUR</option>
                                                    <option value="3">&#163; GBP</option>
                                                </select>

                                            </div>
                                            <!-- /col -->

                                            <div class="col-6">
                                                
                                                    
                                                <div class="input-group">

                                                    <span class="input-group-text">&#36;</span>
                                                    
                                                    <input name="amount" type="text" class="form-control form-control-lg" placeholder="Amount" required="required">

                                                </div>
                                                    

                                            </div>
                                            <!-- /col -->

                                            <div class="col-3">
                                                <div class="d-grid">
                                                    <button class="btn btn-lg btn-primary" type="submit">Continue</button>
                                                </div>
                                            </div>
                                            <!-- /col -->

                                        </div>
                                        <!-- /row -->

                                    </form>
                                

                                </div>
                                <!-- /tab-pane -->
                                
                                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                    MPESA details here.
                                </div>
                                <!-- /tab-pane -->
                            </div>
                            <!-- /tab-content -->

                        </div>
                        <!-- /col -->

                    </div>
                    <!-- /row -->
                </div>
                <!-- /container-fluid -->
            </div>
            <!-- /modal-body -->
        </div>
    </div>
</div>
<!-- /depositModal -->