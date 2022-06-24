<section class="intro">
    <div class="container">
        <div class="section-head col-sm-12">
            <h2><span>Get Effective Quotation Within</span> Efficient Cost</h2>
            <p>
                We at Nexus Web World ensure that you get all your requirements fulfilled without going over the budget. We provide an <br>effective and efficient quotation to represent your business prospects.
            </p>
        </div>
    </div>
</section>
<div class="container quote_main">   
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <img src="<?php echo BASE; ?>images/budget.jpg">

        </div>
        <div class="col-md-6 col-sm-12">
            <article class="quote_tis">
                <h4><i class="fa fa-calculator"></i> Calculate Your  <i class="fa fa-money"></i> Budget</h4>
                <form role="form" action="" method="post">
                    <section>
                        <h3><i class="fa fa-user"></i> Contact Info</h3>
                        <label for="">Name</label>
                        <input class="form-control"  name="name" required  type="text">

                        <label for="">Email</label>
                        <input class="form-control"  name="email" required  type="email">

                        <label for="">Phone</label>
                        <input class="form-control"  name="phone" required type="tel">

                        <span tabindex="0" class="next step tire_btn">Next step</span>
                    </section>

                    <section>
                        <h3><i class="fa fa-bar-chart-o"></i> Company Info</h3>
                        <label for="">Company Name</label>
                        <input class="form-control"  name="brand" type="text">

                        <label for="">What your Company Does</label>
                        <textarea name="work" class="form-control"></textarea>

                        <span tabindex="0" class="previous step tire_btn">Previous step</span>
                        <span tabindex="0" class="next step tire_btn">Next step</span>
                    </section>

                    <section>
                        <h3><i class="fa fa-suitcase"></i> Project Info</h3>
                        <label for="">What is your Domain? (ex. www.google.com)</label>
                        <input class="form-control"  name="domain"  type="text" autocapitalize="off" autocorrect="off">

                        <label for="">Do you need hosting/email?</label>
                        <select name="hosting" class="form-control">
                            <option value="">Select One</option>
                            <option value="">Yes</option>
                            <option value="">No</option>
                        </select>
                        <label for="">Who will manage the website?</label>
                        <input class="form-control"  name="staticDynamic"  type="text">
                        <label for="">How soon do you need the new website completed?</label>
                        <input class="form-control"  name="time_frame"  type="text">
                        <label for="">Approximately how many pages/sections will your website have?</label>
                        <input class="form-control"  name="pages"  type="text">
                        <label for="">What is your estimated budget</label>
                        <select name="budget" class="form-control">
                            <option value="">Select One</option>
                            <option value="">$2000</option>
                            <option value="">$2000 - $3000</option>
                            <option value="">$4000 - $5000</option>
                            <option value="">$5000+</option>
                        </select>
                        <span tabindex="0" class="previous step tire_btn">Previous step</span>
                        <span tabindex="0" class="next step tire_btn">Next step</span>
                    </section>
                    <section>
                        <h3><i class="fa fa-desktop"></i> Your New Website</h3>
                        <label for="">What Are your goals for this website?</label>
                        <textarea name="goals" class="form-control"></textarea>

                        <label for="">Who is your target audience?</label>
                        <textarea name="target" class="form-control"></textarea>

                        <label for="">Do you have a color scheme? If not, what is your color preference?</label>
                        <textarea name="color_theme" class="form-control"></textarea>

                        <label for="">Please list your competitors' websites. What do you like and not like about their websites?</label>
                        <textarea name="competitors" class="form-control"></textarea>

                        <label for="">Are there any websites that you like? Why? </label>
                        <textarea name="refrence" class="form-control"></textarea>

                        <label>Possible Features</label>
                        <label><input name="cf"  type="checkbox">Contact Form</label>
                        <label><input name="blog"  type="checkbox">Blog</label>
                        <label><input name="image_gallary"  type="checkbox">Image Gallery</label>
                        <label><input name="admin"  type="checkbox">Admin Section</label>
                        <label><input name="search"  type="checkbox">Search</label>
                        <label><input name="newsletter"  type="checkbox">Newsletter</label>

                        <label for="">Additional comments</label>
                        <textarea name="comments" class="form-control"></textarea>
                        <span tabindex="0" class="previous step tire_btn">Previous step</span>
                        <button type="submit" name="quote_data" class="btn tire_btn pull-right">Send Quotation</button>
                    </section>
                </form>
            </article>
        </div>
    </div>
</div>
<?php
if (isset($_POST['quote_data'])) {
    $mailsend = sendMail("vikasphp7@gmail.com", "New Inquirey testing", "Development debuging");
    if ($mailsend == 1) {
        echo '<h2>email sent.</h2>';
    } else {
        //echo '<h2>There are some issue.</h2>';
    }
}
?>