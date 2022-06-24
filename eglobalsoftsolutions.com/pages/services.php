<?php $service=content('https://docs.google.com/spreadsheets/d/e/2PACX-1vS8-Ylm4rsbFy9qfWWPa9JQPiiPtCAcY4UBZtiJnr2FBNkajzAbVqn7GSJDXThnnhCpkuuaiHnOrQlM/pub?gid=0&single=true&output=csv'); ?>
<?php //$service=content('content/home/features.csv'); ?>
<div class="header1">
  <div class="headerCopy">
    <h2><?php echo $service[1][0]; ?></h2>
    <p><b><?php echo $service[1][1]; ?></b><br><?php echo $service[1][2]; ?></p>
  </div>
  <div class="headerImage"><img src="<?php echo BASE; ?>images/service.png" alt="" /></div>
</div>
<main>
  <section class="section intro">
    <h4><?php echo $service[2][0]; ?></h4>
     <p><?php echo $service[2][2]; ?></p>
 </section>
 <?php //$ser_plus=2; for ($ser_loop=0; $ser_loop < 3; $ser_loop++) {  ?>
 <section class="section teaser teaserYarns mobileCenter">
   <div class="sectionImg"><img src="<?php echo BASE; ?>images/wd.png" alt="" /></div>
   <div class="sectionCopy" data-aos="fade-up">
     <div class="new">
       <span>DEVELOP YOUR NEED!</span>
     </div>
     <h3><?php echo $service[3][0]; ?></h3>
     <p><?php echo $service[3][2]; ?></p>
     <a href="<?php echo $service[3][3]; ?>" class="button"><?php echo $service[3][4]; ?></a>
   </div>
 </section>
 <?php //$ser_plus++; } ?>
 <section class="section teaser teaserPatterns mobileCenter">
   <div class="sectionImg">
     <img src="<?php echo BASE; ?>images/a.png" alt="">
   </div>
   <div class="sectionCopy" data-aos="fade-up">
     <h3><?php echo $service[4][0]; ?></h3>
     <p><?php echo $service[4][2]; ?></p>
     <a href="<?php echo $service[4][0]; ?>" class="button"><?php echo $service[4][0]; ?></a>
   </div>
 </section>
 <section class="section teaser teaserAccessories mobileCenter">
   <div class="sectionImg"><img src="<?php echo BASE; ?>images/w.png" alt=""></div>
   <div class="sectionCopy" data-aos="fade-up">
     <h3><?php echo $service[5][0]; ?></h3>
     <p><?php echo $service[5][2]; ?></p>
     <a href="<?php echo $service[5][0]; ?>" class="button"><?php echo $service[5][0]; ?></a>
   </div>
 </section>
<?php //include_once"temp-part/cta-one.php"; ?>
<section class="cms_boxes">
  <div class="container">
    <div class="row">
      <ul class="cms_single">
        <li><a href="" title="cms_single"><i class="fa fa-magento"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-wordpress"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-opencart"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-paypal"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-joomla"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-drupal"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-css3"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-html5"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-windows"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-yoast"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-wordpress-simple"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-yelp"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-edit"></i></a></li>
        <li><a href="" title="cms_single"><i class="fa fa-tumblr"></i></a></li>
      </ul>
    </div>
  </div>
</section>
</main>