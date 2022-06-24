<?php
if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
    $data = dbAction('post_cat', $operation = 3, $from_data = "", 'where catId=' . $id . '');
    if ($data == true) {
        echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "index.php?page=post-category'</script>";
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat_data = dbAction("post_cat", $operation = 4, $form_data = "", "catId=" . $id);
    if ($cat_data->num_rows > 0) {
        $cat_edit_row = $cat_data->fetch_assoc();
        $catName = $cat_edit_row['catName'];
        $catIdMain = $cat_edit_row['catIdMain'];
        $catSlug = $cat_edit_row['catSlug'];
        $catStatus = $cat_edit_row['catStatus'];
        $catMetaTitle = $cat_edit_row['catMetaTitle'];
        $catMetaKey = $cat_edit_row['catMetaKey'];
        $catMetaDesp = $cat_edit_row['catMetaDesp'];
        $btnContent = 'Update';
        $btnName = 'update_category';
    }
} else {
    $catName = '';
    $catInfo = '';
    $catStatus = 1;
    $catMetaTitle = '';
    $catMetaKey = '';
    $catMetaDesp = '';
    $id = '';
    $catIdMain = '';
    $btnContent = 'Add';
    $btnName = 'add_category';
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Post Categories
            <small>Manage your website Post Categories</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post Categories</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/post/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Post Categories</h3>
                        </div>
                        <div class="box-body">
                            <table id="" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th style="width: 40px">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" id="selectall" class="selectall custom-control-input">
                                                <label class="custom-control-label" for="selectall"></label>
                                            </div>
                                        </th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php

                                    function categoryTreeGet($parent_id = 0, $sub_mark = '') {
                                        $query = dbAction('post_cat', $operation = 4, $from_data = "", " where catIdMain = $parent_id order by catName asc");
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
                                                            <input type="checkbox" name="check[]" id="<?php echo $row['catId']; ?>" class="row_check custom-control-input" value="<?php echo $row['catId']; ?>">
                                                            <label class="custom-control-label" for="<?php echo $row['catId']; ?>"></label>
                                                        </div>
                                                    </td>

                                                    <td> <?php echo $sub_mark . $row['catName']; ?></td>
                                                    <td><?php echo $catStatus; ?></td>
                                                    <td>
                                                        <a class="action_btn btn-primary btn" href="index.php?page=post-category&id=<?php echo $row['catId']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                        <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['catId']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                    </td>
                                                </tr>
                                                <?php
                                                categoryTreeGet($row['catId'], $sub_mark . '-');
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
                        <h3 class="box-title">Add Category</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form id="data_form_category" action="services/post/set_category.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="">Category Name*</label>
                                            <input type="text" class="form-control" id="catName" name="catName" placeholder="Categories name" value="<?php echo $catName; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="catIdMain" class="">Parent Category</label>
                                            <select class="form-control" name="catIdMain" id="catIdMain">
                                                <option value="0">Parent</option>
                                                <?php

                                                function categoryTree($parent_id = 0, $sub_mark = '', $catIdMain) {
                                                    $query = dbAction('post_cat', $operation = 4, $from_data = "", "where catIdMain = $parent_id AND catStatus = 1 order by catName asc");
                                                    if ($query->num_rows > 0) {
                                                        while ($row = $query->fetch_assoc()) {
                                                            if ($row['catId'] == $catIdMain) {
                                                                $select = 'selected';
                                                            } else {
                                                                $select = '';
                                                            }
                                                            echo '<option value="' . $row['catId'] . '" ' . $select . '>' . $sub_mark . $row['catName'] . '</option>';
                                                            categoryTree($row['catId'], $sub_mark . '-', $catIdMain);
                                                        }
                                                    }
                                                }
                                                ?>
                                                <?php categoryTree($parent_id = 0, $sub_mark = '', $catIdMain); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="catMetaTitle">Meta Title</label>
                                            <input type="text" placeholder="Meta Title" id="catMetaTitle" name="catMetaTitle" class="form-control" value="<?php echo $catMetaTitle; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="catMetaKey">Meta Keyword</label>
                                            <input type="text" placeholder="Meta Keyword" id="catMetaKey" name="catMetaKey" class="form-control" value="<?php echo $catMetaKey; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="catMetaDesp" class="control-label">Meta Description</label>
                                            <textarea class="form-control" id="catMetaDesp" name="catMetaDesp"><?php echo $catMetaDesp; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Status</label>
                                            <select class="form-control" name="catStatus">
                                                <option value="1" <?php
                                                if ($catStatus == 1) {
                                                    echo 'selected';
                                                }
                                                ?>>Active</option>
                                                <option value="0" <?php
                                                if ($catStatus == 0) {
                                                    echo 'selected';
                                                }
                                                ?>>Disable</option>
                                            </select>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" name="<?php echo $btnName; ?>" id="submit_btn_category"><?php echo $btnContent; ?></button>                                        
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