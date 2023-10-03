<?php include 'header.php'; ?>

    <!-- Modals Start -->
<!-- Modal Add Money Start-->
<div class="modal fade" id="balanceModal" tabindex="-1" role="dialog" aria-labelledby="balanceModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="assets/img/icons/add-money-icon.svg" class="modal-icon" alt="Add Money Icon">
                    <img src="assets/img/icons/add-money-icon-dark-theme.svg" class="modal-icon dark-theme-image" alt="Add Money Icon">
                    <div class="modal-title">
                        Add Balance
                    </div>
                </div>
                <div class="modal-text">
                    Certe, inquam, pertinax non intellegamus, tu paulo ante cum memoriter, tum etiam erga nos causae confidere, sed quia non numquam eius, quid.
                </div>

                <div class="devider-without-line"></div>

                <!-- Add Balance Form Start -->
                <form class="add-balance-form">
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="balance-from">From</label>
                        <input class="form-control" type="text" autocomplete="off" name="balance-from" id="balance-from" placeholder="PayPal Account">
                    </div>
                    <!-- Form Field End -->          
        
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="balance-amount">Enter Amount</label>
                        <input class="form-control" type="text" autocomplete="off" name="balance-amount" id="balance-amount" placeholder="$100">
                    </div>
                    <!-- Form Field End -->
                </form>
                <!-- Add Balance Form End -->

            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <a class="btn btn-dark w-100 ml-2">DEPOSIT</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Money End-->

<!-- Modal Withdraw Start-->
<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="assets/img/icons/assets-protection.svg" class="modal-icon" alt="Withdraw Icon">
                    <img src="assets/img/icons/assets-protection-dark-theme.svg" class="modal-icon dark-theme-image" alt="Withdraw Icon">
                    <div class="modal-title">
                        Withdraw
                    </div>
                </div>
                <div class="modal-text">
                    Certe, inquam, pertinax non intellegamus, tu paulo ante cum memoriter, tum etiam erga nos causae confidere, sed quia non numquam eius modi.
                </div>

                <div class="devider-without-line"></div>

                <!-- Withdraw Form Start -->
                <form class="withdraw-form">
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="withdraw-from">From</label>
                        <select name="withdraw-from" id="withdraw-from">
                            <option value="Savings (***5411)">Savings (***5411)</option>
                            <option value="Savings (***2311)">Savings (***2311)</option>
                            <option value="Savings (***5511)">Savings (***5511)</option>
                            <option value="Savings (***5561)">Savings (***5561)</option>
                        </select>
                    </div>
                    <!-- Form Field End --> 
                    
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="withdraw-to">To</label>
                        <div class="card-image">
                            <img src="assets/img/icons/mastercard.svg" alt="MasterCard Icon">
                        </div>
                        <select name="withdraw-to" id="withdraw-to">
                            <option value="**** **** **** 5324">
                                **** **** **** 5324
                            </option>
                            <option value="**** **** **** 5351">
                                **** **** **** 5351
                            </option>
                            <option value="**** **** **** 1124">
                                **** **** **** 1124
                            </option>
                        </select>
                    </div>
                    <!-- Form Field End -->
        
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="withdraw-amount">Enter Amount</label>
                        <input class="form-control" type="text" autocomplete="off" name="withdraw-amount" id="withdraw-amount" placeholder="$100">
                    </div>
                    <!-- Form Field End -->
                </form>
                <!-- Withdraw Form End -->

            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <a class="btn btn-dark w-100 ml-2">WITHDRAW</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Withdraw End-->

