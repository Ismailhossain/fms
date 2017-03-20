<title><?php echo ($title);?></title>

<div class="sepH_c" style="margin-top: 20px">
    <h1 align="center" class="">Factory Management System</h1>

    <h2 align="center" class="">Product Line Report</h2>
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


            foreach ($result as $value) {

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
    <form align="center" action="<?php echo site_url('product_line_controller/productline_report')?>">
        <input type="submit" onclick="window.print();" name="productreport" value="Print Report">
    </form>
</div>




<!--<script type="text/javascript" language="javascript">-->
<!---->
<!---->
<!--    head.ready(function () {-->
<!--        lga_fusionCharts.chart_k();-->
<!--        $('.chSel_all').click(function () {-->
<!--            $(this).closest('table').find('.inpt_c1').attr('checked', this.checked);-->
<!--        });-->
<!--        $(".delete_all_simple").click(function () {-->
<!--            $('input[name=row_sel]:checked', '.smpl_tbl').closest('tr').fadeTo(600, 0, function () {-->
<!--                $(this).remove();-->
<!--                $('.chSel_all', '.smpl_tbl').attr('checked', false);-->
<!--            });-->
<!--            return false;-->
<!--        });-->
<!--        $('.delete_all_dt').click(function () {-->
<!--            oTable = $('#data_table').dataTable();-->
<!--            $('input[@name=row_sel]:checked', oTable.fnGetNodes()).closest('tr').fadeTo(600, 0, function () {-->
<!--                oTable.fnDeleteRow(this);-->
<!--                $('.chSel_all', '#data_table').attr('checked', false);-->
<!--                return false;-->
<!--            });-->
<!--        });-->
<!---->
<!---->
<!--        $('#data_table').dataTable({-->
<!--            "aaSorting":[-->
<!--                [ 1, "asc" ]-->
<!--            ],-->
<!--            "aoColumns":[-->
<!---->
<!--                { "bSortable":false },-->
<!--                null,-->
<!--                null,-->
<!---->
<!--                { "sType":"natural" }-->
<!--//                { "sType":"natural" }-->
<!--               // { "sType":"natural" },-->
<!--//                { "sType":"natural" }-->
<!---->
<!--            ]-->
<!--        });-->
<!---->
<!--    });-->
<!---->
<!--    function upperCase(el,id){-->
<!--        window.location="--><?php //echo site_url()?><!--product_line_controller/change_product_status/"+id+"/"+el.value;-->
<!--    }-->
<!---->
<!---->
<!---->
<!--</script>-->

