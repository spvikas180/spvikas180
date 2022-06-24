<?php
$userId = $_SESSION['userId'];

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $listing_data = dbAction("listing", $operation = 4, $form_data = "", "listId= $id AND userId = $userId");
    $listing_data_row = $listing_data->fetch_assoc();
    $catId = $listing_data_row['catId'];
    $subCatId = $listing_data_row['subCatId'];


    if ($listing_data_row['logo'] == '') {
        $logo = BASE_URL . 'upload/business-logo/not-found.png';
    } else {
        $logo = '' . BASE_URL . $listing_data_row['logo'] . '';
    }
}
?>
<h3><a href="index?page=my-company"><i class="glyphicon glyphicon-arrow-left"></i> <?php echo $listing_data_row['companyName']; ?></a></h3>
<hr>
<form method="post" id="data_form_update_business" action="../webservices/set_business.php">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <div class="row">
        <div class="col-md-12">
            <h4>About Company</h4>
            <hr>
        </div>
        <div class="col-md-6">
            <label for="logo">Company Logo (150px*150px)</label>
            <input type="file" name="logo" id="logo"/>
        </div>
        <div class="col-md-6">
            <img src="<?php echo $logo; ?>" class="user-image" style="width: 90px;border: 1px solid #ecf0f5;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="companyName">Company Name</label>
            <input type="text"  name="companyName" id="companyName" value="<?php echo $listing_data_row['companyName']; ?>" placeholder="Company Name" required>
        </div>
        <div class="col-md-6">
            <label for="website">Website URL</label>
            <input type="text"  name="website" id="website" value="<?php echo $listing_data_row['website']; ?>" placeholder="Website URL" required>
        </div>
        <div class="col-md-6">
            <div class="position-relative ">
                <label for="catId" class="">Category</label>
                <select name="catId" id="catId" required="">
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
            <label for="description">Description</label>
            <textarea name="description" style=" height: 100px;"><?php echo $listing_data_row['description']; ?></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Contact Information</h4>
            <hr>
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email"  name="email" id="email" value="<?php echo $listing_data_row['email']; ?>" placeholder="Email">
        </div>
        <div class="col-md-6">
            <label for="number">Contact Number</label>
            <input type="text"  name="number" id="number" value="<?php echo $listing_data_row['number']; ?>" placeholder="Contact Number">
        </div>
        <div class="col-md-6">
            <label for="address">Address</label>
            <input type="text"  name="address" id="address" value="<?php echo $listing_data_row['address']; ?>" placeholder="Address">
        </div>

        <div class="col-md-6">
            <label for="zipcode">Postal/zip code</label>
            <input type="text"  name="zipcode" id="zipcode" value="<?php echo $listing_data_row['zipcode']; ?>" placeholder="postal/zip code">
        </div>
        <div class="col-md-6">
            <label for="city">City</label>
            <input type="text"  name="city" id="city" value="<?php echo $listing_data_row['city']; ?>" placeholder="City">
        </div>
        <div class="col-md-6">
            <label for="country">Country</label>
            <select name="country" >
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
    <div class="row">
        <div class="col-md-6">
            <button id="submit_btn_update_business" name="update_business" type="submit" class="btn btn-primary">Update Businesses</button>
        </div>
    </div>
</form>
