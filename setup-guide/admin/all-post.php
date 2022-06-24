<?php
if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
    $data = dbAction('blogs', $operation = 3, $from_data = "", 'where blogId=' . $id . '');
    if ($data == true) {
        echo "<script>window.location.href='" . constant("BASE_URL") . constant("BASE_URL_ADMIN") . "index.php?page=all-post'</script>";
    }
}
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            All Post
            <small>Manage your website All Post</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">All Post</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/post/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage All Post</h3>
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
                                        <th>Draft</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <?php
                                    $data = dbAction('blogs', $operation = 4, $from_data = "", ' where blogStatus IN (0,1) order by blogCreated desc');
                                    if ($data->num_rows > 0) {
                                        foreach ($data as $row) {
                                            if ($row['blogStatus'] == 1) {
                                                $status = '<span class="label label-success">Active</span>';
                                            } else {
                                                $status = '<span class="label label-danger">Disable</span>';
                                            }

                                            if ($row['blogDraft'] == 0) {
                                                $blogDraft = '<span class="label label-danger">In Draft</span>';
                                            } else {
                                                $blogDraft = '<span class="label label-success">Not In Draft</span>';
                                            }
//                                                              
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="custom-checkbox custom-control" style=" display: inline-block">
                                                        <input type="checkbox" name="check[]" id="<?php echo $row['blogId']; ?>" class="row_check custom-control-input" value="<?php echo $row['blogId']; ?>">
                                                        <label class="custom-control-label" for="<?php echo $row['blogId']; ?>"></label>
                                                    </div>

                                                </td>
                                                <td> <?php echo $row['blogTitle']; ?></td>
                                                <td><?php echo $status; ?></td>
                                                <td><?php echo $blogDraft; ?></td>
                                                <td> <?php echo date('M j Y', strtotime($row['blogCreated'])); ?></td>
                                                <td>
                                                    <a class="action_btn btn-primary btn" href="index.php?page=add-post&id=<?php echo $row['blogId']; ?>"><i class="fa fa-edit" aria-hidden="true" title="Edit"></i></a>
                                                    <a class="action_btn deleteAction btn-danger btn" id="<?php echo $row['blogId']; ?>"><i class="fa fa-remove" aria-hidden="true" title="Delete"></i></a>
                                                    <a href="<?php echo BASE_URL . 'blog/' . $row['blogInfo'] ?>" class="btn-info btn action_btn despModel" target="_blank"><i class="fa fa-eye" aria-hidden="true" title="View"></i></a>
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
                            <button type="submit" name="delete_multiple_post" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
</div>