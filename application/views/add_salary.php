<form class="formEl_b" id="form_b" action="<?php echo base_url();?>salary_controller/saveSalary" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Salary</h3></legend>
        <?php $this->load->view('layouts/message');?>
        <table align="center">

            <tr>
                <td colspan="2" style="background-color:#CCCCCC; color:#ff0000">
                    <!--                    <h4>--><?php //include_once('application/views/includes/message.php');?><!-- </h4>-->
                </td>
            </tr>
        </table> <br>
        <div class="sepH_b">
            <label for="b_selects" class="lbl_a"> Employees Name</label>
            <select name="employee_id" id="b_selects">
                <?php
                foreach($result as $value)
                {

                    echo "<option value='$value->employee_id'>$value->type_name | $value->first_name</option>";

                }

                ?>

            </select>
        </div>
        <div class="sepH_b">
            <label for="salary" class="lbl_a">Add Salary</label>
            <input type="text" id="salary" name="salary" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>


        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Add Salary</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>
