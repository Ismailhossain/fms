<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title> Admin</title>
</head>
<body>

<div id="sidebar">
    <div class="micro">
    </div>
    <div class="micro">
        <h4><span>Users</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('main_controller/add_client');?>">Add Client</a></li>
            <li><a href="<?php echo site_url('main_controller/add_author');?>">Add Employee</a></li>
            <li><a href="<?php echo site_url('main_controller/view_client');?>">View Client History</a></li>
        </ul>
    </div>
    <div class="micro">
        <h4><span>Material</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('raw_inventory_controller/addRawdata');?>">Add Material</a></li>
            <li><a href="<?php echo site_url('raw_inventory_controller/addInventory');?>">Add Inventory</a></li>
            <li><a href="<?php echo site_url('raw_inventory_controller/viewInventory');?>">View Inventory</a></li>
        </ul>
    </div>
    <div class="micro">
        <h4><span>Product</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('product_controller/addProduct');?>">Add Product</a></li>
            <li><a href="<?php echo site_url('product_line_controller/addProductLine');?>">Add Product Line</a></li>
            <li><a href="<?php echo site_url('product_controller/viewProduct');?>">View Product</a></li>
        </ul>
    </div>
    <div class="micro">
        <h4><span>Product Report</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('product_line_controller/productline_report');?>">Product Line Report</a></li>
            <li><a href="<?php echo site_url('product_line_controller/qc_report');?>">Quality Control Report</a></li>
            <li><a href="<?php echo site_url('product_line_controller/finished_report');?>">Finished Report</a></li>
            <li><a href="<?php echo site_url('product_line_controller/wastage_report');?>">Wastage Report</a></li>
            <li><a href="<?php echo site_url('product_line_controller/total_report');?>">Total Report</a></li>
        </ul>
    </div>
    <div class="micro">
        <h4><span>Product Status</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('product_line_controller/view_product_status');?>">View Product Line</a></li>
            <li><a href="<?php echo site_url('product_line_controller/view_product_status_qc');?>">View Product QC</a></li>
            <li><a href="<?php echo site_url('product_line_controller/view_product_status_finished');?>">View Finished
                Product</a></li>
            <li><a href="<?php echo site_url('product_line_controller/view_wastage_status');?>">View Wastage Product</a></li>
        </ul>
    </div>
    <div class="micro">
        <h4><span>Salary Section</span></h4>
        <ul class="sub_section cf" style="display:none">
            <li><a href="<?php echo site_url('salary_controller/add_salary');?>"> Add Salary </a></li>
            <li><a href="<?php echo site_url('salary_controller/view_salary_list');?>">Payment section </a></li>
        </ul>
    </div>
</div>
</div>
</div>

</body>
</html>