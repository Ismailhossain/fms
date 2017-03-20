<form class="formEl_b" id="form_b" action="<?php echo base_url();?>main_controller/update_client" method="post"
      onSubmit=" return validateStandard(this)">

    <fieldset>
        <legend><h3>Update Client Information</h3></legend>

        <?php $this->load->view('layouts/message');?>
        <input name="user_id" type="hidden" value="<?php echo $row->user_id;?>" size="50"/>

        <div class="sepH_b">
            <label for="first_name" class="lbl_a">Frist Name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo $row->first_name;?>"
                   class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="last_name" class="lbl_a">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo $row->last_name;?>"
                   class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL"/>
        </div>
        <div class="sepH_b">
            <label for="user_name" class="lbl_a">User Name</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo $row->user_name;?>"
                   class="inpt_a required" required="1"
                   err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL" minlength="5"/>
        </div>
        <div class="sepH_b">
            <label for="email_address" class="lbl_a">Email</label>
            <input type="text" id="email_address" name="email_address" value="<?php echo $row->email_address;?>"
                   class="inpt_a required" required="1" realname="Email" regexp="JSVAL_RX_EMAIL"/>
        </div>

        <div class="sepH_b">
            <label for="designation" class="lbl_a">Designation</label>
            <input type="text" id="designation" name="designation" value="<?php echo $row->designation;?>"
                   class="inpt_a required" minlength="6" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="date" class="lbl_a">Joining Date</label>
            <input type="text" id="date" name="joining_date" value="<?php echo $row->joining_date;?>"
                   class="inpt_a required" minlength="6" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>

        <div class="sepH_b">
            <label for="b_select" class="lbl_a">Type Name</label>
            <select name="type_id" id="b_select">


                <?php
                foreach ($result as $value):?>


                    <option value='<?php echo $value->type_id ?>'<?php echo $row->type_id == $value->type_id ? "selected" : ''; ?>><?php echo $value->type_name;?></option>
                    ";

                    <?php endforeach;
                ?>

            </select>
        </div>


        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Update</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>