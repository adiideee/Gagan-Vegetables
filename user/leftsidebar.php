<?php
@session_start();
?>
<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="media user-profile mt-2 mb-2">
        <img src="assets/images/users/Avatar1.png" class="avatar-sm rounded-circle mr-2" />
        <img src="assets/images/users/Avatar1.png" class="avatar-xs rounded-circle mr-2" />
        <div class="media-body">
              <div class="pro-user-desc">

                <?php
                if (isset($_SESSION["name"])) {
                    $usr = $_SESSION["name"];
                    echo ( $usr);
                    
                } 

                ?>
            </div>
            <span class="pro-user-desc">User</span>
        </div>
    </div>
    <div class="sidebar-content">
        <!--- Sidemenu -->
        <div id="sidebar-menu" class="slimscroll-menu">
            <ul class="metismenu" id="menu-bar">
                <li>
                    <a href="index.php">
                        <i data-feather="file-plus"></i>
                        <span> Purchase </span>
                    </a>
                </li>
                <li>
                    <a href="order.php">
                        <i data-feather="shopping-cart"></i>
                        <span>Order</span>
                    </a>
                </li>
                <li>
                    <a href="complain.php">
                        <i data-feather="mail"></i>
                        <span>Make Complain</span>
                    </a>
                </li>
              
                <li>
                    <a href="../admin/logout.php">
                        <i data-feather="log-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
              
            </ul>
        </div>
        <!-- End Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->