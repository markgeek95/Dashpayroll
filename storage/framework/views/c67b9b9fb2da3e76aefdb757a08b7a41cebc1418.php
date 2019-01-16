<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Company Information
    <?php $__env->endSlot(); ?>


<?php $__env->startSection('pagestyle'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('template'); ?>

    <?php $__env->startComponent('partials.template'); ?>

<?php $__env->startSection('content'); ?>

    <div id="page-wrapper">

        <div class="tab">
            <?php echo $__env->make('dashboard.dashboard_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <!--  -->
        <div class="container-fluid" >
            <div class="col-md-12 mt-40" id="companyform">

                <form action="<?php echo e(url('company_information')); ?>" method="post" enctype="multipart/form-data">

                    <?php echo e(csrf_field()); ?>


                <div class="row container_style">

                    <div class="col-md-offset-1 col-md-6 form-group-sm mt-20">
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('header')): ?> has-error <?php endif; ?>" >
                            <label class="control-label col-xs-4">Report Header</label>
                            <div class="col-xs-8">
                                <textarea class="form-control company_info_form_style" name="header"
                                          placeholder="Company Header..."><?php echo e(old('header')); ?></textarea>
                                <?php if($errors->has('header')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('header')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('address')): ?> has-error <?php endif; ?>" >
                            <label class="control-label col-xs-4">Address</label>
                            <div class="col-xs-8">
                                <textarea class="form-control company_info_form_style" name="address"
                                          placeholder="Company Address..."><?php echo e(old('address')); ?></textarea>
                                <?php if($errors->has('address')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('address')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal  mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('pagibig_no')): ?> has-error <?php endif; ?>" >
                            <label class="control-label col-xs-4">Pagibig No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Pagibig no.."
                                       name="pagibig_no" autocomplete="off" value="<?php echo e(old('pagibig_no')); ?>"/>
                                <?php if($errors->has('pagibig_no')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('pagibig_no')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('phic_no')): ?> has-error <?php endif; ?>">
                            <label class="control-label col-xs-4">PHIC No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="PHIC no..."
                                       name="phic_no" autocomplete="off" value="<?php echo e(old('phic_no')); ?>"/>
                                <?php if($errors->has('phic_no')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('phic_no')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('sss_no')): ?> has-error <?php endif; ?>">
                            <label class="control-label col-xs-4">SSS No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="SSS no..."
                                       name="sss_no" autocomplete="off" value="<?php echo e(old('sss_no')); ?>"/>
                                <?php if($errors->has('sss_no')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('sss_no')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('tin_no')): ?> has-error <?php endif; ?>">
                            <label class="control-label col-xs-4">Tin No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Tin no..."
                                       name="tin_no" autocomplete="off" value="<?php echo e(old('tin_no')); ?>"/>
                                <?php if($errors->has('tin_no')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('tin_no')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('tel_no')): ?> has-error <?php endif; ?>">
                            <label class="control-label col-xs-4">Tel No</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Tel no..."
                                       name="tel_no" autocomplete="off" value="<?php echo e(old('tel_no')); ?>"/>
                                <?php if($errors->has('tel_no')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('tel_no')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 center-block clearfix col-md-12
                            <?php if($errors->has('zip_code')): ?> has-error <?php endif; ?>">
                            <label class="control-label col-xs-4">Zip Code</label>
                            <div class="col-xs-8">
                                <input type="text" class="form-control" placeholder="Zip code..."
                                       name="zip_code" autocomplete="off" value="<?php echo e(old('zip_code')); ?>"/>
                                <?php if($errors->has('zip_code')): ?>
                                    <span class="help-block">
                                         <?php echo e($errors->first('zip_code')); ?>

                                     </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-horizontal mt-20 mb-20 center-block clearfix col-md-12">
                            <div class="col-sm-12 text-right mt-50">
                                <div class="clearfix"></div>
                                <button class="btn mt-20 btn-sm">Cancel</button>
                                <button class="btn btn-success mt-20 btn-sm">
                                    <i class="fa fa-save"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-10 col-md-3 mt-40">
                        <div>
                            <?php if(Session::has('path')): ?>
                                <img src="<?php echo e(asset(Session::get('path'))); ?>" class="img-responsive img-rounded">
                            <?php else: ?>
                                <img src="<?php echo e(asset('public/images/logo.png')); ?>"
                                     class="img-thumbnail img-responsive" width="100%" >
                            <?php endif; ?>
                        </div>

                        <div class="caption mt-10 <?php if($errors->has('image')): ?> has-error <?php endif; ?>">
                            <div class="input-group form-group-sm ">
                                <input type="text" class="form-control fileShowingImage" readonly>
                                <span class="input-group-btn">
                                    <span class="btn btn-primary btn-file btn-sm">
                                        <i class="glyphicon glyphicon-cloud-upload"></i> Browse
                                        <input type="file" name="image" class="company_image" />
                                    </span>
                                </span>
                            </div>
                            <?php if($errors->has('image')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('image')); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="visible-xs col-xs-12 separator" style="border: 1px solid #ddd;margin-top:10px"></div>
                </div>


                </form>

            </div>
        </div>


        <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>



<?php $__env->stopSection(); ?>

<?php echo $__env->renderComponent(); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagescript'); ?>

    <script>
        $(document).on('change', '.company_image', function(event){
            var fileUpload = event.target.files;
            $('.fileShowingImage').val(fileUpload[0].name);
        });
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>





















