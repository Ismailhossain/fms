<title><?php echo ($title);?></title>

<div class="sepH_c" style="margin-top: 20px">
    <h1 align="center" class="">Factory Management System</h1>

    <h2 align="center" class="">Quality Control Report</h2>
    <?php $this->load->view('layouts/message');?>

    <form action="<?php echo base_url()?>product_controller/delete_checkbox_product" method="post" name="frmMain">


        <table cellpadding="0" cellspacing="20" border="0" align="center" class="display" id="data_table">
            <thead>
            <tr>
                <th>
                    <div class="th_wrapp">Product No</div>
                </th>

                <th>
                    <div class="th_wrapp">Product Name</div>
                </th>
                <th>
                    <div class="th_wrapp">Quantity</div>
                </th>


            </tr>
            </thead>
            <tbody>

            <?php
            $add = 100;
            $i = 1;


            foreach ($results as $value) {

                echo "<tr>";

                ?>

            <td><?php echo $add . $value->product_id;?></td>
            <td><?php echo $value->product_name;?></td>
            <td><?php echo $value->quantity;?></td>



                <?php
                $i++;
            }
            ?>


            <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
            </tbody>
        </table>
    </form>
    <form align="center" action="<?php echo site_url('product_line_controller/qc_report')?>">
        <input type="submit" onclick="window.print();" name="productreport" value="Print Report">
    </form>
</div>