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
                        <table id="demo-foo-addrow" class="table table-striped m-b-0 table-hover toggle-circle" data-page-size="10">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Username</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 text-xs-center">
                                        <div class="form-group">
                                            <button class="btn btn-default m-b-20" onclick="javascript:location.href='<?php echo site_url('admin/user/adduser');?>'"><i class="fa fa-plus m-r-5"></i> Add New</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-xs-center text-right">
                                        <div class="form-group">
                                            <input id="demo-input-search2" type="text" placeholder="Search" class="form-control  input-sm" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <tbody>
                                <?php
                                    foreach($this->user->getUsers() as $row)
                                    {
                                ?>
                                <tr>
                                    <td>
                                        <img src="<?=base_url();?>public/assets/images/users/avatar-1.jpg" alt="contact-img" title="contact-img" class="img-circle thumb-sm"
                                        />
                                    </td>
                                    <td><?php echo $row->username ?></td>
                                    <td><?php echo $row->firstname ?></td>
                                    <td><?php echo $row->lastname ?></td>
                                    <td><?php echo $row->email ?></td>
                                    <td><?php echo $row->role ?></td>
                                    <td><?php if($row->active=='1')echo "Enable"; else echo "Disable"; ?></td>
                                    <td style="font-size: 20px">
                                        <a href="<?php echo site_url('admin/user/edit/'.$row->uid); ?>"><i class="md md-edit"></i></a>
                                        <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                    </td>
                                </tr>
                                <?php 
                                    } 
                                ?>                   
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="8">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split m-t-30"></ul>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
