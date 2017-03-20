

<form class="formEl_b" id="form_b" action="<?php echo base_url();?>raw_inventory_controller/saveInventory" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Inventory</h3></legend>
        <?php $this->load->view('layouts/message');?>
        <table align="center">

            <tr>
                <td colspan="2" style="background-color:#CCCCCC; color:#ff0000">
<!--                    <h4>--><?php //include_once('application/views/includes/message.php');?><!-- </h4>-->
                </td>
            </tr>
        </table> <br>
        <div class="sepH_b">
            <label for="b_select" class="lbl_a"> Materials Name</label>
            <select name="raw_material_id" id="b_select">
                <?php
                foreach($result as $value)
                {


                    echo "<option value='$value->raw_material_id'>$value->name</option>";
                }

                ?>

            </select>
        </div>
        <div class="sepH_b">
            <label for="quantity" class="lbl_a">Quantity</label>
            <input type="text" id="quantity" name="quantity" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="price" class="lbl_a">Price</label>
            <input type="text" id="price" name="price" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b">
            <label for="batch_no" class="lbl_a">Batch No</label>
            <input type="text" id="batch_no" name="batch_no" class="inpt_a required" required="1"
                   err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL" minlength="5" />
        </div>

        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Add Inventory</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>