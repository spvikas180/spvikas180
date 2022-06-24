<?php
$userId = $_SESSION['userId'];
?>
<form method="post" id="data_form_update_business" action="../webservices/set_business.php">
    <input type="hidden" name="id" value="<?php echo $userId; ?>"/>
    <div class="row">
        <div class="col-md-12">
            <h4>Add Business</h4>
            <hr>
        </div>
        <div class="col-md-6">
            <label for="logo">Company Logo (150px*150px)</label>
            <input type="file" name="logo" id="logo"/>
        </div>
        <div class="col-md-6">
            <img src="" class="user-image" style="width: 90px;border: 1px solid #ecf0f5;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="companyName">Company Name</label>
            <input type="text"  name="companyName" id="companyName" value="" placeholder="Company Name" required>
        </div>
        <div class="col-md-6">
            <label for="website">Website URL</label>
            <input type="text"  name="website" id="website" value="" placeholder="Website URL" required>
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
            <textarea name="description"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Contact Information</h4>
            <hr>
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email"  name="email" id="email" value="" placeholder="Email">
        </div>
        <div class="col-md-6">
            <label for="number">Contact Number</label>
            <input type="text"  name="number" id="number" value="" placeholder="Contact Number">
        </div>
        <div class="col-md-6">
            <label for="address">Address</label>
            <input type="text"  name="address" id="address" value="" placeholder="Address">
        </div>

        <div class="col-md-6">
            <label for="zipcode">Postal/zip code</label>
            <input type="text"  name="zipcode" id="zipcode" value="" placeholder="postal/zip code">
        </div>
        <div class="col-md-6">
            <label for="city">City</label>
            <input type="text"  name="city" id="city" value="" placeholder="City">
        </div>
        <div class="col-md-6">
            <label for="country">Country</label>
            <select name="country" >
                <option value="">Choose Country</option>
                <?php foreach ($countries_data as $row_countries) { ?>
                    <option value="<?php echo $row_countries['id']; ?>">
                        <?php echo $row_countries['name']; ?></option>
                <?php }
                ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button id="submit_btn_update_business" name="add_business" type="submit" class="btn btn-primary">Add Business</button>
        </div>
    </div>
</form>
