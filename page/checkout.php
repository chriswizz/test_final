<?php
$title = "Checkout";
$addCSS = "../CSS/check_out_2.css";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
// include_once "../Components/header.php";
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <img src="https://secure.meetupstatic.com/photos/event/c/2/7/b/600_481729787.jpeg" id="icon" alt="Codefactory"/>
                    </div>
                </div>
                <form class="form-card">
                    <div class="row justify-content-center mb-4 radio-group">
                        <div class="col-sm-3 col-5">
                            <div class='radio selected mx-auto' data-value="dk"> <img class="fit-image" src="https://i.imgur.com/5TqiRQV.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="visa"> <img class="fit-image" src="https://i.imgur.com/OdxcctP.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="master"> <img class="fit-image" src="https://i.imgur.com/WIAP9Ku.jpg" width="105px" height="55px"> </div>
                        </div>
                        <div class="col-sm-3 col-5">
                            <div class='radio mx-auto' data-value="paypal"> <img class="fit-image" src="https://i.imgur.com/cMk1MtK.jpg" width="105px" height="55px"> </div>
                        </div> <br>
                    </div>
                    <div class="row justify-content-center form-group">
                        <div class="col-12 px-auto">
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline1" type="radio" name="customRadioInline1" class="custom-control-input" checked="true"> <label for="customRadioInline1" class="custom-control-label label-radio">Private</label> </div>
                            <div class="custom-control custom-radio custom-control-inline"> <input id="customRadioInline2" type="radio" name="customRadioInline1" class="custom-control-input"> <label for="customRadioInline2" class="custom-control-label label-radio">Business</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input id="name2" type="text" name="Name" placeholder="John Doe"> <label>Name</label> </div>
                            <div class="input-group"> <input id="adress2" type="text" name="Adress" placeholder="Kettenbrückengasse 23/2/12"> <label>Adress</label></div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group"><input id="city2" type="text" name="City" placeholder="Vienna"><label>City</label></div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group"><input id="zipcode2" type="text" name="zip_code" placeholder="1010" minlength="4" maxlength="4"><label>Zip Code</label> </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group"><input id="country2" type="text" name="country" placeholder="Austria"><label>Country</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" id="cr_no" name="card-no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>Card Number</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group"> <input type="text" id="exp" name="expdate" placeholder="MM/YY" minlength="5" maxlength="5"> <label>Expiry Date</label> </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group"> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3"> <label>CVV</label> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                        	<button class="col-md-12 btn btn-pay placeicon" onclick="printPDF()" type="button">PAY 100 EURO NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../Components/footer.php";
?>