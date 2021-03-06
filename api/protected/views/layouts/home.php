<?php $this->renderFile(Yii::app()->basePath . "/views/_shared/header.php"); ?>
<div class="topbar home-topbar">
    <div class="container_12">
        <div class="clearfix">
            <h1 class="bebasneue grid_5 page-title"><?php echo Yii::app()->params['page'] ?></h1>
            <div class="grid_7 user-bar pull-right">
                <ul class="user-bar-main clearfix">
                    <?php if (UserControl::LoggedIn()): ?>
                        <li class="user-actions">
                            <a href="javascript::void(0)"><?php echo UserControl::getFirstname() ?><i class="icon icon-arrow-down"></i></a>
                            <ul>
                                <li><a href="<?php echo HelperUrl::baseUrl() ?>user/account"><i class="icon icon-setting"></i> Account Setting</a></li>
                                <li><a href="<?php echo HelperUrl::baseUrl() ?>user/signout"><i class="icon icon-logout"></i> Log out</a></li> 
                            </ul>
                        </li>
                        <li><a href="<?php echo HelperUrl::baseUrl() ?>user/view_profile/s/current/u/<?php echo UserControl::getId() ?>">My Profile</a>|</li>
                        <?php if (UserControl::getRole() && UserControl::getRole() == 'client'): ?>
                            <li><a href="<?php echo HelperUrl::baseUrl() ?>user/account/type/manage_event">My Events</a>|</li>
                        <?php endif; ?>
                    <?php else: ?>
                        <li><a href="<?php echo HelperUrl::baseUrl() ?>user/signup">Register</a></li>
                        <li><a href="<?php echo HelperUrl::baseUrl() ?>user/signin">Log in</a>|</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php echo $content; ?>

<?php $this->renderFile(Yii::app()->basePath . "/views/_shared/footer.php"); ?>
