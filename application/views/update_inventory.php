<form class="formEl_b" id="form_b" action="<?php echo base_url();?>raw_inventory_controller/update_Inventory"
      method="post" onSubmit=" return validateStandard(this)">

    <fieldset>
        <legend><h3>Update Inventory Information</h3></legend>
        <?php $this->load->view('layouts/message');?>
        <input name="raw_inventory_id" type="hidden" value="<?php echo $row->raw_inventory_id;?>" size="50"/>

        <div class="sepH_b">
            <label for="b_select" class="lbl_a"> Materials Name</label>
            <select name="raw_material_id" id="b_select">
                <?php
                foreach ($result as $value):?>




                    <option value='<?php echo $value->raw_material_id ?>'<?php echo $row->raw_material_id == $value->raw_material_id ? "selected" : ''; ?>><?php echo $value->name;?></option>
                    ";
                    <?php
                endforeach;?>

            </select>
        </div>
        <div class="sepH_b">
            <label for="quantity" class="lbl_a">Quantity</label>
            <input type="text" id="quantity" value="<?php echo $row->quantity;?>" name="quantity"
                   class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="price" class="lbl_a">Price</label>
            <input type="text" id="price" name="price" value="<?php echo $row->price;?>" class="inpt_a required"
                   minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL"/>
        </div>
        <div class="sepH_b">
            <label for="batch_no" class="lbl_a">Batch No</label>
            <input type="text" id="batch_no" value="<?php echo $row->batch_no;?>" name="batch_no"
                   class="inpt_a required" required="1"
                   err="Please Enter a valid Email" regexp="JSVAL_RX_EMAIL" minlength="5"/>
        </div>

        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Update</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>