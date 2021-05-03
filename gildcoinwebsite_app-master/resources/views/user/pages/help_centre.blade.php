@extends('user/layouts/layout_outer')

@section('title', 'Help Centre')

@section('navbar-bg', 'bg-light')

@section('logo')
	
    @include('user/partials/logo')
    
@endsection

@section('content')

	<div class="container-fluid container-fluid-body">

        <div class="row mt-5">
            <div class="col-md-6">
                
                <h3 class="mb-4">Contact Info</h3>

                <p>Email:</p>

                <h5 class="mb-4">
                    <i class="fal fa-envelope"></i> <a href="mailto:info@gildcointrading.com">info@gildcointrading.com</a>
                </h5>

                <p>Find us on social media:</p>

                <ul class="list-inline list-social">
                        <li class="list-inline-item fb">
                            <a href="#none" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook">
                                <h2><i class="fab fa-facebook-square"></i></h2>
                            </a>
                        </li>
                        <li class="list-inline-item tw">
                            <a href="#none" data-bs-toggle="tooltip" data-bs-placement="top" title="Twitter">
                                <h2><i class="fab fa-twitter-square"></i></h2>
                            </a>
                        </li>
                        <li class="list-inline-item ig">
                            <a href="#none" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
                                <h2><i class="fab fa-instagram-square"></i></h2>
                            </a>
                        </li>
                    </ul>

            </div>
            <!-- /col -->

            <div class="col-md-6">
                
                <h3>Enquiries</h3>

                <form class="row" action="">
                    
                    <div class="col-md-6">
                        
                        <input name="name" type="text" class="form-control mb-3" placeholder="Name" required="required">

                        <input name="email" type="email" class="form-control mb-3" placeholder="Email Address" required="required">

                    </div>
                    <!-- /col -->

                    <div class="col-md-6">

                        <textarea class="form-control mb-3" rows="3" style="min-height: 86px;" placeholder="Enquiry" required="required"></textarea>

                        <button class="btn btn-outline-primary float-end" type="submit">Send</button>
                        
                    </div>
                    <!-- /col -->

                </form>

            </div>
            <!-- /col -->
        </div>
        <!-- /row -->

        <hr class="my-5" />

        <header class="row my-4">
            <div class="col">
                <h3>Frequently Asked Questions (FAQs)</h3>
            </div>
        </header>
        
        <div class="row row_content">
            
            <div class="col">
                
                <div class="accordion accordion-flush mb-5" id="accordionFAQs">
                    
                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                What is a cryptocurrency?
                            </button>
                        </h2>

                        <div id="collapse_1" class="accordion-collapse collapse show" aria-labelledby="heading_1" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                A cryptocurrency like bitcoin is a virtual currency traded peer-to-peer on a blockchain, independent of centralized authorities like banks and governments. Cryptocurrencies are entirely virtual, so they are not backed by physical commodities and have no intrinsic value.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                How Do Cryptocurrencies Work?
                            </button>
                        </h2>

                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                Primarily, cryptocurrencies rely on blockchain technology to complete a transaction via an intricate P2P network. Once a transfer request is entered into the network, it is validated by the network and added to a pool of other transactions to create a block of data for the ledger, which is then entered into the existing blockchain. Once the block is successfully added to the chain, the transaction is approved and completed.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                Are There Investment Opportunities with Cryptocurrencies?
                            </button>
                        </h2>

                        <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                Absolutely. Cryptocurrencies have become established investment commodities among major financial institutions and have even been adopted by countries such as Australia and Japan. As with any investment though, there are risks linked to market movements, high volatility and economics.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_12">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_12" aria-expanded="false" aria-controls="collapse_12">
                                What is Gildcoin?
                            </button>
                        </h2>

                        <div id="collapse_12" class="accordion-collapse collapse" aria-labelledby="heading_12" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                Gild coin itself, is a cryptocurrency. Gild coin is an internet based medium of exchange that is created and held electronically. Gild coin uses cryptographic functions to conduct financial transactions. No one controls it since Gild coin leverage block chain technology to gain decentralization, transparency and immutability.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_13">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_13" aria-expanded="false" aria-controls="collapse_13">
                                How can I invest in Gildcoin?
                            </button>
                        </h2>

                        <div id="collapse_13" class="accordion-collapse collapse" aria-labelledby="heading_13" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                Just as we sometimes trade goods: buying them and later selling them at a profit, you can also make a profit by joining the cryptocurrency ecosystem and by trading; or through the buying and selling of Gild coins. Ultimately, what Gild coin offers you, is a way to generate income at your freedom and at the convenience of your phone. Whether at home, in school, with friends or at work.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_14">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_14" aria-expanded="false" aria-controls="collapse_3">
                                How does Gildcoin work?
                            </button>
                        </h2>

                        <div id="collapse_14" class="accordion-collapse collapse" aria-labelledby="heading_14" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                From a user perspective, Gild Coin is nothing more than a mobile app or computer program that provides a personal Gild Coin wallet and allows a user to send and receive gild coins with them. This is how Gild Coin works for most users. Behind the scenes, the gild coin network is sharing a public ledger called the "block chain". This ledger contains every transaction ever processed, allowing a user's computer to verify the validity of each transaction. The authenticity of each transaction is protected by digital signatures corresponding to the sending addresses, allowing all users to have full control over sending gild coins from their own Gild Coin addresses. In addition, anyone can buy or sell gild coins to make profit on our trading platform Trade.

                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_15">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_15" aria-expanded="false" aria-controls="collapse_15">
                                How many trades can place at a time?
                            </button>
                        </h2>

                        <div id="collapse_15" class="accordion-collapse collapse" aria-labelledby="heading_15" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                We don't restrict the number of trades you place you can place several trades at a go.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_4" aria-expanded="false" aria-controls="collapse_4">
                                How else can one earn through Gildcoin trading?
                            </button>
                        </h2>

                        <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                After registering you can apply for partnership, you are then issued with a unique referral link. You can then invite friends and earn from your active referrals.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_5" aria-expanded="false" aria-controls="collapse_5">
                                Can I deposit using someone else's account?
                            </button>
                        </h2>

                        <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                No. All deposit means must belong to you, as well as the ownership of cards and other data, as stated in our Terms and Conditions.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_6" aria-expanded="false" aria-controls="collapse_6">
                                How do I withdraw funds from the trading account to a bank card?
                            </button>
                        </h2>

                        <div id="collapse_6" class="accordion-collapse collapse" aria-labelledby="heading_6" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                To withdraw your funds, go to the Withdraw Funds section. Choose a withdrawal method, specify the amount and other necessary details, and click the “Withdraw Funds” button. We do our best to process all withdrawal requests within the same day or the next day if outside working hours on business days (excluding weekends). Please note that it may take a little longer to process interbank (bank-to-bank) payments.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_7">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_7" aria-expanded="false" aria-controls="collapse_7">
                                I forgot my password. What should I do?
                            </button>
                        </h2>

                        <div id="collapse_7" class="accordion-collapse collapse" aria-labelledby="heading_7" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                When you sign in to the site, you can click the "Forgot your password?" link and enter the email address you used for registration. You will get an email message with a link for setting a new password.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_8">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_8" aria-expanded="false" aria-controls="collapse_8">
                                How can I secure my account?
                            </button>
                        </h2>

                        <div id="collapse_8" class="accordion-collapse collapse" aria-labelledby="heading_8" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                To secure your account, use 2-step authentication. Each time you log in to the platform, the system will require you to enter a special code sent to your phone number/ email . You can activate the option in the Settings.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_9">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_9" aria-expanded="false" aria-controls="collapse_9">
                                How can I log out of my account?
                            </button>
                        </h2>

                        <div id="collapse_9" class="accordion-collapse collapse" aria-labelledby="heading_9" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                To log out of your account, go to the Home page and scroll down the page. Click the Log Out button and you will be logged out.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_10">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_10" aria-expanded="false" aria-controls="collapse_10">
                                How do I check the session history of my account?
                            </button>
                        </h2>

                        <div id="collapse_10" class="accordion-collapse collapse" aria-labelledby="heading_10" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                Information about the use of your account is given in your financial history for deposit and withdrawals then for all your trade history go to trading History. There you will find the details of the last activity on your account respectively.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                    <div class="accordion-item">
                        
                        <h2 class="accordion-header" id="heading_11">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_11" aria-expanded="false" aria-controls="collapse_11">
                                What should I do if I can't log into my account?
                            </button>
                        </h2>

                        <div id="collapse_11" class="accordion-collapse collapse" aria-labelledby="heading_11" data-bs-parent="#accordionFAQs">
                            <div class="accordion-body">
                                If you see the message "login limit exceeded", it means that you have entered an incorrect password several times in a row. Please wait for a while before trying to log in again. If you are not sure whether your password is correct, use the "forgot password" option on our login page. The system will send instructions on how to restore your password to the email address that you used for registration on the platform.
                            </div>
                        </div>
                        <!-- /accordion-collapse -->

                    </div>
                    <!-- /accordion-item -->

                </div>
                <!-- /accordion -->

            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container-fluid -->

@endsection