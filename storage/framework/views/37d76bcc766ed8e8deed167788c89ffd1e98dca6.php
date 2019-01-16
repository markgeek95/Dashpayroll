<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Dashboard
    <?php $__env->endSlot(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('template'); ?>

        <?php $__env->startComponent('partials.template'); ?>

            <?php $__env->startSection('content'); ?>

                <div id="page-wrapper">


                        <div class="tab">
                        </div>
                        <div class="container-fluid" >
                            <div class="col-md-12 mt-20" id="companyform">
                                <div class="row" style="border-right: 2px solid #0265FE;border-left: 2px solid #0265FE;padding:50px;padding-top: 20px;">
                                    <h2 class="text-info"> <li class="fa fa-plus"></li> New Payroll User</h2>
                                    <div class="tab-pane fade in active mt-40">
                                        <form class="form-horizontal addMemberForm" method="POST">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class ="control-label col-sm-4  text-info" id="textAlign">Code<span style="color:red;" class="text-red">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="id" id="id" required class="form-control" placeholder="Code" value="2" readonly="">
                                                    </div>
                                                </div>
                                                <div class=" form-group">
                                                    <label for="lname" class ="control-label col-sm-4  text-info" id="textAlign">User Level<span   style="color:red;" class="text-red">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="name"  class="form-control" required id="lname" placeholder="FullName">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email" class ="control-label col-sm-4  text-info" id="textAlign">Fullname<span style="color:red;" class="text-red">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="id" id="id" required class="form-control" placeholder="Fullname">
                                                    </div>
                                                </div>
                                                <div class=" form-group">
                                                    <label for="lname" class ="control-label col-sm-4  text-info" id="textAlign">Name<span   style="color:red;" class="text-red">*</span></label>
                                                    <div class="col-md-8">
                                                        <input type="text" name="name"  class="form-control" required id="Name" placeholder="FullName">
                                                    </div>
                                                </div>
                                        </form>
                                    </div>





                                    <div class="form-horizontal mt-10 center-block clearfix col-md-12">
                                        <div class="mt-30">
                                            <h2 class="text-info text-center mt-20"> <li class="fa fa-user"></li> User Access</h2>
                                            <table class="table table-bordered mt-30">
                                                <thead>
                                                <tr>
                                                    <th>Module</th>
                                                    <th>Add</th>
                                                    <th>Disabled</th>
                                                    <th>Edit</th>
                                                    <th>View</th>
                                                    <th>Print</th>
                                                    <th>All</th>
                                                    <th>Post</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Dashboard</td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Maintenance</td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Payroll</td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Reports</td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                <tr>
                                                    <td>Admin</td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                    <td><input type="checkbox"></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>



                                        <div class = "col-md-12 text-right">
                                            <a href="<?=URL;?>adminv2/">
                                                <button class="btn btn-danger btn-sm mt-10" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button> </a>
                                            <button class="btn btn-success btn-sm mt-10" id="EmployeeMastersave"><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid mt-20">
                        </div>
                        <div>
                        </div>


                    


                </div>


            <?php $__env->stopSection(); ?>

        <?php echo $__env->renderComponent(); ?>

    <?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>