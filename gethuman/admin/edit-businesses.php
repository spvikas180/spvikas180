<?php
if ($_GET['id']) {
    $id = $_GET['id'];
    $listing_data = dbAction("listing", $operation = 4, $form_data = "", "listId= $id");
    $listing_data_row = $listing_data->fetch_assoc();
    $catId = $listing_data_row['catId'];
    $subCatId = $listing_data_row['subCatId'];
    $status = $listing_data_row['status'];

    if ($listing_data_row['logo'] == '') {
        $logo = 'dist/img/default-50x50.gif';
    } else {
        $logo = '' . BASE_URL . $listing_data_row['logo'] . '';
    }
}
$countries_data = dbAction("countries", $operation = 4, $form_data = "");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Businesses
            <small>( <?php echo $listing_data_row['companyName']; ?> )</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Edit Businesses</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Company</h3>
                    </div>
                    <form method="post" id="data_form_update_business" action="services/listing/set_business.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="logo">Company Logo</label>
                                        <input class="form-control" type="file" name="logo" id="logo"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="<?php echo $logo; ?>" class="user-image" style="width: 60px;border: 1px solid #ecf0f5;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="companyName">Company Name</label>
                                        <input type="text" class="form-control" name="companyName" id="companyName" value="<?php echo $listing_data_row['companyName']; ?>" placeholder="Company Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="website">Website URL</label>
                                        <input type="text" class="form-control" name="website" id="website" value="<?php echo $listing_data_row['website']; ?>" placeholder="Website URL">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative form-group">
                                        <label for="catId" class="">Category</label>
                                        <select class="form-control" name="catId" id="catId" required="">
                                            <option value="">Choose Category</option>
                                            <?php

                                            function categoryTree($parent_id = 0, $sub_mark = '', $catId) {
                                                $query = dbAction('category', $operation = 4, $from_data = "", "where catId = $parent_id AND catStatus = 1 order by catName asc");
                                                if ($query->num_rows > 0) {
                                                    while ($row = $query->fetch_assoc()) {
                                                        if ($row['id'] == $catId) {
                                                            $select = 'selected';
                                                        } else {
                                                            $select = '';
                                                        }
                                                        echo '<option value="' . $row['id'] . '" ' . $select . '>' . $sub_mark . $row['catName'] . '</option>';
                                                        categoryTree($row['id'], $sub_mark . '-', $catId);
                                                    }
                                                }
                                            }
                                            ?>
                                            <?php categoryTree($parent_id = 0, $sub_mark = '', $catId); ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control"  name="description"><?php echo $listing_data_row['description']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Contact Information</h4>
                                    <hr style="border-color: #ecf0f5;">
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email"  name="email" id="email" value="<?php echo $listing_data_row['email']; ?>" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number">Contact Number</label>
                                        <input class="form-control" type="text"  name="number" id="number" value="<?php echo $listing_data_row['number']; ?>" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input class="form-control" type="text"  name="address" id="address" value="<?php echo $listing_data_row['address']; ?>" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="zipcode">Postal/zip code</label>
                                        <input class="form-control" type="text"  name="zipcode" id="zipcode" value="<?php echo $listing_data_row['zipcode']; ?>" placeholder="postal/zip code">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input class="form-control" type="text"  name="city" id="city" value="<?php echo $listing_data_row['city']; ?>" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="form-control" name="country" >
                                            <option value="">Choose Country</option>
                                            <?php foreach ($countries_data as $row_countries) { ?>
                                                <option value="<?php echo $row_countries['id']; ?>" <?php
                                                if ($row_countries['id'] == $listing_data_row['country']) {
                                                    echo 'selected';
                                                }
                                                ?>>
                                                    <?php echo $row_countries['name']; ?></option>
                                            <?php }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select class="form-control" name="status" >
                                            <option value="1" <?php
                                            if ($status == 1) {
                                                echo 'selected';
                                            };
                                            ?>>Active</option>
                                            <option value="0" <?php
                                            if ($status == 0) {
                                                echo 'selected';
                                            };
                                            ?>>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Meta Information</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="metaTitle">Meta Title</label>
                                        <input class="form-control" type="text"  name="metaTitle" id="metaTitle" value="<?php echo $listing_data_row['metaTitle']; ?>" placeholder="Meta Title">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="metaKeyword">Meta Keyword</label>
                                        <input class="form-control" type="text"  name="metaKeyword" id="metaKeyword" value="<?php echo $listing_data_row['metaKeyword']; ?>" placeholder="Meta Keyword">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="metaDesc">Meta Description</label>
                                        <textarea class="form-control" type="text"  name="metaDesc" id="metaDesc" placeholder="Meta Description"><?php echo $listing_data_row['metaDesc']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_update_business" name="update_business" type="submit" class="btn btn-primary">Update Businesses</button>
                        </div>
                    </form>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Custom Banner and Make Button</h3>
                    </div>
                    <form method="post" id="data_form_update_button" action="services/listing/set_business.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="btnPromo">Promo Text Line</label>
                                        <input type="text" class="form-control" name="btnPromo" id="btnPromo" value="<?php echo $listing_data_row['btnPromo']; ?>" placeholder="Enter your promo text line here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="btnBanner">Banner (1920*585px)</label>
                                        <input class="form-control" type="file" name="btnBanner" id="btnBanner">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="btnTitle">Button Text</label>
                                        <input type="text" class="form-control" name="btnTitle" id="btnTitle" value="<?php echo $listing_data_row['btnTitle']; ?>" placeholder="Enter your promo text line here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Background Color: <span style=" background: <?php echo $listing_data_row['btnColor']; ?>;padding: 2px 30px;"></span></label>
                                        <input id="btnColor" name="btnColor" value="<?php echo $listing_data_row['btnColor']; ?>" type="text" class="form-control my-colorpicker1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Url</label>
                                        <input id="btnUrl" name="btnUrl" value="<?php echo $listing_data_row['btnUrl']; ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="btnStatus">Show Button</label>
                                        <select class="form-control" name="btnStatus" >
                                            <option value="1" <?php
                                            if ($listing_data_row['btnStatus'] == 1) {
                                                echo 'selected';
                                            };
                                            ?>>Yes</option>
                                            <option value="0" <?php
                                            if ($listing_data_row['btnStatus'] == 0) {
                                                echo 'selected';
                                            };
                                            ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button id="submit_btn_update_button" name="update_button" type="submit" class="btn btn-primary">Update Button</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>