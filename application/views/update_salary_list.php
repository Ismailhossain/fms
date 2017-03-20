

<form class="formEl_b" id="form_b" action="<?php echo base_url();?>salary_controller/updatesalary" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Paid Salary</h3></legend>
        <table align="center">

            <tr>
                <td colspan="2" style="background-color:#CCCCCC; color:#ff0000">
                    <h4><?php include_once('application/views/includes/message.php');?> </h4>
                </td>
            </tr>
        </table> <br>
        <input name="salary_id" type="hidden" value="<?php echo $row->salary_id;?>" size="50"/>

        <div class="sepH_b">
            <label for="employee_id" class="lbl_a">Employee ID</label>
            <input type="text" id="employee_id" name="employee_id" value="<?php echo $row->employee_id;?>" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="salary" class="lbl_a">Salary</label>
            <input type="text" id="salary" name="salary" value="<?php echo $row->salary;?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>

        <div class="sepH_b">
            <label for="advance_paid" class="lbl_a">Advance Paid</label>
            <input type="text" id="advance_paid" name="advance_paid" value="<?php echo $row->advance_paid;?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label for="due_salary" class="lbl_a">Due Salary</label>
            <input type="text" id="due_salary" name="due_salary" value="<?php echo $row->due_salary;?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label for="full_paid" class="lbl_a">Full Paid</label>
            <input type="text" id="full_paid" name="full_paid" value="<?php echo $row->full_paid;?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label for="paid_month" class="lbl_a">Paid Month</label>
            <input type="text" id="paid_month" name="paid_month" value="<?php echo $row->paid_month;?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>

        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Update Salary</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>











