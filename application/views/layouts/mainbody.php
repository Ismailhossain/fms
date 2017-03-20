<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title> Admin</title>
</head>
<body>
<div id="main">
    <div class="wrapper">
        <div id="main_section" class="cf brdrrad_a">
            <ul id="breadcrumbs" class="xbreadcrumbs cf">
                <li class="parent">
                    <a href="<?php echo site_url('main_controller/home');?>"> <img
                            src="<?php echo base_url();?>images/blank.gif" alt="" class="sepV_a vam home_ico"/> </a>
                </li>
                <li class="parent">
                    <a href="" class="vam"> Admin</a>
                    <ul class="first">
                        <li><a href="<?php echo site_url('main_controller/add_client');?>">Add Client</a></li>
                        <li><a href="<?php echo site_url('main_controller/add_author');?>">Add Author</a></li>
                        <li><a href="<?php echo site_url('main_controller/view_client');?>">View Client History</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Product</a>
                    <ul>
                        <li><a href="<?php echo site_url('product_controller/addProduct');?>">Add Product</a></li>
                        <li><a href="<?php echo site_url('product_line_controller/addProductLine');?>">Add Product
                            Line</a></li>
                        <li><a href="<?php echo site_url('product_controller/viewProduct');?>">View Product</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Material</a>
                    <ul>
                        <li><a href="<?php echo site_url('raw_inventory_controller/addRawdata');?>">Add Material</a>
                        </li>
                        <li><a href="<?php echo site_url('raw_inventory_controller/addInventory');?>">Add Inventory</a>
                        </li>
                        <li><a href="<?php echo site_url('raw_inventory_controller/viewInventory');?>">View
                            Inventory</a></li>
                    </ul>
                </li>
                <li class="parent">
                    <a href="#">Status</a>
                    <ul>
                        <li><a href="<?php echo site_url('product_line_controller/view_product_status');?>">View Product
                            Line</a></li>
                        <li><a href="<?php echo site_url('product_line_controller/view_product_status_qc');?>">View
                            Product QC</a></li>
                        <li><a href="<?php echo site_url('product_line_controller/view_product_status_finished');?>">View
                            Finished Product</a></li>
                        <li><a href="<?php echo site_url('product_line_controller/view_wastage_status');?>">View Wastage
                            Product</a></li>
                    </ul>
                </li>
                <li class="parent"><a href="<?php echo base_url('welcome/AboutFMS') ?>">About FMS</a></li>
            </ul>

            <div id="content_wrapper">
                <div id="main_content">
                    <div class="cf">
                        <div class="dp100 sortable">
                            <div class="box_c sort-disabled">
                                <h3 class="box_c_heading cf">
                                    <span class="fl">Display <span class="small">Information</span></span>
                                </h3>
                                <div class="box_c_content box_c_inner">
                                    <div id="chart_a">
                                      <?php echo $mainContent; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cf">
                        <div class="sortable dp100"></div>
                    </div>
                </div>
            </div>
</body>
</html>