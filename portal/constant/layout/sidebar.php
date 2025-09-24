<?php 
    require_once('./constant/connect.php');
?>

<div class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li><a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a> </li>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customers</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!--<li><a href="add-lead.php">Add Lead</a></li>-->
                        <li><a href="lead.php">Manage Leads</a></li>
                        <li><a href="customer.php">Manage Customers</a></li>
                    </ul>
                </li>
                <?php if(isset($_SESSION['userId']) && $_SESSION['userId']>2) { ?>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Commision</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="commision.php">Manage Commision</a></li>
                    </ul>
                </li>
                <?php } if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Vendors</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!--<li><a href="add-order.php">Add Invoice</a></li>-->
                        <li><a href="users.php">Manage Vendor</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Payments</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="collection.php">Manage Payments</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Lead Status</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="new-lead.php">New </a></li>
                        <!--<li><a href="working-lead.php">Working</a></li>-->
                        <!--<li><a href="contact-lead.php">Contacted</a></li>-->
                        <!--<li><a href="qualified-lead.php">Qualified</a></li>-->
                        <li><a href="failed-lead.php">Failed</a></li>
                        <li><a href="closed-lead.php">Closed</a></li>
                    </ul>
                </li>
                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Videos</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="add-video.php">Add Videos</a></li>
                        <li><a href="videos.php">Manage Videos</a></li>
                    </ul>
                </li>
                <?php } ?>
                <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==2) { ?>
                <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Reports</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <!-- <li><a href="report.php">Order Report</a></li> -->
                        <li><a href="sales_report.php">Lead Report</a></li>
                    </ul>
                </li>
                <?php } ?>
            </ul>   
        </nav>
    </div>
</div>