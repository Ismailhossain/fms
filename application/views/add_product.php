

<form class="formEl_b" id="form_b" action="<?php echo base_url();?>product_controller/saveProduct" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Product</h3></legend>
        <?php $this->load->view('layouts/message');?>

        <table align="center">

            <tr>
                <td colspan="2" style="background-color:#CCCCCC; color:#ff0000">
                    <h4><?php include_once('application/views/includes/message.php');?> </h4>
                </td>
            </tr>
        </table> <br>

        <div class="sepH_b">
            <label for="product_name" class="lbl_a">Product Name</label>
            <input type="text" id="product_name" name="product_name" value="" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="quantity" class="lbl_a">Quantity</label>
            <input type="text" id="quantity" name="quantity" value="" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>

        <div class="sepH_c">
            <label class="lbl_a" for="va_textarea">Description</label>
            <textarea id="va_textarea" name="description" rows="10" cols="30"></textarea>
        </div>
        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Submit form</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>