<!-- Modal Send Money Start-->
<div class="modal fade" id="sendMoneyModal" tabindex="-1" role="dialog" aria-labelledby="sendMoneyModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="assets/img/icons/budget-balance.svg" class="modal-icon" alt="Send Money Icon">
                    <img src="assets/img/icons/budget-balance-dark-theme.svg" class="modal-icon dark-theme-image" alt="Send Money Icon">
                    <div class="modal-title">
                        SEND MONEY
                    </div>
                </div>
                <div class="modal-text">
                    Certe, inquam, pertinax non intellegamus, tu paulo ante cum memoriter, tum etiam erga nos causae confidere, sed quia non numquam eius modi.
                </div>

                <div class="devider-without-line"></div>

                <!-- Send Money Form Start -->
                <form class="withdraw-form">
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="send-money-from">From</label>
                        <select name="send-money-from" id="send-money-from">
                            <option value="Savings (***5411)">Savings (***5411)</option>
                            <option value="Savings (***2311)">Savings (***2311)</option>
                            <option value="Savings (***5511)">Savings (***5511)</option>
                            <option value="Savings (***5561)">Savings (***5561)</option>
                        </select>
                    </div>
                    <!-- Form Field End --> 
                    
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center select-with-user-image select-with-card-image">
                        <label for="send-money-to">To</label>
                        <div class="card-image">
                            <img src="assets/img/icons/mastercard.svg" alt="MasterCard Icon">
                        </div>
                        <select name="send-money-to" id="send-money-to">
                            <option value="**** **** **** 5324">
                                **** **** **** 5324
                            </option>
                            <option value="**** **** **** 5351">
                                **** **** **** 5351
                            </option>
                            <option value="**** **** **** 1124">
                                **** **** **** 1124
                            </option>
                        </select>
                        <div class="user-image">
                            <img src="assets/img/user-3.jpg" alt="">
                        </div>
                    </div>
                    <!-- Form Field End -->
        
                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="send-money-amount">Enter Amount</label>
                        <input class="form-control" type="text" autocomplete="off" name="send-money-amount" id="send-money-amount" placeholder="$100">
                    </div>
                    <!-- Form Field End -->
                </form>
                <!-- Send Money Form End -->

            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <a class="btn btn-dark w-100 ml-2">SEND</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Send money End-->

<!-- Modal Exchange Money Start-->
<div class="modal fade" id="exchangeModal" tabindex="-1" role="dialog" aria-labelledby="exchangeModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="assets/img/icons/exchange.svg" class="modal-icon" alt="Exchange Money Icon">
                    <img src="assets/img/icons/exchange-dark-theme.svg" class="modal-icon dark-theme-image" alt="Exchange Money Icon">
                    <div class="modal-title">
                        EXCHANGE MONEY
                    </div>
                </div>
                <div class="modal-text">
                    Certe, inquam, pertinax non intellegamus, tu paulo ante cum memoriter, tum etiam erga nos causae confidere, sed quia non numquam eius modi.
                </div>

                <div class="devider-without-line"></div>

                <!-- Exchange Money Form Start -->
                <form class="add-balance-form">

                    <div class="d-flex align-items-center inputs-in-row">
                        <!-- Form Field Start -->
                        <div class="d-flex align-items-center w-100">
                            <label for="exchange-from">From</label>
                            <input class="form-control" type="text" autocomplete="off" name="exchange-from" id="exchange-from" placeholder="EUR">
                        </div>
                        <!-- Form Field End -->          
            
                        <!-- Form Field Start -->
                        <div class="d-flex align-items-center ml-3 w-100">
                            <label for="exchange-to">To</label>
                            <input class="form-control" type="text" autocomplete="off" name="exchange-to" id="exchange-to" placeholder="USD">
                        </div>
                        <!-- Form Field End -->
                    </div>

                    <!-- Form Field Start -->
                    <div class="d-flex align-items-center">
                        <label for="exchange-amount">Enter Amount</label>
                        <input class="form-control" type="text" autocomplete="off" name="exchange-amount" id="exchange-amount" placeholder="$100">
                    </div>
                    <!-- Form Field End -->
                    
                </form>
                <!-- Exchange Money Form End -->

            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <a class="btn btn-dark w-100 ml-2">EXCHANGE</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Exchange Money End-->

