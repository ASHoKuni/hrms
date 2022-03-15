<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo url('/dashboard'); ?>" class="logo">
    <h3>Heratly Lab</h3><br/>
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
                        <!-- <?php if(!empty(auth()->user()->avatar)): ?>
                        <img src="<?php echo asset('/profile_picture/'.auth()->user()->avatar); ?>" class="user-image" alt="User Image">
                        <?php else: ?> -->
                        <!-- <img src="<?php echo asset('/profile_picture/ht.png'); ?>" class="user-image" alt="User Image"> -->
                        <!-- <?php endif; ?> -->
                        <h2>HT</h2>
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
                        <!-- <?php if(!empty(auth()->user()->avatar)): ?>
                        <img src="<?php echo asset('/profile_picture/'.auth()->user()->avatar); ?>" class="user-image" alt="User Image">
                        <?php else: ?> -->
                        <h2>Heratly Lab</h2>
                        <!-- <img src="<?php echo asset('/profile_picture/ht.png'); ?>" class="user-image" alt="User Image"> -->
                        <!-- <?php endif; ?></span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only"><?php echo __('Toggle navigation'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php if(!empty(auth()->user()->avatar)): ?>
                        <img src="<?php echo asset('/profile_picture/'.auth()->user()->avatar); ?>" class="user-image" alt="User Image">
                        <?php else: ?>
                        <img src="<?php echo asset('/profile_picture/ht.png'); ?>" class="user-image" alt="User Image">
                        <?php endif; ?>

                        <span class="hidden-xs"><?php echo Auth::user()->name; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php if(!empty(auth()->user()->avatar)): ?>
                            <img src="<?php echo asset('/profile_picture/'.auth()->user()->avatar); ?>" class="img-circle" alt="User Image">
                            <?php else: ?>
                            <img src="<?php echo asset('/profile_picture/ht.png'); ?>"  class="img-circle" alt="User Image">
                            <?php endif; ?>
                            <p>
                                <?php echo Auth::user()->name; ?>

                                <!-- <small><?php echo __('Member Since'); ?> <?php echo date("d F Y", strtotime(Auth::user()->created_at)); ?> </small> -->
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?php echo url('/profile/user-profile'); ?>" class="btn btn-default btn-flat"><?php echo __('Profile'); ?></a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo route('logout'); ?>" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo __('Sign out'); ?></a>
                                <form id="logout-form" action="<?php echo route('logout'); ?>" method="POST">
                                    <?php echo csrf_field(); ?>

                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
            </ul>
        </div>
    </nav>
</header>