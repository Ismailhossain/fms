<form class="formEl_b" id="form_b" action="<?php echo base_url();?>product_controller/update_Product" method="post"
      onSubmit=" return validateStandard(this)">

    <fieldset>
        <legend><h3>Update Product</h3></legend>
        <?php $this->load->view('layouts/message');?>
        <input name="product_id" type="hidden" value="<?php echo $row->product_id;?>" size="50"/>

        <div class="sepH_b">
            <label for="product_name" class="lbl_a">Product Name</label>
            <input type="text" id="product_name" name="product_name" value="<?php echo $row->product_name;?>"
                   class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="quantity" class="lbl_a">Quantity</label>
            <input type="text" id="quantity" name="quantity" value="<?php echo $row->quantity;?>"
                   class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL"/>
        </div>

        <div class="sepH_c">
            <label class="lbl_a" for="va_textarea">Description</label>
            <textarea id="va_textarea" name="description" rows="10" cols="30"><?php echo $row->description;?></textarea>
        </div>
        <div class="sepH_b">
            <label for="create_date" class="lbl_a">Order Date</label>
            <input type="text" id="create_date" name="create_date" value="<?php echo $row->create_date;?>"
                   class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL"/>
        </div>
        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Update</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>