<!-- Modal Support Start-->
<div class="modal fade" id="supportModal" tabindex="-1" role="dialog" aria-labelledby="supportModalTitle" aria-hidden="true">
    <div class="modal-dialog mx-auto my-0 d-flex h-100 pt-5" role="document">
        <div class="modal-content mt-auto">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/icons/ic-close.svg" alt="Icon Close"></span>
            </button>
            <div class="modal-middle">
                <div class="text-center change-image-theme-ib">
                    <img src="assets/img/icons/support.svg" class="modal-icon" alt="Support Icon">
                    <img src="assets/img/icons/support-dark-theme.svg" class="modal-icon dark-theme-image" alt="Support Icon">
                    <div class="modal-title">
                        Support 24/7
                    </div>
                </div>
                <div class="modal-text">
                    Certe, inquam, pertinax non intellegamus, tu paulo ante cum memoriter, tum etiam erga nos causae confidere, sed quia non numquam eius modi.
                </div>

                <div class="devider-without-line"></div>

                <!-- Support Form Start -->
                <form class="add-balance-form">

                    <!-- Form Field Start -->
                    <label for="support-comment">* Comments</label>
                    <textarea name="support-comment" utocomplete="off" id="support-comment"></textarea>
                    <!-- Form Field End -->
                    
                </form>
                <!-- Support Form End -->

            </div>
            <div class="modal-bottom d-flex mt-4">
                <a class="btn btn-light w-100" data-dismiss="modal">CANCEL</a>
                <a class="btn btn-dark w-100 ml-2">SEND</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Support End-->
<!-- Modals End -->

    <!-- Header Start -->
<div class="main-header w-100">
    <!-- <div class="top-row d-flex justify-content-between align-items-center">
        <div class="time">
            <img src="assets/img/icons/i-phone-x-overrides-time-black.svg" alt="">
            <img src="assets/img/icons/time-dark-theme.svg" class="dark-theme-image" alt="">
        </div>
        <div class="mobile-info-icons">
            <img src="assets/img/icons/phone-icons.svg" alt="phone-icons">
            <img src="assets/img/icons/phone-icons-white.svg" class="dark-theme-image" alt="phone-icons">
        </div>
    </div> -->
    <div class="middle-row d-flex justify-content-between w-100">
        <!-- Menu Icon Start -->
        <div class="menu-icon icon-open">
            <a href="menu.php">
                <img src="assets/img/icons/menu-icon.svg" alt="Menu Icon">
                <img src="assets/img/icons/menu-icon-dark-theme.svg" class="dark-theme-image" alt="Menu Icon">
            </a>
        </div>
        <!-- Menu Icon End -->

        <!-- FinHit Logo Start -->
        <div class="finhit-logo">
            <img class="img-responsive" src="assets/img/Logo.png" alt="FinHit Logo">
            <img class="img-responsive dark-theme-image" src="assets/img/Logo-dark-theme.png" alt="FinHit Logo">
        </div>
        <!-- FinHit Logo End -->

        <!-- Notification and User Block Start -->
        <div class="main-header_notification-user-block d-flex align-items-center">
            <a href="notifications.html" class="notification-block">
                <img src="assets/img/icons/notification.svg" alt="Notification Image">
                <img src="assets/img/icons/notification-dark-theme.svg" class="dark-theme-image" alt="Notification Image">
                <div class="notification-number">2</div>
            </a>
            <img src="assets/img/user.svg" alt="User Image">
        </div>
        <!-- Notification and User Block End -->
    </div>
    <div class="bottom-row">

    </div>
