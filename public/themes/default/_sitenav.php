<?php
if(isset($current_user))
    $userDisplayName = isset($current_user->display_name) && ! empty($current_user->display_name) ? $current_user->display_name : ($this->settings_lib->item('auth.use_usernames') ? $current_user->username : $current_user->email);
else
    $userDisplayName = 'Guest';
?>   

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">        
        <li <?php echo check_class('home'); ?>><a href="<?php echo site_url(); ?>"><?php e(lang('bf_home')); ?></a></li>
        <li <?php echo check_class('blog'); ?>><a href="<?php echo site_url('blog'); ?>"><?php e(lang('bf_blog')); ?></a></li>        
        <li <?php echo check_class('geekzone'); ?>><a href="<?php echo site_url('geekzone'); ?>"><?php e(lang('bf_geekzone')); ?></a></li>        

        <?php if (empty($current_user)) : ?>    
        <li><a href="<?php echo site_url(LOGIN_URL); ?>">Guest (Sign In)</a></li>
        <?php else: ?> 
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo site_url(SITE_AREA . '/settings/users/edit'); ?>"
                id="tb_email" class="btn dark" title="<?php echo lang('bf_user_settings'); ?>"><?php echo $userDisplayName; ?> 
                <span class="caret"></span></a>         
            <ul class="dropdown-menu">
                <li>
                    <div class="inner">
                        <div class="toolbar-profile-img">
                            <?php echo gravatar_link($current_user->email, 96, null, $userDisplayName); ?>
                        </div>
                        <div class="toolbar-profile-info">
                            <p><strong><?php echo $userDisplayName; ?></strong><br />
                                <?php e($current_user->email); ?>
                                <br/>
                            </p>
                            <a href="<?php echo site_url(SITE_AREA . '/settings/users/edit'); ?>"><?php echo lang('bf_user_settings'); ?></a>
                            <a href="<?php echo site_url('logout'); ?>"><?php echo lang('bf_action_logout'); ?></a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>                
        
    </ul>
                                    
        <!-- <h3 class="navbar-brand muted"><?php e(class_exists('Settings_lib') ? settings_item('site.title') : 'Bonfire'); ?></h3> -->

<?php endif; ?>

</div>