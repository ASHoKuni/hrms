<?php $__env->startSection('title', __('Add Folder')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo __('FOLDERS'); ?> 
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
            <li><a href="<?php echo url('/folders'); ?>"><?php echo __('Folders'); ?></a></li>
            <li class="active"><?php echo __('Add folder'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Add Folder'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <form action="<?php echo url('/folders/store'); ?>" method="post" name="folder_name_add_form">
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
                            <?php else: ?>
                            <p class="text-yellow"><?php echo __('Enter folder details. All field are required.'); ?> </p>
                            <?php endif; ?>
                        </div>
                        <!-- /.Notification Box -->

                        <div class="col-md-6">
                            <label for="folder_name"><?php echo __('Folder Name'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('folder_name') ? ' has-error' : ''; ?> has-feedback">
                                <input type="text" name="folder_name" id="folder_name" class="form-control" value="<?php echo old('folder_name'); ?>" placeholder="<?php echo __('Enter client name..'); ?>">
                                <?php if($errors->has('folder_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('folder_name'); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                            <!-- /.form-group -->
                            <label for="publication_status"><?php echo __('Publication Status'); ?> <span class="text-danger">*</span></label>
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
                            <label for="folder_description"><?php echo __('Folder Description'); ?> <span class="text-danger">*</span></label>
                            <div class="form-group<?php echo $errors->has('folder_description') ? ' has-error' : ''; ?> has-feedback">
                                <textarea class="textarea text-description" name="folder_description" id="folder_description" placeholder="<?php echo __('Enter client description..'); ?>"><?php echo old('folder_description'); ?></textarea>
                                <?php if($errors->has('folder_name')): ?>
                                <span class="help-block">
                                    <strong><?php echo $errors->first('folder_description'); ?></strong>
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
                    <a href="<?php echo url('/folders'); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i><?php echo __('Cancel'); ?> </a>
                    <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo __('Add folder'); ?></button>
                </div>
            </form>
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    document.forms['folder_name_add_form'].elements['publication_status'].value = "<?php echo old('publication_status'); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>