<!-- Navbar -->
<header class="cd-main-header">
    <a class="cd-logo" href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>images/logo.png" alt="<?php echo $site_settings['site_title']; ?>"></a>
    <ul class="cd-header-buttons">
        <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
        <li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
    </ul>
</header>
<main class="cd-main-content">
    <div class="cd-overlay"></div>
</main>
<nav class="cd-nav">
    <ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
        <li><a href="<?php echo BASE_URL; ?>categories">Categories</a></li>
        <?php
        if (isset($_SESSION['userId'])) {
            if ($users_data['pic'] == '') {
                $pic = BASE_URL . 'images/user.png';
            } else {
                $pic = BASE_URL . $users_data['pic'];
            }
            ?>
        <li><a href="<?php echo BASE_URL; ?>blog">Blog</a></li>
            <li><div class="dropdown">
                    <button class="dropbtn"><img src="<?php echo $pic; ?>" class="user-img" alt="<?php echo $users_data['name']; ?>"><span><?php echo $users_data['name']; ?></span></button>
                    <div class="dropdown-content">
                        <a href="<?php echo BASE_URL; ?>user">My Setting</a>
                        <a href="<?php echo BASE_URL; ?>logout">Log out</a>
                    </div>
                </div>
            </li>
            
        <?php } else { ?>
            <li><a href="<?php echo BASE_URL; ?>login">Log In</a></li>
            <li><a href="<?php echo BASE_URL; ?>signup">Sign Up</a></li>
            <li><a href="<?php echo BASE_URL; ?>business-signup">For Companies</a></li>
            <li><a href="<?php echo BASE_URL; ?>blog">Blog</a></li>
        <?php }
        ?>
        
    </ul> 
</nav> 
<?php if (@$page != 'home') { ?>
    <div id="cd-search" class="cd-search">
        <form method="get" action="<?php echo BASE_URL; ?>search" id="topNavForm">
            <div class="input-with-icon">
                <div class="typeahead__container">
                    <div class="typeahead__field">
                        <div class="typeahead__query">
                            <input type="search" name="query" class="topNavSearch js-typeahead-car_v1 stuff_home" placeholder="Search..." id="stuff" required autocomplete="off"/> 
                            <input type="submit" style="display: none;"/>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php }
?>
<!-- Navbar End-->