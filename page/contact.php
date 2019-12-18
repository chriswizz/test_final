<?php
$title = "Contact";
$addCSS = "../CSS/contact_form.css";
include_once "../Components/head.php";
include_once "../Components/navbar.php";
// include_once "../Components/header.php";
?>
<div class="container h-100">
    <div class="row">
        <div class="col-10 offset-1">
            <div class="col-md-8 offset-md-2">
                <div class="well well-sm">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend class="text-center">Contact us</legend>

                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-12">
                                    <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-12">
                                    <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-12">
                                    <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-outline-danger btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "../Components/footer.php";
?>