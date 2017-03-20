

<div class="sepH_c">

    <h2 class="sepH_c">All Clients</h2>
    <?php $this->load->view('layouts/message');?>
<!--    <div class="msg_box msg_ok">--><?php //echo $this->session->userdata('username'); ?><!----><?php //echo $this->session->unset_userdata('username'); ?><!--</div>-->
        <form action="" method="post" name="frmMain">
    <div class="sepH_a">
<!--        <a href="javascript:void(0)" class="delete_all_dt">Delete selected</a>-->
        <input class="btn btn_d sepV_a" type="submit"  name="btnDelete" value="Delete Selected" title="delete user"  onclick="return confirm('are you sure to delete?');" >

    </div>

    <table cellpadding="0" cellspacing="0" border="0" class="display" id="data_table">
        <thead>
        <tr>
            <th class="chb_col">
                <div class="th_wrapp"><input type="checkbox" class="chSel_all"  /></div>
            </th>
            <th>
                <div class="th_wrapp">Name</div>
            </th>

            <th>
                <div class="th_wrapp">Client Type</div>
            </th>

            <th>
                <div class="th_wrapp">Email</div>
            </th>

            <th>
                <div class="th_wrapp">Designation</div>
            </th>
            <th>
                <div class="th_wrapp">Joining Date</div>
            </th>
            <th>
                <div class="" align="center">Action</div>
            </th>
        </tr>
        </thead>
        <tbody>

        <?php
        $i = 1;
        foreach ($result as $value)
        {
//            if ($i % 2 == 0) {
            //   echo "<tr style='background:#E5E5E5;'>";
//            }
//            else
//            {
                echo "<tr>";
//            }
//            ?>

        <td class="chb_col"><input type="checkbox" name="row_sel[]" id="row_sel<?php echo $i;?>" class="inpt_c1" value="<?php echo $value->user_id;?>"/></td>
        <td><?php echo humanize($value->first_name  . ' &nbsp ' .  $value->last_name);?></td>
        <td><?php echo $value->type_name;?></td>
        <td><?php echo $value->email_address;?></td>
        <td><?php echo $value->designation;?></td>
        <td><?php echo $value->joining_date;?></td>

        <!--        <td>--><?php //echo $value->joining_date;?><!--</td>-->
        <td><a href="<?php echo base_url()?>main_controller/edit_client/<?php echo $value->user_id;?>"><img src="<?php echo base_url();?>./assets/images/b_edit.png" alt="" title="Edit" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo base_url()?>main_controller/delete_client/<?php echo $value->user_id;?>" onclick="return confirm('are you sure to delete?');"><img src="<?php echo base_url();?>./assets/images/b_drop.png" alt="" title="Delete" /></a>
        </td>

        <!--            --><?php
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
               // { "sType":"formatted-num" },
               // { "sType":"formatted-num" },
                { "sType":"natural" },
                { "sType":"natural" },
                { "sType":"natural" },

                { "sType":"formatted-num" }
            ]
        });
    });


</script>

