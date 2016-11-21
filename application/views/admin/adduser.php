	<!-- ============================================================== -->
	<!-- Start right Content here -->
	<!-- ============================================================== -->
	<div class="content-page">
		<!-- Start content -->
		<div class="content">
			<div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Add Users</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Lucky Star Computer</a></li>
                            <li><a href="#">Users Management</a></li>
                            <li class="active">Add Users</li>
                        </ol>
                    </div>
                </div>

                <!-- Wizard with Validation -->
                
                <div class="row">
					<div class="col-sm-12">
						<div class="card-box">
							<form id="wizard-validation-form" action="<?php echo 
                            site_url('admin/user/savedata');
                            ?>" method="post">
                                <div>
                                    <h3>Step 1</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="userName2">Username *</label>
                                            <div class="col-lg-10">
                                                <input id="userName2" name="username" type="text" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="email2">Email Address *</label>
                                            <div class="col-lg-10">
                                                <input id="email2" name="email" type="text" class="required email form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="password2"> Password *</label>
                                            <div class="col-lg-10">
                                                <input id="password2" name="password" type="password" class="required form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="confirm2">ConfirmPassword*</label>
                                            <div class="col-lg-10">
                                                <input id="confirm2" name="confirmPassword" type="password" class="required form-control" onchange="checkPasswordMatch()">
                                                <br />
                                                <div id="divCheckPasswordMatch"></div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                        </div>
                                    </section>
                                    <h3>Step 2</h3>
                                    <section>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label" for="name2"> First name *</label>
                                            <div class="col-lg-10">
                                                <input id="name2" name="firstname" type="text" class="required form-control">
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="surname2"> Last name *</label>
                                            <div class="col-lg-10">
                                                <input id="surname2" name="lastname" type="text" class="required form-control">

                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="gender">Gender </label>
                                            <div class="col-lg-10">
                                                <select class="selectpicker" data-style="btn-white" name="gender">
													<option>Male</option>
													<option>Female</option>
												</select>
                                                
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="dob">Date of Birth </label>
                                            <div class="col-lg-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="datepicker" name="dob">
                                                    <span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="address2">Address </label>
                                            <div class="col-lg-10">
                                                <input id="address2" name="address" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="phone">Phone </label>
                                            <div class="col-lg-10">
                                                <input id="phone" name="phone" type="number" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="photo">Photo </label>
                                            <div class="col-lg-10">
                                                <input type="file" class="filestyle" data-input="false" name="photo">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="role">Role </label>
                                            <div class="col-lg-10">
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
                                            <label class="col-lg-2 control-label " for="active">Active </label>
                                            <div class="col-lg-10">
                                                <div class="radio radio-inline radio-custom">
                                                    <input type="radio" name="active" id="radio1" value="1" checked>
                                                    <label for="radio1">
                                                        Enable
                                                    </label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" name="active" id="radio2" value="0">
                                                    <label for="radio2">
                                                        Disable
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-2 control-label " for="comment">Personal Info</label>
                                            <div class="col-lg-10">
                                                <input id="comment" name="comment" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group clearfix">
                                            <label class="col-lg-12 control-label ">(*) Mandatory</label>
                                        </div>

                                    </section>
                                    
                                    <script>
                                        // output some informations to step3
                                        $(document).ready(function(){
                                            $("input").change(function(){
                                            $("#usernameOutput").text($("input[name='username']").val());
                                            $("#firstnameOutput").text($("input[name='firstname']").val());
                                            $("#lastnameOutput").text($("input[name='lastname']").val());
                                            $("#emailOutput").text($("input[name='email']").val());
                                            $("#addressOutput").text($("input[name='address']").val());
                                            $("#phoneOutput").text($("input[name='phone']").val());
                                            });
                                        });
                                    </script>

                                    <h3>Step 3</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <ul class="list-unstyled w-list"> 
                                                    <li><b>User Name :</b> <span id="usernameOutput"> </li>
                                                    <li><b>First Name :</b> <span id="firstnameOutput"> </li> 
                                                    <li><b>Last Name :</b> <span id="lastnameOutput"> </li>
                                                    <li><b>Email:</b> <span id="emailOutput"> </li>
                                                    <li><b>Address:</b> <span id="addressOutput"> </li>
                                                    <li><b>Phone :</b> <span id="phoneOutput"> </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                    <h3>Step Final</h3>
                                    <section>
                                        <div class="form-group clearfix">
                                            <div class="col-lg-12">
                                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                                <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                            </div>
                                        </div>

                                    </section>
                                </div>
                            </form>
						</div>
					</div>
				</div>
                <!-- End row -->

            </div> <!-- container -->
                       
        </div> <!-- content -->
    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

<script type="text/javascript">

    // check condition of password
	function checkPasswordMatch() {
		var password = $("#password2").val();
		var confirmPassword = $("#confirm2").val();
		if (password != confirmPassword) {
			$("#divCheckPasswordMatch").html("<font color='red' size='2'>Passwords do not match!</font>");
			$("#confirm2").val("");
		} else
			$("#divCheckPasswordMatch").html("");
	}

</script>

