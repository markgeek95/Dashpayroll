<?php $__env->startComponent('partials.header'); ?>

    <?php $__env->slot('title'); ?>
        Login
    <?php $__env->endSlot(); ?>


    <?php $__env->startSection('pagestyle'); ?>
    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('template'); ?>

        <div id="vue-app">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 mt-120 login-wrapper">

                          <form action="<?php echo e(url('login_now')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                              <h1 class="text-center">
                                  <img src="<?php echo e(url('public/images/logo.png')); ?>" width="100">
                              </h1>
                              <p class="text-center" id="titletext">DashPayroll Dst</p>

                            <?php echo $__env->make('messages.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                            <?php if(Session::has('login_error')): ?>
                                <div class="alert alert-danger">
                                    <?php echo e(Session::get('login_error')); ?>

                                </div>
                            <?php endif; ?>

                              <div>
                                  <div class="input-group form-group mt-50">
                                      <span class="input-group-addon addon bg-blue">
                                          <i class="fa fa-user"> </i>
                                      </span>
                                      <input class="form-control form-proceed" type="text" name="password" 
                                       placeholder="Enter password.." autocomplete="off" />
                                       <input type="hidden" name="username" value="<?php echo e($username); ?>">
                                  </div>

                                  <div class="form-group text-center">
                                      <button type="submit" class="btn btn-primary btn-block full_loader_show">
                                          Login 
                                          <!-- <span class="pull-right">
                                              <i class="fa fa-refresh"></i>
                                          </span> -->
                                      </button>
                                  </div>

                                  <a href="<?php echo e(url('/')); ?>" class="btn btn-link backbtn"> 
                                    <i class="fa fa-xs fa-arrow-left"></i> Back
                                  </a>
                                  <p class="pull-right inline">v7.4.6.3</p>
                              </div>
                          </form>              
                    </div>
                </div>
            </div>
        </div>


    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('pagescript'); ?>
    <?php $__env->stopSection(); ?>



<?php echo $__env->renderComponent(); ?>


















