

<div class="sepH_c">

    <h2 class="sepH_c">View All Product</h2>
    <?php $this->load->view('layouts/message');?>

    <form action="<?php echo site_url('product_controller/delete_checkbox_product')?>" method="post" name="frmMain">
        <div class="sepH_a">

            <input class="btn btn_d sepV_a" type="submit"  name="btnDelete" value="Delete Selected" title="delete product"  onclick="return confirm('are you sure to delete?');" >

        </div>

        <table cellpadding="0" cellspacing="0" border="0" class="display" id="data_table">
            <thead>
            <tr>
                <th class="chb_col">
                    <div class="th_wrapp"><input type="checkbox" class="chSel_all"  /></div>
                </th>
                <th>
                    <div class="th_wrapp">Product No</div>
                </th>

                <th>
                    <div class="th_wrapp">Product Name</div>
                </th>
                <th>
                    <div class="th_wrapp">Quantity</div>
                </th>
                <th>
                    <div class="th_wrapp">Description</div>
                </th>
                <th>
                    <div class="th_wrapp">Order Date</div>
                </th>
                <th>
                    <div class="" align="center">Action</div>
                </th>
            </tr>
            </thead>
            <tbody>

            <?php
            $add = 100;
            $i = 1;
            foreach ($result as $value)
            {

                echo "<tr>";

                          ?>

            <td class="chb_col"><input type="checkbox" name="row_sel[]" id="row_sel<?php echo $i;?>" class="inpt_c1" value="<?php echo $value->product_id;?>"/></td>
            <td><?php echo $add.$value->product_id;?></td>
            <td><?php echo $value->product_name;?></td>
            <td><?php echo $value->quantity;?></td>
            <td><?php echo $value->description;?></td>
            <td><?php echo $value->create_date;?></td>
            <td><a href="<?php echo base_url()?>product_controller/edit_Product/<?php echo $value->product_id;?>"><img src="<?php echo base_url();?>assets/images/b_edit.png" alt="" title="Edit" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url()?>product_controller/deleteProduct/<?php echo $value->product_id;?>" onclick="return confirm('are you sure to delete?');"><img src="<?php echo base_url();?>assets/images/b_drop.png" alt="" title="Delete" /></a>
            </td>

<?php
                $i++;
            }
            ?>


            <input type="hidden" name="hdnCount" value="<?php echo $i;?>">
            </tbody>
        </table>
    </form>
</div>
<script type="text/javascript" language="javascript">


    head.ready(function () {
        lga_fusionCharts.chart_k();
        $('.chSel_all').click(function () {
            $(this).closest('table').find('.inpt_c1').attr('checked', this.checked);
        });
        $(".delete_all_simple").click(function () {
            $('input[name=row_sel]:checked', '.smpl_tbl').closest('tr').fadeTo(600, 0, function () {
                $(this).remove();
                $('.chSel_all', '.smpl_tbl').attr('checked', false);
            });
            return false;
        });
        $('.delete_all_dt').click(function () {
            oTable = $('#data_table').dataTable();
            $('input[@name=row_sel]:checked', oTable.fnGetNodes()).closest('tr').fadeTo(600, 0, function () {
                oTable.fnDeleteRow(this);
                $('.chSel_all', '#data_table').attr('checked', false);
                return false;
            });
        });
        $('#data_table').dataTable({
            "aaSorting":[
                [ 1, "asc" ]
            ],
            "aoColumns":[

                { "bSortable":false },
                null,
                null,

                { "sType":"natural" },
                { "sType":"natural" },
                { "sType":"natural" },
                { "sType":"formatted-num" }
            ]
        });
    });


</script>

