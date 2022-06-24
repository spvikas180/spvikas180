<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Bulk Import
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Bulk Import</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form method="POST" id="sb_csv_form" enctype="multipart/form-data" action="services/listing/bluk_upload.php">
                    <input type="hidden" name="userId" value="<?php echo $id; ?>">
                    <p id="result"></p>
                    <pre>CSV File Format:
url, business name, latitude, longitude, location, category, number, email, description
                    </pre>
                    <input type="file" name="file" id="file" class="form-control" required="required">
                    <br>
                    <button type="submit" name="sb_csv" id="sb_csv"class="btn btn-primary">Start Bulk Import</button>
                </form>
            </div>
        </div>
    </section>
</div>