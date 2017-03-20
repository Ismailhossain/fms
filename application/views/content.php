<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Factory Managment System</title>
    <script type="text/javascript">
        $(document).ready(function () {

            $('#nav li').hover(
                    function () {
                        //show its submenu
                        $('ul', this).slideDown(100);
                    },
                    function () {
                        //hide its submenu
                        $('ul', this).slideUp(100);
                    }
            );
        });
    </script>
</head>
<body>

</h1>
<div id="nav" style="height:400px;width:680px; ">
    <li>
        <div class="product" style="margin:5px 40px;">
            <label class="lbl">Product</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('product_controller/addProduct');?>">Add Product</a></li>
                <li><a href="<?php echo site_url('product_line_controller/addProductLine');?>">Add Product Line</a></li>
                <li><a href="<?php echo site_url('product_controller/viewProduct');?>">View Product</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="inventory" style="margin:5px 40px;">
            <label class="lbl">Material</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('raw_inventory_controller/addRawdata');?>">Add Material</a></li>
                <li><a href="<?php echo site_url('raw_inventory_controller/addInventory');?>">Add Inventory</a></li>
                <li><a href="<?php echo site_url('raw_inventory_controller/viewInventory');?>">View Inventory</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="image2" style="margin:5px 40px;">
            <label class="lbl">Admin</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('main_controller/add_client');?>">Add Client</a></li>
                <li><a href="<?php echo site_url('main_controller/add_author');?>">Add Author</a></li>
                <li><a href="<?php echo site_url('main_controller/view_client');?>">View Client History</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="image3" style="margin:100px 40px;">
            <label class="lbl">Report</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('product_controller/reportproductline');?>">Product Line</a></li>
                <li><a href="<?php echo site_url('product_line_controller/view_product_status_qc');?>">Quality
                    Control</a></li>
                <li><a href="<?php echo site_url('product_line_controller/view_product_status_finished');?>">Finish
                    Product</a></li>
                <li><a href="<?php echo site_url('product_line_controller/total_report');?>">Total Report</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="status" style="margin:100px 40px;">
            <label class="lbl">Status</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('product_line_controller/view_product_status');?>">View Product
                    Line</a></li>
                <li><a href="<?php echo site_url('product_line_controller/view_product_status_qc');?>">View Product
                    QC</a></li>
                <li><a href="<?php echo site_url('product_line_controller/view_product_status_finished');?>">View
                    Finished Product</a></li>
                <li><a href="<?php echo site_url('product_line_controller/view_wastage_status');?>">View Wastage
                    Product</a></li>
            </ul>
        </div>
    </li>
    <li>
        <div class="account" style="margin:100px 50px;">
            <label class="lbl">Account</label>
            <ul style="margin-left:45px;">
                <li><a href="<?php echo site_url('salary_controller/add_salary');?>"> Add Salary </a></li>
                <li><a href="<?php echo site_url('salary_controller/view_salary_list');?>">Payment section </a></li>
            </ul>
        </div>
    </li>
</div>
</body>
</html>