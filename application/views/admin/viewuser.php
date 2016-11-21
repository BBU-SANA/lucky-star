<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title">Users List</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Lucky Star Computer</a></li>
                        <li><a href="#">Users Management</a></li>
                        <li class="active">Users List</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-sm-8">
                                <form role="form">
                                    <div class="form-group contact-search m-b-30">
                                        <input type="text" id="search" class="form-control" placeholder="Search...">
                                        <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                    </div>
                                    <!-- form-group -->
                                </form>
                            </div>
                            <div class="col-sm-4">
                                <a href="<?php echo site_url('admin/user/adduser');?>" class="btn btn-default btn-md waves-effect waves-light m-b-30"><i class="md md-add"></i> Add User</a>
                            </div>
                        </div>
<?php echo $r->username; ?>
                        <div class="table-responsive">
                            <table class="table table-hover mails m-0 table table-actions-bar">
                                <thead>
                                    <tr>
                                        <th style="min-width: 95px;">
                                            <div class="checkbox checkbox-primary checkbox-single m-r-15">
                                                <input id="action-checkbox" type="checkbox">
                                                <label for="action-checkbox"></label>
                                            </div>
                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-white btn-xs dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="caret"></i></button>
                                                <!--<ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>-->
                                            </div>
                                        </th>
                                        <th>Username</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th style="min-width: 90px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        foreach($this->user->getUsers() as $row)
                                        {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="checkbox checkbox-primary m-r-15">
                                                <input id="checkbox1" type="checkbox">
                                                <label for="checkbox1"></label>
                                            </div>

                                            <img src="<?=base_url();?>public/assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm"
                                            />
                                        </td>
                                        <td><?php echo $row->username ?></td>
                                        <td><?php echo $row->firstname ?></td>
                                        <td><?php echo $row->lastname ?></td>
                                        <td><?php echo $row->email ?></td>
                                        <td><?php echo $row->role ?></td>
                                        <td><?php if($row->active=='1')echo "Enable"; else echo "Disable"; ?></td>
                                        <td>
                                            <a href=""><i class="md md-edit" class="table-action-btn" data-toggle="modal" data-target="#con-close-modal"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>
                                    <?php 
                                        } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- end col -->
            </div>
        </div>
        <!-- container -->


    </div>
    <!-- content -->

    <footer class="footer text-right">
        © 2016. All rights reserved.
    </footer>

</div>

<!-- ============================================================== -->
<!-- End Right content here -->

    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                    <h4 class="modal-title">Update User Information</h4> 
                </div>
                <form role="form" method="post" action="<?php echo site_url('admin/user/edit'); ?>" data-parsley-validate novalidate>
                    <div class="modal-body">
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <div class="form-group"> 
                                    <label for="field-3" class="control-label">User Name *</label> 
                                    <input type="text" class="form-control" id="field-3" parsley-trigger="change" value="<?php echo $row->username; ?>" required> 
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
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Save Changes</button>
                    </div>
                </form> 
            </div> 
        </div>
    </div><!-- /.modal -->


    <!-- Modal change password form -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Change Password</h4>
        <form action="#" data-parsley-validate novalidate>
            <div class="custom-modal-text">
                <div class="form-group">
                    <label for="userName">Current Password*</label>
                    <input type="password" name="nick" parsley-trigger="change" placeholder="Password" class="required form-control" id="userName">
                </div>
                <div class="form-group">
                    <label for="pass1">New Password*</label>
                    <input id="pass1" type="password" placeholder="Password" class="required form-control">
                </div>
                <div class="form-group">
                    <label for="passWord2">Confirm Password *</label>
                    <input data-parsley-equalto="#pass1" type="password" placeholder="Password" class="required form-control" id="passWord2">
                </div>
            </div>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal" onclick="Custombox.close();">Close</button> 
                <button class="btn btn-primary waves-effect waves-light" type="submit">Save Changes</button>
            </div>
        </form>
    </div>