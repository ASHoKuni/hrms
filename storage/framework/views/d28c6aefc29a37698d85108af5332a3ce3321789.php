<?php $__env->startSection('title', __('Departments')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo __('PERSONAL EVENT'); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a><?php echo __('Setting'); ?></a></li>
            <li><a href="<?php echo url('/setting/personal_events'); ?>"><?php echo __('Personal Events'); ?></a></li>
            <li class="active"><?php echo __('Edit'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Edit personal event'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo url('/setting/personal-events/update/'. $personal_event['id']); ?>" method="post" name="personal_event_edit_form">
                <?php echo csrf_field(); ?>

                <div class="box-body">
                    <div class="row">
                        <!-- Notification Box -->
                        <div class="col-md-12">
                            <?php if(!empty(Session::get('message'))): ?>
                                <div class="alert alert-success alert-dismissible" id="notification_box">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="icon fa fa-check"></i> <?php echo Session::get('message'); ?>

                                </div>
                            <?php elseif(!empty(Session::get('exception'))): ?>
                                <div class="alert alert-warning alert-dismissible" id="notification_box">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <i class="icon fa fa-warning"></i> <?php echo Session::get('exception'); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->

                        <div class="col-md-6">
                            <label for="personal_event"><?php echo __('Personal Event'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('personal_event') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="personal_event" id="personal_event" class="form-control" value="<?php echo $personal_event['personal_event']; ?>">
                                <?php if($errors->has('personal_event')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('personal_event'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="start_date"><?php echo __('Start Date'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('start_date') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="start_date" id="datepicker" class="form-control" value="<?php echo $personal_event['start_date']; ?>">
                                <?php if($errors->has('start_date')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('start_date'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="end_date"><?php echo __('End Date'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('end_date') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="end_date" id="datepicker2" class="form-control" value="<?php echo $personal_event['end_date']; ?>">
                                <?php if($errors->has('end_date')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('end_date'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="publication_status"><?php echo __('Publication Status '); ?><span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('publication_status') ? ' has-error' : ''; ?> has-feedback">
                                <select name="publication_status" id="publication_status" class="form-control">
                                    <option value="" selected disabled><?php echo __('Select one'); ?></option>
                                    <option value="1"><?php echo __('Published'); ?></option>
                                    <option value="0"><?php echo __('Unpublished'); ?></option>
                                </select>
                                <?php if($errors->has('publication_status')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('publication_status'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-12">
                            <label for="personal_event_description"><?php echo __('Personal Event Description'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('personal_event_description') ? ' has-error' : ''; ?> has-feedback">
                                <textarea class="textarea text-description" name="personal_event_description" id="personal_event_description"><?php echo $personal_event['personal_event_description']; ?></textarea>
                                <?php if($errors->has('personal_event')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('personal_event_description'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?php echo url('/setting/personal-events'); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i> <?php echo __('Cancel'); ?></a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-edit"></i> <?php echo __('Update personal event'); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['personal_event_edit_form'].elements['publication_status'].value = "<?php echo $personal_event['publication_status']; ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>