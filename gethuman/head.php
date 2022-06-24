<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow"/>
<meta name="googlebot" content="index, follow"/>
<meta name="bingbot" content="index, follow"/>
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
<link rel="shortcut icon" href="<?php echo BASE_URL; ?>images/favicon.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/header.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/custom.css">
<link rel="stylesheet"  href="<?php echo BASE_URL ?>css/typeahead.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php if ($site_settings['ga_code'] != '') { ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $site_settings['ga_code']; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php echo $site_settings['ga_code']; ?>');
    </script>
<?php } ?>
<!--head code--> 
<?php
if ($site_settings['head_code'] != '') {
    echo $site_settings['head_code'];
}
?>
<style>
<?php if ($site_settings['headerColor'] == '') { ?>
        .cd-main-header{ background: #000032 !important;}
<?php } else { ?>
        .cd-main-header{ background: <?php echo $site_settings['headerColor']; ?> !important;}   
        @media only screen and (max-width: 1169px){
            .cd-primary-nav{ background: <?php echo $site_settings['headerColor']; ?> !important;}
        }
<?php }
?>
<?php if ($site_settings['headerTextColor'] != '') { ?>
        .cd-primary-nav > li > a,.dropbtn{ color: <?php echo $site_settings['headerTextColor']; ?> !important;}
<?php } ?>
<?php if ($site_settings['footerTextColor'] != '') { ?>
        .list li a,.h4-tittle,.btm-list li a,.copyright,.list2 li a{ color: <?php echo $site_settings['footerTextColor']; ?> !important;}
<?php } ?>
<?php if ($site_settings['footerColor'] == '') { ?>
        .bg-color{ background: #000032 !important;}
<?php } else { ?>
        .bg-color{ background: <?php echo $site_settings['footerColor']; ?> !important;}      
<?php }
?>
</style>

