<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 register-box">
            <div class="panel panel-success">
                <div class="panel-heading">Create Account</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('auth/register')); ?>">
                        <?php echo csrf_field(); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('matricule') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Matricule</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="matricule" value="<?php echo e(old('matricule')); ?>">

                                <?php if($errors->has('matricule')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('matricule')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('dob') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Phone number</label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>">

                                <?php if($errors->has('phone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?> form-inline">
                            <label class="col-md-4 control-label">Date of birth</label>

                            <div class="col-md-6">
                                <select type="select" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>">
                                    <option selected>Year</option>   
                                    <option selected>1996</option>
                                </select>
                                <select type="select" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>">
                                    <option selected>Month</option>
                                    <option>January</option>   
                                </select>
                                <select type="select" class="form-control" name="dob" value="<?php echo e(old('dob')); ?>">
                                    <option selected>Day</option>  
                                    <option>4</option> 
                                </select>

                                <?php if($errors->has('dob')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('dob')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div> -->

                        <div class="form-group<?php echo e($errors->has('pob') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Place of birth</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pob" value="<?php echo e(old('pob')); ?>">

                                <?php if($errors->has('pob')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('pob')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>