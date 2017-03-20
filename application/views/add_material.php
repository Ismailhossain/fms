

<form class="formEl_b" id="form_b" action="<?php echo base_url();?>raw_inventory_controller/saveRawdata" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Raw Materils</h3></legend>
        <?php $this->load->view('layouts/message');?>
        <div class="sepH_b">
            <label for="name" class="lbl_a">Name</label>
            <input type="text" id="name" name="name" class="inpt_a required" minlength="4" required="1" err="Enter Valied Name" regexp="JSVAL_RX_ALPHA"/>
        </div>
        <div class="sepH_b">
            <label for="code" class="lbl_a">Code</label>
            <input type="text" id="code" name="code" class="inpt_a required" minlength="5" required="1" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>


        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Add Materil</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>