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
        $catStatus_edit = $cat_edit_row['catStatus'];
        $catTitle = $cat_edit_row['catTitle'];
        $catMetaDesc = $cat_edit_row['catMetaDesc'];
        $catMetaKey = $cat_edit_row['catMetaKey'];
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
    $catStatus_edit = 1;
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
                            <h3 class="box-title">All Categories</h3>
                        </div>
                        <div class="box-body">
                            <table id="" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php

                                    function categoryTreeGet($parent_id = 0, $sub_mark = '') {
                                        $query = dbAction('category', $operation = 4, $from_data = "", " where catId = $parent_id order by catName asc");
                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
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

                                                    <td> <?php echo $sub_mark . $row['catName']; ?></td>
                                                    <td><?php echo $catStatus; ?></td>
                                                    <td>
                                                        <a class="action_btn btn-primary btn" href="index.php?page=category&id=<?php echo $row['id']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                        <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['id']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                        <a href="<?php echo BASE_URL . 'category/' . $row['catSlug']; ?>" class="btn-info btn action_btn despModel" target="_blank"><i class="fa fa-eye" aria-hidden="true" title="View"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                categoryTreeGet($row['id'], $sub_mark . '-');
                                            }
                                        }
                                    }
                                    ?>
                                    <?php categoryTreeGet(); ?>
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
                        <div class="tab-content">
                            <div class="box-body">
                                <form method="post" id="data_form_category" action="services/category/set_categories_2.php">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                    <div class="form-group">
                                        <label for="catName" class="">Title *</label>
                                        <input value="<?php echo $catName; ?>" name="catName" id="catName" placeholder="Category Name" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input placeholder="Category Slug" id="catSlug" name="catSlug" class="form-control" value="<?php echo $catSlug; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="catId" class="">Parent Category</label>
                                        <select class="form-control" name="catId" id="catId">
                                            <option value="0">Parent</option>
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
                                    <div class="form-group">
                                        <label for="catTitle">Meta Title</label>
                                        <textarea name="catTitle" id="catTitle" class="form-control"><?php echo $catTitle; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="catMetaDesc" class="">Meta Description</label>
                                        <textarea name="catMetaDesc" id="catMetaDesc" class="form-control"><?php echo $catMetaDesc; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="catStatus" class="">Status</label>
                                        <select class="form-control" id="catStatus" name="catStatus">
                                            <option value="1" <?php
                                            if ($catStatus_edit == 1) {
                                                echo 'selected';
                                            }
                                            ?>>Active</option>
                                            <option value="0" <?php
                                            if ($catStatus_edit == 0) {
                                                echo 'selected';
                                            }
                                            ?>>Disable</option>
                                        </select>     
                                    </div>
                                    <button type="submit" name="<?php echo $submit_btn; ?>" id="submit_btn_category" class="mt-2 btn btn-primary"><?php echo $submit_btn_content; ?>  </button>
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