<?php
if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
    $data = dbAction('tags', $operation = 3, $from_data = "", 'where tagId =' . $id . '');
    if ($data == true) {
        echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "index.php?page=tags'</script>";
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cat_data = dbAction("tags", $operation = 4, $form_data = "", "tagId=" . $id);
    if ($cat_data->num_rows > 0) {
        $cat_edit_row = $cat_data->fetch_assoc();
        $tagTitle = $cat_edit_row['tagTitle'];
        $tagTitleInfo = $cat_edit_row['tagTitleInfo'];
        $tagStatus = $cat_edit_row['tagStatus'];
        $btnContent = 'Update';
        $btnName = 'update_category';
    }
} else {
    $tagTitle = '';
    $tagTitleInfo = '';
    $tagStatus = 1;
    $id = '';
    $btnContent = 'Add';
    $btnName = 'add_category';
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Post Tags
            <small>Manage your website Post Tags</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Post Tags</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/post/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Post Tags</h3>
                        </div>
                        <div class="box-body">
                            <table style="width: 100%;" id="example1" class="table table-hover table-bordered">
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
                                    $data = dbAction('tags', $operation = 4, $from_data = "", ' where tagStatus IN (0,1) order by tagCreated desc');
                                    if ($data->num_rows > 0) {
                                        foreach ($data as $row) {
                                            if ($row['tagStatus'] == 1) {
                                                $status = '<span class="label label-success">Active</span>';
                                            } else {
                                                $status = '<span class="label label-danger">Disable</span>';
                                            }
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox custom-control" style=" display: inline-block">
                                                        <input type="checkbox" name="check[]" id="<?php echo $row['tagId']; ?>" class="row_check custom-control-input" value="<?php echo $row['tagId']; ?>">
                                                        <label class="custom-control-label" for="<?php echo $row['tagId']; ?>"></label>
                                                    </div>

                                                </td>
                                                <td> <?php echo $row['tagTitle']; ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td>
                                                    <a class="action_btn btn-primary btn" href="index.php?page=tags&id=<?php echo $row['tagId']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                    <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['tagId']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple_tags" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Tags</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_3">
                                <form id="data_form_category" action="services/post/set_tags.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="">Tags Title*</label>
                                            <input type="text" class="form-control" id="tagTitle" name="tagTitle" placeholder="Tags Title" value="<?php echo $tagTitle; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="">Status</label>
                                            <select class="form-control" name="tagStatus">
                                                <option value="1" <?php
                                                if ($tagStatus == 1) {
                                                    echo 'selected';
                                                }
                                                ?>>Active</option>
                                                <option value="0" <?php
                                                if ($tagStatus == 0) {
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