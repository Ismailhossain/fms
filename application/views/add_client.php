

<form class="formEl_b" id="form_b" action="<?php echo base_url();?>main_controller/saveclient" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Client</h3></legend>

        <?php $this->load->view('layouts/message');?>

        <div class="sepH_b">
            <label for="first_name" class="lbl_a">Frist Name</label>
            <input type="text" id="first_name" name="first_name" value="<?php echo set_value('first_name');?>" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="last_name" class="lbl_a">Last Name</label>
            <input type="text" id="last_name" name="last_name" value="<?php echo set_value('last_name');?>" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label for="user_name" class="lbl_a">User Name</label>
            <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name');?>" class="inpt_a required" required="1"
                   err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL" minlength="5" />
        </div>
        <div class="sepH_b">
            <label for="email_address" class="lbl_a">Email</label>
            <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address');?>" class="inpt_a required" required="1" realname="Email" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label  class="lbl_a">Password</label>
            <input type="password" id="password" name="password" class="inpt_a required" minlength="6" required="1"  />
        </div>
        <div class="sepH_b">
            <label  class="lbl_a">Confirm Password</label>
            <input type="password" id="password-check" name="confirm_password" class="inpt_a required" minlength="6" required="1" />
        </div>
        <div class="sepH_b">
            <label for="designation" class="lbl_a">Designation</label>
            <input type="text" id="designation" name="designation" value="<?php echo set_value('designation');?>" class="inpt_a required" minlength="6" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="date" class="lbl_a">Joining Date</label>
            <input type="text" id="date" name="joining_date" value="<?php echo set_value('joining_date');?>" class="inpt_a required" minlength="6" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>

        <div class="sepH_b">
            <label for="b_select" class="lbl_a">Type Name</label>
            <select name="type_id" id="b_select">
                <?php
                foreach($result as $value)
                {

                    echo "<option value='$value->type_id'>$value->type_name</option>";

                }

                ?>
            </select>
        </div>


        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Submit form</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>






<script type="text/javascript">


    jQuery(function(){
        $("#form_b").click(function(){

            $(".error").hide();
            var hasError = false;
            var passwordVal = $("#password").val();
            var checkVal = $("#password-check").val();
            if (passwordVal == '') {
                $("#password").after('<span class="error"   style="color: #480091;">Please enter a password.</span>');
                hasError = true;
            } else if (checkVal == '') {
                $("#password-check").after('<span class="error" style="color: #005702;"> Re-enter your password.</span>');
                hasError = true;
            } else if (passwordVal != checkVal ) {
                $("#password-check").after('<span class="error" style="color: #0A246A;">Passwords do not match.</span>');
                hasError = true;
            }
            if(hasError == true) {return false;}
        });
    });





</script>





