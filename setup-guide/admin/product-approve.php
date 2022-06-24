<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Active Product
            <small>Manage Active Product</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Active Product</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <form method="post" id="data_form_delete" action="services/product/delete_multiple.php">
                        <div class="box-header with-border">
                            <h3 class="box-title">Manage Active Product</h3>
                        </div>
                        <div class="box-body">
                            <table id="example_list" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Company</th>
                                        <th>Product Name</th>
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
                            <!-- <button type="submit" name="disapprove_multiple" id="submit_btn_multiple_disapprove" class="btn btn-sm btn-success btn-flat">Disapprove</button>
                            <button type="submit" name="feature_multiple" id="submit_btn_multiple_feature" class="btn btn-sm btn-warning btn-flat">Feature</button> -->
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
                <h4 class="modal-title">Product Details</h4>
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