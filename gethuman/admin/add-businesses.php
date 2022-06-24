<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Add Business
            <small>Manage Add Business</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Add Business</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form method="post" id="data_form_add_business" action="services/listing/set_business.php">
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <h4>Add Business</h4>
                                                <hr>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="logo">Company Logo (150px*150px)</label>
                                                <input class="form-control" type="file" name="logo" id="logo"/>
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="companyName">Company Name</label>
                                                <input class="form-control" type="text"  name="companyName" id="companyName" value="" placeholder="Company Name" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="website">Website URL</label>
                                                <input class="form-control" type="text"  name="website" id="website" value="" placeholder="Website URL" required>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <div class="position-relative ">
                                                    <label class="control-label" for="catId">Category</label>
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
                                            <div class="col-md-12 form-group">
                                                <label class="control-label" for="description">Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <h4>Contact Information</h4>
                                                <hr>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="email">Email</label>
                                                <input class="form-control" type="email"  name="email" id="email" value="" placeholder="Email">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="number">Contact Number</label>
                                                <input class="form-control" type="text"  name="number" id="number" value="" placeholder="Contact Number">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="address">Address</label>
                                                <input class="form-control" type="text"  name="address" id="address" value="" placeholder="Address">
                                            </div>

                                            <div class="col-md-6 form-group ">
                                                <label class="control-label" for="zipcode">Postal/zip code</label>
                                                <input class="form-control" type="text"  name="zipcode" id="zipcode" value="" placeholder="postal/zip code">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="city">City</label>
                                                <input class="form-control" type="text"  name="city" id="city" value="" placeholder="City">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label" for="country">Country</label>
                                                <select class="form-control" name="country" >
                                                    <option value="">Choose Country</option>
                                                    <?php
                                                    $countries_data = dbAction("countries", $operation = 4, $form_data = "");
                                                    foreach ($countries_data as $row_countries) {
                                                        ?>
                                                        <option value="<?php echo $row_countries['id']; ?>">
                                                            <?php echo $row_countries['name']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="status">Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <button id="submit_btn_add_business" name="add_business" type="submit" class="btn btn-primary">Add Business</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="loaderOverlay" class="overlay" style=" display: none;">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
