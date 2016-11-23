<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Add Suppliers</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Lucky Star Computer</a></li>
                    <li><a href="#">Suppliers Management</a></li>
                    <li class="active">Add Supplier</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Supplier Informations</b></h4>
                <p class="text-muted font-13 m-b-30">
                    <!--Your awesome text goes here.-->
                </p>
                
                <form class="form-horizontal" role="form" data-parsley-validate novalidate>
                    <div class="form-group">
                        <label for="hori-pass1" class="col-sm-4 control-label">Supplier Name*</label>
                        <div class="col-sm-5">
                            <input type="text" name="nick" parsley-trigger="change" required class="form-control" id="userName">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hori-pass1" class="col-sm-4 control-label">Email Address</label>
                        <div class="col-sm-5">
                            <input type="email" name="email" parsley-trigger="change" class="form-control" id="emailAddress">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hori-pass1" class="col-sm-4 control-label">Contact Number</label>
                        <div class="col-sm-5">
                            <input id="hori-pass1" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hori-pass2"class="col-sm-4 control-label">Confirm Password *</label>
                        <div class="col-sm-5">
                            <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password" class="form-control" id="hori-pass2">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Save Change
                            </button>
                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5" onclick="javascript:location.href='<?php echo site_url('admin/user/viewuser'); ?>'">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <footer class="footer text-right">
        © 2016. All rights reserved.
    </footer>
</div>



