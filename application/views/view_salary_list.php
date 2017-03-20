

<div class="sepH_c">

    <h1 class="sepH_c">All Employee's Salary</h1>
    <?php $this->load->view('layouts/message');?>
    <!--    <div class="msg_box msg_ok">--><?php //echo $this->session->userdata('username'); ?><!----><?php //echo $this->session->unset_userdata('username'); ?><!--</div>-->
    <form action="<?php echo site_url('salary_controller/delete_checkbox_salary_list')?>" method="post" name="frmMain">

        <div class="sepH_a">

            <!--            <a href="javascript:void(0)" class="delete_all_dt">Delete selected</a>-->
            <input class="btn btn_d sepV_a" type="submit"  name="btnDelete" value="Delete Selected" title="delete inventory"  onclick="return confirm('are you sure to delete?');" >
        </div>

        <table cellpadding="0" cellspacing="0" border="0" class="display" id="data_table">
            <thead>
            <tr>
                <th class="chb_col">
                    <div class="th_wrapp"><input type="checkbox" class="chSel_all" /></div>
                </th>
                <th>
                    <div class="th_wrapp">Employee ID</div>
                </th>
                <th>
                    <div class="th_wrapp">User Role </div>
                </th>
                <th>
                    <div class="th_wrapp">Name</div>
                </th>
                <th>
                    <div class="th_wrapp">Joining Date</div>
                </th>
                <th>
                    <div class="th_wrapp">Total Salary</div>
                </th>
                <th>
                    <div class="" align="center">Action</div>
                </th>
            </tr>
            </thead>
            <tbody>

            <?php
            $i =1;
            foreach($result as $value)
            {

                echo "<tr>";

                ?>
            <td class="chb_col"><input type="checkbox" name="row_sel[]" id="row_sel<?php echo $i;?>" class="inpt_c1" value="<?php echo $value->salary_id;?>"/></td>
            <td><?php echo $value->employee_id;?></td>
            <td><?php echo $value->type_name;?></td>
            <td><?php echo $value->first_name;?></td>
            <!--            <td>--><?php //echo humanize($value->first_name  . ' &nbsp ' .  $value->last_name);?><!--</td>-->
            <td><?php echo $value->joining_date;?></td>
            <td><?php echo $value->salary;?></td>
            <td><a href="javascript:void (0);" id="<?php echo $value->salary_id;?>"><img src="<?php echo base_url();?>assets/images/b_edit.png" alt="" title="Paid Salary" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="<?php echo base_url()?>salary_controller/delete_salary_list/<?php echo $value->salary_id;?>" onclick="return confirm('are you sure to delete?');"><img src="<?php echo base_url();?>assets/images/b_drop.png" alt="" title="Delete" /></a>
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




<div class="popup popup-event" id="popup11">
    <div class="popup-logo"></div>
    <a href="" class="popup-close"></a>
    <div class="popup-top"></div>
    <div class="popup-content" id="popupContent">

    </div><!-- end of content -->
    <div class="popup-bottom"></div>
</div>


<script type="text/javascript">
    jQuery(document).ready(function () {

        jQuery('.sepH_c a').click(function(){
          //  alert('i am fine')
            var salary_id =jQuery(this).attr('id');
            jQuery.ajax({
                url:"<?php echo base_url()?>salary_controller/edit_salary_list/"+salary_id,
                data:'',
                success: function(val){
                    jQuery(window).scrollTop(150);
                    jQuery(".layer").remove();
                    jQuery("body").append('<div class="layer" />');
                    jQuery(".layer").height(jQuery(document).height());
                    jQuery(".layer").show();
                    jQuery('#popup11').show();
                    jQuery('#popupContent').html(val);
                    return false;
                }
            })
        });
        jQuery(".popup").each(function()
        {
            var thisPopup = jQuery(this);
            thisPopup.find(".cancel, .popup-close").click(function()
            {
                thisPopup.hide();
                jQuery(".layer").remove();

                return false;
            });
        });
    });

</script>








<script type="text/javascript">


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











<style type="text/css">














</style>




























