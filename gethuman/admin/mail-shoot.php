<script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Mail Shoot
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Mail Shoot</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <form action="mailer/mail-shoot.php" method="post" id="data_form_mail_shoot">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Send Mail To Users</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name" class="control-label">Upload csv file</label>
                            <input class="form-control"  type="file" name="file" id="file" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="subject" class="control-label">Subject</label>
                            <input class="form-control"  type="text" name="subject" id="subject" value="Action Required" placeholder="Mail Subject" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="smtpemail" class="control-label">SMTP Mail</label>
                            <input class="form-control"  type="text" name="smtpemail" id="smtpemail" value="noreplyzonefirewall@gmail.com" placeholder="SMTP Mail Id" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="smtppass" class="control-label">SMTP Mail Password</label>
                            <input class="form-control"  type="text" name="smtppass" id="smtppass" value="Zonefire732@" placeholder="SMTP Mail Password" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="mailtitle" class="control-label">From Mail Title only (only before @ symbol)</label>
                            <input class="form-control"  type="text" name="mailtitle" id="mailtitle" value="info" placeholder="info" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="message" class="control-label">Mailer Html Code page here</label>
                            <textarea class="form-control" id="message" name="message"></textarea>
<!--                            <script>
                                CKEDITOR.replace('message');
                            </script>-->
                        </div>
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" id="submit_mail_shoot" name="submit_mail_shoot" class="btn btn-primary">Send Mail</button>
                </div>
                <!-- /.box-footer-->
            </div>
        </form>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>