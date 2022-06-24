<?php
$data = "SELECT * FROM category"
        . " INNER JOIN listing on category.id = listing.catId"
        . " WHERE category.catStatus = 1 GROUP by category.catName order by category.catName desc LIMIT 18";
$data = queryRun($data, $debug = 3);
if ($data->num_rows > 0) {
    ?>
    <section class="bg-color3 pad-tb" style="padding-bottom: 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-40">
                    <h3 class="text">Explore categories</h3>
                </div>
                <?php
                foreach ($data as $row) {
                    ?>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb1-40">
                        <div class="column bg-color4 review-padd">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <a class="write-review" href="<?php echo BASE_URL . 'category/' . $row['catSlug']; ?>"><?php echo $row['catName']; ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>