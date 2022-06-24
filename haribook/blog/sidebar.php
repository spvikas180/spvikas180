<?php
$cat_data = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=" . $page . " AND status =1");

$data_latest = dbAction("sidebar_setting", $operation = 4, $form_data = "", "showPage=" . $page . " AND status =1 AND showLatest =1 order by showLatest desc limit 1");
?>

<aside id="secondary" class="tg-site-sidebar widget-area ">
    <section id="search-4" class="widget widget_search">
        <form role="search" method="get" class="search-form" action="<?php echo BASE_URL; ?>blog/">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" class="search-field" placeholder="Enter your keywords" name="s">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>
    </section>

    <?php
    if ($data_latest->num_rows > 0) {
        $data_popular = dbAction('blogs', $operation = 4, $from_data = "", " where blogStatus = 1 AND blogDraft = 1 order by blogCreated desc limit 5");
        if ($data_popular->num_rows > 0) {
            ?>
            <section id="recent-posts-widget-with-thumbnails-2" class="widget recent-posts-widget-with-thumbnails">
                <div id="rpwwt-recent-posts-widget-with-thumbnails-2" class="rpwwt-widget">
                    <ul>
                        <?php
                        foreach ($data_popular as $popular_row) {
                            if ($popular_row['blogImage'] != '') {
                                $blogImage = '<img src="' . BASE_URL . $popular_row['blogImage'] . '" alt="' . $popular_row['blogTitle'] . '">';
                            } else {
                                $blogImage = '';
                            }
                            ?>
                            <li>
                                <a href="<?php echo BASE_URL . 'blog/' . $popular_row['blogInfo']; ?>"><?php echo $blogImage; ?></a>
                                <a href="<?php echo BASE_URL . 'blog/' . $popular_row['blogInfo']; ?>">
                                    <span class="rpwwt-post-title"><?php echo $popular_row['blogTitle']; ?></span><br>
                                    <span class="rpwwt-post-date"><?php echo date('M j Y', strtotime($popular_row['blogCreated'])); ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </section>
            <?php
        }
    }
    ?>

    <?php
    $data = dbAction('listing', $operation = 4, $from_data = "", " where status = 1 and verified = 1 order by date desc limit 10");
//$data = queryRun($data, $debug = 3);
    if ($data->num_rows > 0) {
        ?>
        <section class="widget recent-posts-widget-with-thumbnails">
            <div class="rpwwt-widget">
                <h4>Advertisement</h4>
                <script id="mNCC" language="javascript">
                        medianet_width = "160";
                        medianet_height = "600";
                        medianet_crid = "974581725";
                        medianet_versionId = "3111299";
                </script>
                <script src="https://contextual.media.net/nmedianet.js?cid=8CUA94EB6"></script>
            </div>
        </section>
    <?php } ?>

    <?php
    if ($cat_data->num_rows > 0) {
        foreach ($cat_data as $ads_row) {
            echo $ads_row['adsCode'];
            echo $ads_row['mainAdsCode'];
        }
    }
    ?>
</aside>