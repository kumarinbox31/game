<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="assets/css/main.min.css" type="text/css" media="screen">
  <link rel="shortcut icon" href="#">
  <title>Game</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  />
  <link rel="stylesheet" href="assets/css/custom.css">
</head>


<body class="worldwide-bg">

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
            <a href="wallet.php" class="notification-block">
                <img src="assets/img/icons/wallet-light.svg" alt="Wallet">
                <img src="assets/img/icons/wallet-light-red.svg" class="dark-theme-image" alt="Wallet">
                <!-- <div class="notification-number">2</div> -->
            </a>
            <img src="assets/img/user.svg" alt="User Image">
        </div>
        <!-- Notification and User Block End -->
    </div>
    <div class="bottom-row">

    </div>
</div>
<!-- Header End -->    