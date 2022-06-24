<style>.footer{ position: relative; bottom: 0;}</style>
<div id="page1">
    <!-- banner -->
    <div class="w3-banner">
        <div class="container">
            <div class="w3l-banner-info">
                <div class="col-sm-6 col-sm-offset-3" style="background-color:#fff; padding: 30px;">
                    <h2 class=" text-center">Kindly verify the below details</h2>
                    <div class="">
                        <form id="second" action="" method="post">
                            <input type="hidden" name="flag" value="second">
                            <input type="hidden" name="key" value="<?php echo $_POST['key']; ?>">
                            <div class="form-div-2">
                                <p>Your Full Name</p>
                                <input class=" form-control" id="name" type="text" name="name" required>
                                <p>Your Email</p>
                                <input class=" form-control" id="email"  type="email" name="email" required>
                                <p>Your Phone No.</p>
                                <input class=" form-control" id="number" type="text" name="number" maxlength="11" required>
                            </div>
                            <div class="btnDiv">
                                <input id="submitBtn" name="submit" type="submit" value="Next">
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>