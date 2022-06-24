<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $industry_data = dbAction("industry", $operation = 4, $form_data = "", "id=" . $id);
    if ($industry_data->num_rows > 0) {
        $industry_edit_row = $industry_data->fetch_assoc();
        $industryName = $industry_edit_row['industryName'];
        $industrySlug = $industry_edit_row['industrySlug'];
        $id = $industry_edit_row['id'];
        $industryId = $industry_edit_row['industryId'];
        $industryStatus = $industry_edit_row['industryStatus'];
        $industryStatus_edit = $industry_edit_row['industryStatus'];
        $submit_btn = 'update_category';
        $submit_btn_content = 'Update Industry';
    }
} else {
    $industryName = '';
    $industrySlug = '';
    $industryId = '';
    $industryStatus = 1;
    $industryStatus_edit = 1;
    $submit_btn = 'add_category';
    $submit_btn_content = 'Add New';
    $id = '';
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            industry
            <small>Manage your website business Industry</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Industry</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/industry/delete_industry.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">All industry</h3>
                        </div>
                        <div class="box-body">
                            <table id="" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Industry</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php

                                    function industryegoryTreeGet($parent_id = 0, $sub_mark = '') {
                                        $query = dbAction('industry', $operation = 4, $from_data = "", " where industryId = $parent_id order by industryName asc");
                                        if ($query->num_rows > 0) {
                                            while ($row = $query->fetch_assoc()) {
                                                if ($row['industryStatus'] == 1) {
                                                    $industryStatus = '<span class="label label-success">Active</span>';
                                                } else {
                                                    $industryStatus = '<span class="label label-danger">Disable</span>';
                                                }
                                                ?>
                                                <tr>
                                                    <td>
                                                        <div class="custom-checkbox custom-control" style=" display: inline-block">
                                                            <input type="checkbox" name="check[]" id="<?php echo $row['id']; ?>" class="row_check custom-control-input" value="<?php echo $row['id']; ?>">
                                                            <label class="custom-control-label" for="<?php echo $row['id']; ?>"></label>
                                                        </div>
                                                    </td>

                                                    <td> <?php echo $sub_mark . $row['industryName']; ?></td>
                                                    <td><?php echo $industryStatus; ?></td>
                                                    <td>
                                                        <a class="action_btn btn-primary btn" href="index.php?page=industry&id=<?php echo $row['id']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                        <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['id']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                        <!-- <a href="<?php echo BASE_URL . 'industry/' . $row['industrySlug']; ?>" class="btn-info btn action_btn despModel" target="_blank"><i class="fa fa-eye" aria-hidden="true" title="View"></i></a> -->
                                                    </td>
                                                </tr>
                                                <?php
                                                industryegoryTreeGet($row['id'], $sub_mark . '-');
                                            }
                                        }
                                    }
                                    ?>
                                    <?php industryegoryTreeGet(); ?>
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
                        <h3 class="box-title">Manage industry</h3>
                    </div>
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="box-body">
                                <form method="post" id="data_form_category" action="services/industry/set_industry_2.php">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                    <div class="form-group">
                                        <label for="industryName" class="">Title *</label>
                                        <input value="<?php echo $industryName; ?>" name="industryName" id="industryName" placeholder="Industry Name" type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input placeholder="Industry Slug" id="industrySlug" name="industrySlug" class="form-control" value="<?php echo $industrySlug; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="industryId" class="">Parent Industry</label>
                                        <select class="form-control" name="industryId" id="industryId">
                                            <option value="0">Parent</option>
                                            <?php

                                            function industryegoryTree($parent_id = 0, $sub_mark = '', $industryId) {
                                                $query = dbAction('industry', $operation = 4, $from_data = "", "where industryId = $parent_id AND industryStatus = 1 order by industryName asc");
                                                if ($query->num_rows > 0) {
                                                    while ($row = $query->fetch_assoc()) {
                                                        if ($row['id'] == $industryId) {
                                                            $select = 'selected';
                                                        } else {
                                                            $select = '';
                                                        }
                                                        echo '<option value="' . $row['id'] . '" ' . $select . '>' . $sub_mark . $row['industryName'] . '</option>';
                                                        industryegoryTree($row['id'], $sub_mark . '-', $industryId);
                                                    }
                                                }
                                            }
                                            ?>
                                            <?php industryegoryTree($parent_id = 0, $sub_mark = '', $industryId); ?>
                                        </select>     
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="industryStatus" class="">Status</label>
                                        <select class="form-control" id="industryStatus" name="industryStatus">
                                            <option value="1" <?php
                                            if ($industryStatus_edit == 1) {
                                                echo 'selected';
                                            }
                                            ?>>Active</option>
                                            <option value="0" <?php
                                            if ($industryStatus_edit == 0) {
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