</div>
<!-- Header End -->    

    <div class="main-content mt-50">
      <!-- All Content Start -->
      <div class="content-padding">

        <!-- Total Balance Add Money Start -->
        <div class="d-flex justify-content-between align-items-end total-balance-add-money-block">
            <div class="total-balance-block">
                TOTAL BALANCE
                <div class="money-balance">
                    $ 5,354.30
                </div>
            </div>
            <div class="add-money-block text-center change-image-theme" data-toggle="modal" data-target="#balanceModal">
                <img src="assets/img/icons/add-money-icon.svg" alt="Add Money Icon">
                <img src="assets/img/icons/add-money-icon-dark-theme.svg" class="dark-theme-image" alt="Add Money Icon">
                Add Money
            </div>
        </div>
        <!-- Total Balance Add Money End -->

        <!-- Popups Menu Block Start -->
        <div class="popups-menu-block d-flex justify-content-between align-items-center">
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#withdrawModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="assets/img/icons/assets-protection.svg" alt="Withdraw Image">
                    <img src="assets/img/icons/assets-protection-dark-theme.svg" class="dark-theme-image" alt="Withdraw Image">
                </div>
                Withdraw
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#sendMoneyModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="assets/img/icons/budget-balance.svg" alt="Send Image">
                    <img src="assets/img/icons/budget-balance-dark-theme.svg" class="dark-theme-image" alt="Send Image">
                </div>
                Send
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#exchangeModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="assets/img/icons/exchange.svg" alt="Exchange Image">
                    <img src="assets/img/icons/exchange-dark-theme.svg" class="dark-theme-image" alt="Exchange Image">
                </div>
                Exchange
            </div>
            <div class="popup-menu-item text-center" data-toggle="modal" data-target="#supportModal">
                <div class="image-wrapper change-image-theme d-flex justify-content-center align-items-center">
                    <img src="assets/img/icons/support.svg" alt="Support Image">
                    <img src="assets/img/icons/support-dark-theme.svg" class="dark-theme-image" alt="Support Image">
                </div>
                Support
            </div>
        </div>
        <!-- Popups Menu Block End -->
        
        <!-- Devide Start -->
        <div class="devider right"></div>
        <!-- Devide End -->
        
        <!-- Charts Block Start -->
        <div class="charts-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    CHARTS
                </div>
                <a href="charts.html" class="text-underline">View All</a>
            </div>
            <div class="charts-wrapper">

                <!-- Chart Start-->
                <canvas id="popChart" width="600" height="400"></canvas>
                <!-- Chart End-->

            </div>
            <div class="charts-information d-flex">
                <div class="item-information income-information">
                    <div class="information-title d-flex align-items-center">
                        INCOME
                    </div>
                    <div class="information-money">
                        $785.50
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="income-chart.html" class="block-link"></a>
                </div>
                <div class="item-information expense-information">
                    <div class="information-title d-flex align-items-center">
                        EXPENSE
                    </div>
                    <div class="information-money">
                        $57.45
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 19%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="expense-chart.html" class="block-link"></a>
                </div>                
            </div>
            <div class="charts-information d-flex">
                <div class="item-information bills-information">
                    <div class="information-title d-flex align-items-center">
                        BILLS
                    </div>
                    <div class="information-money">
                        $841.95
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="bills-chart.html" class="block-link"></a>
                </div>
                <div class="item-information saving-information">
                    <div class="information-title d-flex align-items-center">
                        SAVINGS
                    </div>
                    <div class="information-money">
                        $3,545.57
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 83%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <a href="savings-chart.html" class="block-link"></a>
                </div>
            </div>

        </div>
        <!-- Charts Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Transactions Block Start -->
        <div class="transactions-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    TRANSACTIONS
                </div>
                <a href="all-transactions.html" class="text-underline">View All</a>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="assets/img/transaction-img-1.jpg" class="border-50" alt="Transaction Image">
                </div>
                <div class="item-transaction_transaction-title">
                    George Amashukeli
                    <div class="transaction-type">
                        Transfer
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto negative">
                    -$189.99
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="assets/img/icons/pay-pal-icon.svg" alt="PalPal Icon">
                </div>
                <div class="item-transaction_transaction-title">
                    Digital Product
                    <div class="transaction-type">
                        PayPal
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto">
                    +$1035.45
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center change-image-theme">
                    <img src="assets/img/icons/apple-pay-icon.svg" alt="Apple Pay Icon">
                    <img src="assets/img/icons/apple-pay-icon-dark-theme.svg" class="dark-theme-image" alt="Apple Pay Icon">
                </div>
                <div class="item-transaction_transaction-title">
                    App Store Purchase
                    <div class="transaction-type">
                        Apple Pay
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto negative">
                    -$73.00
                </div>
            </div>
            <div class="item-transaction d-flex align-items-center">
                <div class="item-transaction_transaction-image d-flex justify-content-center align-items-center">
                    <img src="assets/img/transaction-img-2.jpg" class="border-50" alt="Transaction Image">
                </div>
                <div class="item-transaction_transaction-title">
                    Amanda Bernshtein
                    <div class="transaction-type">
                        Transfer
                    </div>
                </div>
                <div class="item-transaction_transaction-amount ml-auto">
                    +$327.30
                </div>
            </div>
        </div>
        <!-- Transactions Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Cards Block Start -->
        <div class="cards-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    MY CARDS
                </div>
                <a href="my-cards.html" class="text-underline">View All</a>
            </div>
            <div class="cards-carousel owl-carousel">
                <div class="item-card">
                    <img src="assets/img/card-1.svg" alt="Card Image">
                </div>
                <div class="item-card">
                    <img src="assets/img/card-3.svg" alt="Card Image">
                </div>
                <div class="item-card">
                    <img src="assets/img/card-2.svg" alt="Card Image">
                </div>
            </div>
        </div>
        <!-- Cards Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Monthly BilLs Block Start -->
        <div class="monthly-bills-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center mb-3">
                <div>
                    MONTHLY BILLS
                </div>
                <a href="all-bills.html" class="text-underline">View All</a>
            </div>
            <div class="bills-carousel owl-carousel">
                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/water-bill.svg" class="bill-icon" alt="Water Bill">
                    <img src="assets/img/icons/water-bill-dark-theme.svg" class="bill-icon dark-theme-image" alt="Water Bill">
                    <div class="bill-ammount">
                        $19.50
                    </div>
                    <div class="bill-title">
                        Water Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>
                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/energy-consumption.svg" class="bill-icon" alt="Water Bill">
                    <img src="assets/img/icons/energy-consumption-dark-theme.svg" class="bill-icon dark-theme-image" alt="energy-consumption">
                    <div class="bill-ammount">
                        $459.50
                    </div>
                    <div class="bill-title">
                        Electric Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>
                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/wifi.svg" class="bill-icon" alt="Water Bill">
                    <img src="assets/img/icons/wifi-dark-theme.svg" class="bill-icon dark-theme-image" alt="Water Bill">
                    <div class="bill-ammount">
                        $198.50
                    </div>
                    <div class="bill-title">
                        Internet Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>

                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/smart-tv.svg" class="bill-icon" alt="Water Bill">
                    <img src="assets/img/icons/smart-tv-dark-theme.svg" class="bill-icon dark-theme-image" alt="Water Bill">
                    <div class="bill-ammount">
                        $15.55
                    </div>
                    <div class="bill-title">
                        TV Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>
                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/mobile_bill.svg" class="bill-icon" alt="Water Bill">
                    <img src="assets/img/icons/mobile_bill-dark-theme.svg" class="bill-icon dark-theme-image" alt="Water Bill">
                    <div class="bill-ammount">
                        $25.73
                    </div>
                    <div class="bill-title">
                        Mobile Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>
                <div class="item-bill text-center change-image-theme">
                    <img src="assets/img/icons/Insurance_bill.svg" class="bill-icon" alt="Insurance Bill">
                    <img src="assets/img/icons/Insurance_bill-dark-theme.svg" class="bill-icon dark-theme-image" alt="Insurance Bill">
                    <div class="bill-ammount">
                        $100.99
                    </div>
                    <div class="bill-title">
                        Insurance Montly Subscription
                    </div>
                    <a href="#" class="btn btn-dark btn-pay">Pay Now</a>
                </div>
            </div>
        </div>
        <!-- Monthly BilLs Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Send Money Block Start -->
        <div class="send-money-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    SEND MONEY
                </div>
                <a href="#" class="text-underline">Add New</a>
            </div>
            <div class="send-money-carousel owl-carousel">
                <div class="item text-center">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-1.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Laura
                    </div>
                </div>
                <div class="item text-center">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-2.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Daniel
                    </div>
                </div>
                <div class="item text-center online">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-3.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        George
                    </div>
                </div>
                <div class="item text-center">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-4.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Maya
                    </div>
                </div>
                <div class="item text-center">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-5.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Paul
                    </div>
                </div>
                <div class="item text-center online">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-6.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Laura
                    </div>
                </div>
                <div class="item text-center">
                    <div class="user-image-wrapper d-flex justify-content-center align-items-center">
                        <img src="assets/img/user-7.jpg" alt="User Image">
                    </div>
                    <div class="user-name">
                        Daniel
                    </div>
                </div>
            </div>
        </div>
        <!-- Send Money Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Money Loan Block Start -->
        <div class="money-loan-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    MONEY LOAN
                </div>
                <a href="#" class="text-underline">View All</a>
            </div>
            <div class="money-loan-carousel owl-carousel">
                <div class="item">
                    <div class="graph-wrapper">
                        <img src="assets/img/green-graph.svg" alt="Green Graph">
                    </div>
                    <div class="graph-info">
                        <div class="graph-title">
                            UNITS SALE
                        </div>
                        <div class="numbers">
                            1,956
                        </div>
                        <div class="percents grow d-flex flex-row align-items-center">
                            27%
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="graph-wrapper">
                        <img src="assets/img/red-graph.svg" alt="Green Graph">
                    </div>
                    <div class="graph-info">
                        <div class="graph-title">
                            REVENUE
                        </div>
                        <div class="numbers">
                            $3.8k
                        </div>
                        <div class="percents decrease d-flex flex-row align-items-center">
                            12%
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="graph-wrapper">
                        <img src="assets/img/green-graph.svg" alt="Green Graph">
                    </div>
                    <div class="graph-info">
                        <div class="graph-title">
                            UNITS SALE
                        </div>
                        <div class="numbers">
                            1,956
                        </div>
                        <div class="percents grow d-flex flex-row align-items-center">
                            27%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Money Loan Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Saving Goals Block Start -->
        <div class="saving-goals-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    SAVING GOALS
                </div>
                <a href="all-savings.html" class="text-underline">View All</a>
            </div>
            <div class="item-saving-goal gaming">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <div class="title">
                            Gaming Console
                        </div>
                        <div class="category">
                            Gaming
                        </div>
                    </div>
                    <div class="saved-amount">
                        $189.99
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="progress w-100">
                        <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="percent-progress ml-3">
                        67%
                    </div>
                </div>
            </div>
            <div class="item-saving-goal livign">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <div class="title">
                            New House
                        </div>
                        <div class="category">
                            Living
                        </div>
                    </div>
                    <div class="saved-amount">
                        $100,000.00
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="progress w-100">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="percent-progress ml-3">
                        55%
                    </div>
                </div>                
            </div>
            <div class="item-saving-goal lifestyle">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <div class="title">
                            Sport Car
                        </div>
                        <div class="category">
                            Lifestyle
                        </div>
                    </div>
                    <div class="saved-amount">
                        $42,000.00
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="progress w-100">
                        <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="percent-progress ml-3">
                        15%
                    </div>
                </div>
            </div>
        </div>
        <!-- Saving Goals Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Latest News Block Start -->
        <div class="latest-news-block information-block mt-3">
            <div class="information-block_title d-flex justify-content-between align-items-center">
                <div>
                    LATEST NEWS
                </div>
                <a href="blog.html" class="text-underline">View All</a>
            </div>
            <div class="latest-news-carousel owl-carousel">
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="assets/img/news-image-1.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="assets/img/news-image.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                386 view -  28 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolor Sit Amet.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="assets/img/news-image-2.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-thumbnail">
                        <a href="single-article.html">
                            <img src="assets/img/news-image-3.jpg" alt="News Image">
                        </a>
                    </div>
                    <div class="news-content">
                        <div class="news-info d-flex justify-content-between align-items-center">
                            <div class="news-views-comments">
                                6.8K view -  379 comments
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="new-bookmark">
                                    <i class="fal fa-bookmark"></i>
                                </div>
                                <div class="news-share ml-2">
                                    <i class="fal fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="news-title">
                            <a href="single-article.html">
                                Lorem Ipsum Dolores Sit Amet Concateur.
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest News Block End -->

        <!-- Devide Start -->
        <div class="devider left mt-4"></div>
        <!-- Devide End -->

        <!-- Copyright Block Start -->
<div class="copyright-block copyright-big text-center">
    <div class="top-block">
        Copyright &copy; <span>Meco</span><span>Nata</span> 2021. All Rights Reserved.
    </div>
    Wallet UI Kit for Mobile Application.
</div>
<!-- Copyright Block End -->
        
      </div>
      <!-- All Content End -->
    </div>   
    

<?php include 'footer.php'; ?>
 