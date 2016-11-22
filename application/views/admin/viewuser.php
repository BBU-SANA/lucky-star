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
                                            <a href="<?php echo site_url('admin/user/edit/'.$row->uid); ?>"><i class="md md-edit" class="table-action-btn" data-toggle="modal" data-target="#con-close-modal"></i></a>
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
