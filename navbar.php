<nav class="navbar navbar-expand-lg <?php if($settings_dark_mode) echo "navbar-dark bg-dark"; else echo "navbar-light bg-light"; ?> py-3 shadow">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <?php 
                if($settings_navbar_logo!='')
                    echo '<img src="./images/'.$settings_navbar_logo.'" height="40">';
                else
                    echo $settings_navbar_title;
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#MainNavBar" aria-controls="MainNavBar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="MainNavBar">
            <ul class="navbar-nav ml-auto mr-2">
                <li class="nav-item">
                    <a class="nav-link <?php echo nav_active('Dashboard'); ?>" href="index.php"><i class="fas fa-tachometer-alt"></i> <?php echo DASHBOARD;?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo nav_active('Top Players'); ?>" href="top-players.php"><i class="fas fa-users"></i> <?php echo TOP_PLAYERS;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo nav_active('Maps'); ?>" href="maps.php"><i class="fas fa-map"></i> <?php echo MAPS;?></a>
                </li>
                <?php if($settings_most_active_enable): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo nav_active('Most Active');?>" href="most-active.php"><i class="fas fa-user-clock"></i> <?php echo MOST_ACTIVE;?></a>
                    </li>
                <?php endif; ?>
            </ul>
            <?php if($settings_custom_link_name!=''): ?>
                <a class="btn btn-secondary my-2 my-sm-0 shadow-sm" role="button" href="<?php echo $settings_custom_link_adress;?>"><?php echo $settings_custom_link_name;?></a>
            <?php endif; ?>
        </div>
    </div> 
</nav>