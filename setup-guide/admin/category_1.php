<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat_data = dbAction("category", $operation = 4, $form_data = "", "id=" . $id);
    if ($cat_data->num_rows > 0) {
        $cat_edit_row = $cat_data->fetch_assoc();
        $catName = $cat_edit_row['catName'];
        $catDesc = $cat_edit_row['catDesc'];
        $catId = $cat_edit_row['catId'];
        $catStatusUpdate = $cat_edit_row['catStatus'];
        $catTitle = $cat_edit_row['catTitle'];
        $catMetaDesc = $cat_edit_row['catMetaDesc'];
        $catMetaKey = $cat_edit_row['catMetaKey'];
    }
} else {
    $catName = '';
    $catDesc = '';
    $catId = '';
    $catStatusUpdate = 1;
    $catTitle = '';
    $catMetaDesc = '';
    $catMetaKey = '';
    $id = '';
}
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat_data = dbAction("category", $operation = 4, $form_data = "", "id=" . $id);
    if ($cat_data->num_rows > 0) {
        $cat_edit_row = $cat_data->fetch_assoc();
        $catName = $cat_edit_row['catName'];
        $catSlug = $cat_edit_row['catSlug'];
        $id = $cat_edit_row['id'];
        $catId = $cat_edit_row['catId'];
        $catStatus = $cat_edit_row['catStatus'];
        $catDesc = $cat_edit_row['catDesc'];
        $catTitle = $cat_edit_row['catTitle'];
        $catMetaDesc = $cat_edit_row['catMetaDesc'];
        $catMetaKey = $cat_edit_row['catMetaKey'];
        $sub_parent_1 = $cat_edit_row['sub_parent_1'];
        $sub_parent_2 = $cat_edit_row['sub_parent_2'];
        $submit_btn = 'update_category';
        $submit_btn_content = 'Update Category';
        if (empty($cat_edit_row['catImage']) || $cat_edit_row['catImage'] == '') {
            $catImage = 'upload/product/no-image.png';
        } else {
            $catImage = $cat_edit_row['catImage'];
        }
    }
} else {
    $catName = '';
    $catSlug = '';
    $catId = '';
    $catStatus = 1;
    $catDesc = '';
    $catTitle = '';
    $catMetaDesc = '';
    $catMetaKey = '';
    $catImage = 'upload/product/no-image.png';
    $submit_btn = 'add_category';
    $submit_btn_content = 'Add New';
    $id = '';
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Categories
            <small>Manage your website business categories</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categories</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/category/delete_category.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Categories</h3>
                        </div>
                        <div class="box-body">
                            <table id="" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    $data = dbAction('category', $operation = 4, $from_data = "", ' where catStatus IN (0,1) AND catId = 0 order by catName asc');
                                    if ($data->num_rows > 0) {
                                        foreach ($data as $row) {
                                            if ($row['catStatus'] == 1) {
                                                $catStatus = '<span class="label label-success">Active</span>';
                                            } else {
                                                $catStatus = '<span class="label label-danger">Disable</span>';
                                            }
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox custom-control" style=" display: inline-block">
                                                        <input type="checkbox" name="check[]" id="<?php echo $row['id']; ?>" class="row_check custom-control-input" value="<?php echo $row['id']; ?>">
                                                        <label class="custom-control-label" for="<?php echo $row['id']; ?>"></label>
                                                    </div>

                                                </td>
                                                <td> <?php echo $row['catName']; ?></td>
                                                <td><?php echo $catStatus; ?></td>
                                                <td><span class=" badge bg-green">Main</span></td>
                                                <td>
                                                    <a class="action_btn btn-primary btn" href="index.php?page=category&id=<?php echo $row['id']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                    <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['id']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                </td>
                                            </tr>

                                            <?php
                                            $data_sub = dbAction('category', $operation = 4, $from_data = "", ' where catId = ' . $row['id'] . '');
                                            if ($data_sub->num_rows > 0) {
                                                foreach ($data_sub as $row_sub) {
                                                    if ($row_sub['catStatus'] == 1) {
                                                        $catStatus_sub = '<span class="label label-success">Active</span>';
                                                    } else {
                                                        $catStatus_sub = '<span class="label label-danger">Disable</span>';
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <div class="custom-checkbox custom-control">
                                                                <input type="checkbox" name="check[]" id="<?php echo $row_sub['id']; ?>" class="row_check custom-control-input" value="<?php echo $row_sub['id']; ?>">
                                                                <label class="custom-control-label" for="<?php echo $row_sub['id']; ?>"></label>
                                                            </div>
                                                        </td>
                                                        <td style="color: green;"> - <?php echo $row_sub['catName']; ?></td>
                                                        <td><?php echo $catStatus_sub; ?></td>
                                                        <td><span class=" badge bg-red">Sub</span></td>
                                                        <td>
                                                            <a class="action_btn btn-primary btn"  href="index.php?page=category&id=<?php echo $row_sub['id']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                            <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row_sub['id']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Manage Categories</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <?php
                            if (isset($_GET['id'])) {
                                $tab_active = '';
                                ?>
                                <li class="active"><a href="#tab_3" data-toggle="tab" aria-expanded="false">Update</a></li>
                                <?php
                            } else {
                                $tab_active = 'active';
                            }
                            ?>
                            <li class="<?php echo $tab_active; ?>"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Main Categories</a></li>
                            <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="true">Sub Categories</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane <?php echo $tab_active; ?>" id="tab_1">
                                <form method="post" id="data_form_category" action="services/category/set_categories.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="catName">Category</label>
                                            <input type="text" class="form-control" name="catName" id="catName" placeholder="Category Name" required>
                                        </div>  
                                        <div class="form-group">
                                            <label for="catTitle" class="">Meta Title</label>
                                            <textarea name="catTitle" id="catTitle" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="catMetaDesc" class="">Meta Description</label>
                                            <textarea name="catMetaDesc" id="catMetaDesc" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="catStatus" class="">Status</label>
                                            <select class="form-control" id="catStatus" name="catStatus">
                                                <option value="1">Active</option>
                                                <option value="0">Disable</option>
                                            </select>  
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" id="submit_btn_category" name="add_category" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tab_2">
                                <form method="post" id="data_form_subcategory" action="services/category/set_categories.php">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="">Parent Category</label>
                                            <select class="form-control" name="catId" required>
                                                <option value="">Select Parent Category</option>
                                                <?php
                                                $data = dbAction('category', $operation = 4, $from_data = "", 'where catStatus = 1 AND catId = 0 order by catName asc');
                                                foreach ($data as $category_row) {
                                                    ?>
                                                    <option value="<?php echo $category_row['id']; ?>">
                                                        <?php echo $category_row['catName']; ?>
                                                    </option>
                                                <?php } ?>
                                            </select>  
                                        </div>
                                        <div class="form-group">
                                            <label>Category </label>
                                            <input type="text" class="form-control" name="catName" placeholder="Category Name" required>
                                        </div>  
                                        <div class="form-group">
                                            <label class="">Meta Title</label>
                                            <textarea name="catTitle" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Meta Description</label>
                                            <textarea name="catMetaDesc" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Status</label>
                                            <select class="form-control" name="catStatus">
                                                <option value="1">Active</option>
                                                <option value="0">Disable</option>
                                            </select>  
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" id="submit_btn_subcategory" name="add_sub_category" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                            if (isset($_GET['id'])) {
                                ?>
                                <div class="tab-pane active" id="tab_3">
                                    <form method="post" id="data_form_catUpdate" action="services/category/set_categories.php">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label class="">Parent Category</label>
                                                <select class="form-control" name="catId" required>
                                                    <option value="0">None</option>
                                                    <?php
                                                    $data = dbAction('category', $operation = 4, $from_data = "", 'where catStatus = 1 AND catId = 0 order by catName asc');
                                                    foreach ($data as $category_row) {
                                                        ?>
                                                        <option value="<?php echo $category_row['id']; ?>" 
                                                        <?php
                                                        if ($category_row['id'] == $catId) {
                                                            echo 'selected';
                                                        }
                                                        ?>>
                                                                    <?php echo $category_row['catName']; ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>  
                                            </div>
                                            <div class="form-group">
                                                <label>Category </label>
                                                <input type="text" class="form-control" name="catName" placeholder="Category Name" value="<?php echo $catName; ?>" required>
                                            </div>  
                                            <div class="form-group">
                                                <label class="">Meta Title</label>
                                                <textarea name="catTitle" class="form-control"><?php echo $catTitle; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Meta Description</label>
                                                <textarea name="catMetaDesc" class="form-control"><?php echo $catMetaDesc; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Status</label>
                                                <select class="form-control" name="catStatus">
                                                    <option value="1" <?php
                                                    if ($catStatusUpdate == 1) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Active</option>
                                                    <option value="0" <?php
                                                    if ($catStatusUpdate == 0) {
                                                        echo 'selected';
                                                    }
                                                    ?>>Disable</option>
                                                </select>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" id="submit_btn_catUpdate" name="update_category" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
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