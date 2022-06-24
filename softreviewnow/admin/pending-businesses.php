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
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pending Businesses
            <small>Manage Pending Businesses</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pending Businesses</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/listing/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Pending Businesses</h3>
                        </div>
                        <div class="box-body">
                            <table id="example_list" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Submitted By</th>
                                        <th>Location</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="box-footer clearfix">
                            <input type="checkbox" id="selectall" class="selectall custom-control-input">
                            <label class="custom-control-label label label-primary" for="selectall" style="cursor: pointer;">Check All</label>
                            <button type="submit" name="delete_multiple" id="submit_btn_multiple_delete" class="btn btn-sm btn-danger btn-flat">Delete</button>
                            <button type="submit" name="approve_multiple" id="submit_btn_multiple_approve" class="btn btn-sm btn-success btn-flat">Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>


<div class="modal fade" id="addcustom">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Business Listing Preview</h4>
            </div>
            <div class="modal-body">
                <div id="modelDesp">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->