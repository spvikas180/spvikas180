<?php include"config.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        $page_title = "Website Development Company - Nexus Web World";
        $page_des = "";
        $page_key = " web development company,  web development service";
        $pageName = "";
        ?>
        <!-- COMMON TAGS -->
        <?php include_once"head.php"; ?>
        <?php
        $page = "web-development.php";
        $path = "pages";
        $fileName = scandir($path, 1);
        $indirName = array_search($page, $fileName);
        $flatName = str_replace(".php", "", $page);
        echo "<link rel='stylesheet' href='" . BASE . "css/pages/" . $flatName . ".css'>";
        ?>

    </head>
    <body class="common_body" >
        <?php include_once"header.php"; ?>
        <?php include"temp-part/common-banner.php"; ?>
        <?php //include_once"temp-part/common-banner.php"; ?>
        <section class="page_wrapper">
            <?php
            if (in_array($page, $fileName)) {
                include_once $path . "/" . $page;
            } else {
                echo "<h1>Unvarified page</h1>";
            }
            ?>
            <?php //include_once"pages/about.php"; ?>
        </section>
        <?php include_once"footer.php"; ?>
    </body>
</html>