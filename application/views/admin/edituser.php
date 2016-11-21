<!-- update user information form -->
    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog"> 
            <div class="modal-content"> 
                <div class="modal-header"> 
                    <a href="#custom-modal" class="close" data-dismiss="modal" aria-hidden="true" data-animation="fadein" data-plugin="custommodal" 
                    data-overlaySpeed="200" data-overlayColor="#36404a">Change Password</a>
                    <h4 class="modal-title">Update User Information</h4> 
                </div> 
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
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Save Changes</button>
                    </div>
                </form> 
            </div> 
        </div>
    </div><!-- /.modal -->