<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Update User</h4>
                <ol class="breadcrumb">
                    <li><a href="#">Lucky Star Computer</a></li>
                    <li><a href="#">Users Management</a></li>
                    <li class="active">Users Edit</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>User Information</b></h4>  
                    <form role="form" method="post" action="<?php echo site_url('settings/user/updateUser'); ?>" data-parsley-validate novalidate>
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">User Name *</label> 
                                        <input type="text" class="form-control" id="field-3" parsley-trigger="change" value="<?php echo $r->username; ?>" required> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Email *</label> 
                                        <input type="email" class="form-control" id="field-3" parsley-trigger="change" required> 
                                    </div> 
                                </div> 
                            </div>  
                            <div class="row"> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-4" class="control-label">First Name *</label> 
                                        <input type="text" class="form-control" id="field-4" parsley-trigger="change" required> 
                                    </div> 
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-5" class="control-label">Last Name *</label> 
                                        <input type="text" class="form-control" id="field-5" parsley-trigger="change" required> 
                                    </div> 
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-6" class="control-label">Gender</label> 
                                        <select class="selectpicker form-control" data-style="btn-white" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Date of Birth</label> 
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="datepicker" name="dob">
                                            <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Address</label> 
                                        <input type="text" class="form-control" id="field-3"> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Phone</label> 
                                        <input type="text" class="form-control" id="field-3"> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-3" class="control-label">Personal Info</label> 
                                        <input type="text" class="form-control" id="field-3"> 
                                    </div> 
                                </div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="form-group clearfix">
                                        <label class="col-lg-3 control-label " for="role">Role </label>
                                        <div class="col-lg-9">
                                            <div class="radio radio-custom radio-inline">
                                                <input type="radio" id="inlineRadio1" value="admin" name="role" checked>
                                                <label for="inlineRadio1"> Admin </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" id="inlineRadio2" value="buyer" name="role">
                                                <label for="inlineRadio2"> Buyer </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-lg-3 control-label " for="active">Active </label>
                                        <div class="col-lg-9">
                                            <div class="radio radio-inline radio-custom">
                                                <input type="radio" name="active" id="radio1" value="1" checked>
                                                <label for="radio1">Enable</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" name="active" id="radio2" value="0">
                                                <label for="radio2">Disable</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Photo</label> 
                                        <input type="file" class="filestyle" data-buttonname="btn-white">
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Save Change
                            </button>
                            <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>change password</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        <!--Your awesome text goes here.-->
                    </p>
                    
                    <form class="form-horizontal" role="form" data-parsley-validate novalidate>
                        <div class="form-group">
                            <label for="hori-pass1" class="col-sm-4 control-label">Current Password*</label>
                            <div class="col-sm-7">
                                <input id="pass" type="password" placeholder="Password" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hori-pass1" class="col-sm-4 control-label">New Password*</label>
                            <div class="col-sm-7">
                                <input id="hori-pass1" type="password" placeholder="Password" required class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="hori-pass2"class="col-sm-4 control-label">Confirm Password *</label>
                            <div class="col-sm-7">
                                <input data-parsley-equalto="#hori-pass1" type="password" required placeholder="Password" class="form-control" id="hori-pass2">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Save Change
                                </button>
                                <button type="reset" class="btn btn-default waves-effect waves-light m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <footer class="footer text-right">
        © 2016. All rights reserved.
    </footer>
</div>

