
<div class="sepH_c">

    <h2 class="sepH_c">Finished Product Status</h2>
    <?php $this->load->view('layouts/message');?>
    <form action="<?php echo site_url('product_controller/delete_checkbox_product')?>" method="post" name="frmMain">


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
                    <div class="th_wrapp">Delivery Date</div>
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


            foreach ($results as $value)
            {

                echo "<tr>";

                    ?>

            <td class="chb_col"><input type="checkbox" name="row_sel[]" id="row_sel<?php echo $i;?>" class="inpt_c1" value="<?php echo $value->product_line_id;?>"/></td>
            <td><?php echo $add.$value->product_id;?></td>
            <td><?php echo $value->product_name;?></td>
            <td><?php echo $value->quantity;?></td>
            <td><?php echo $value->delivery_date;?></td>
            <td>
                <select name="status" id="status" onchange="upperCase(this, <?php echo $value->product_line_id ?>);">
                    <option value="">Select Status</option>
                    <option value="2">QC</option>
                </select> </td>


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
                { "sType":"natural" }

            ]
        });

    });

    function upperCase(el,id){
        window.location="<?php echo site_url()?>product_line_controller/change_product_status_finished/"+id+"/"+el.value;
    }



</script>

