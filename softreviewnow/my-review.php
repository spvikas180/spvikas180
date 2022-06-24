<?php include("admin/control/config.php"); ?>
<?php include("temp/site-settings.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <title>My Account Setting</title>
        <?php include 'head.php'; ?>
        <?php $active_re = 'active'; ?>
    </head>
    <body class="signup">
        <?php include 'header.php'; ?>
        <section class="my-account">
            <div class="container">
                <div class="row">
                    <?php include 'temp/nav.php'; ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col12-pd bg-color4 width">
                        <h2>My Reviews</h2>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col12-pd2 mb-20">
                            <div class="col-xl-1 col-lg-1 col-md-2 col-sm-3 col-xs-3">
                                <img src="images/user.png" class="avatar" alt="user img">
                            </div>
                            <div class="col-xl-11 col-lg-11 col-md-10 col-sm-9 col-xs-9">
                                <h5 class="user-h5">Roman Bondarchuk</h5>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <hr>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr">
                                    <fieldset class="rating">
                                        <input type="radio" name="rating" value="5" /><label class="full" title="Awesome - 5 stars"></label>
                                        <input type="radio" name="rating" value="4 and a half" /><label class="half" title="Pretty good - 4.5 stars"></label>
                                        <input type="radio" name="rating" value="4" /><label class = "full" title="Pretty good - 4 stars"></label>
                                        <input type="radio" name="rating" value="3 and a half" /><label class="half" title="Meh - 3.5 stars"></label>
                                        <input type="radio" name="rating" value="3" /><label class = "full" title="Meh - 3 stars"></label>
                                        <input type="radio" name="rating" value="2 and a half" /><label class="half" title="Kinda bad - 2.5 stars"></label>
                                        <input type="radio" name="rating" value="2" /><label class = "full" title="Kinda bad - 2 stars"></label>
                                        <input type="radio" name="rating" value="1 and a half" /><label class="half" title="Meh - 1.5 stars"></label>
                                        <input type="radio" name="rating" value="1" /><label class = "full" title="Sucks big time - 1 star"></label>
                                        <input type="radio" name="rating" value="half" /><label class="half" title="Sucks big time - 0.5 stars"></label>
                                    </fieldset>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 plr">
                                    <h4 class="re-heading">Great customer service and very efficient.</h4>
                                    <h5 class="re-content">Great customer service and very good information about Pet</h5>
                                    <hr>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 plr">
                                    <ul class="icon-ul">
                                        <li><a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Useful</a></li>
                                        <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</a></li>
                                    </ul>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 plr">
                                    <a href="#" class="flag"><i class="fa fa-flag-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
    </body>
</html>
