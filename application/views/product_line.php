<script type="text/javascript" language="javascript">
    function deleterecord(){
        $('.drec').click(function(){
            $(this).parent().parent().remove();
        });
    }

    function addtogrid(){
        $('#selecteditems').show();
        var item=$('#raw_inventory_id').val();
        var quan=parseInt($('#quanti').val());
        var qu=parseInt(quan);
        var spl=item.split('|');
        var storequan=parseInt(spl[1]);


        if(quan<=storequan && storequan>0)
        {
            $('#itemtable tr:last').after('<tr><td><input type="hidden" name="cou[]" size="30" value="'+spl[0]+'" />'+spl[0] +'</td><td><input type="hidden" name="qua[]" size="30" value="'+quan+'" />'+quan+'</td><td><input type="button" value="remove" class="drec" onclick="deleterecord()"/></td></tr>');
            $('#raw_inventory_id').val('');
            $('#quanti').val('1');

        }
        else
        {
            alert("Requested Quantity is not available.Available Quantity:"+parseInt(storequan));
        }

    }
</script>


<form class="formEl_b" id="form_b" action="<?php echo site_url('product_line_controller/saveProductLine')?>" method="post" onSubmit=" return validateStandard(this)" >

    <fieldset>
        <legend><h3>Add Product Line</h3></legend>
        <?php $this->load->view('layouts/message');?>

        <table align="center">

            <tr>
                <td colspan="2" style="background-color:#CCCCCC; color:#ff0000">
                    <h4><?php include_once('application/views/includes/message.php');?> </h4>
                </td>
            </tr>
        </table> <br>
        <input type="hidden" id="product_line_id" name="product_line_id" value=""  />
        <div class="sepH_b">
            <label for="b_selects" class="lbl_a">Product Name</label>
            <select name="product_id" id="b_selects">
                <?php
                foreach($results as $value)
                {

                    echo "<option value='$value->product_id'>$value->product_id | $value->product_name</option>";

                }

                ?>
            </select>
        </div>
        <div class="sepH_b">
            <label for="raw_inventory_id" class="lbl_a">Raw Inventory</label>
            <select name="raw_inventory_id" id="raw_inventory_id">
                <?php
                foreach($result as $value)
                {

                    echo "<option value='$value->raw_inventory_id | $value->quantity'>$value->name</option>";

                }

                ?>
            </select> Quantity:<input type="text" id="quanti" value="1" name="quanti"> <button class="btn btn_d sepV_a" type="button" id="additem" onclick="addtogrid()">
            <span>Add</span>
        </button>
        </div>
        <div class="sepH_b" id="selecteditems">
            <label for="quantity" class="lbl_a"></label>
            <table border="0" width="30%" id="itemtable">

                <tr><td align="left">Name</td><td align="left">Quantity</td>
                </tr></table>

        </div>
        <div class="sepH_b" >
            <label for="quantity" class="lbl_a">Quantity</label>
            <input type="text" id="quantity" name="quantity" value="" class="inpt_a required" minlength="5" required="" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>
        <div class="sepH_b" >
            <label for="submitdate" class="lbl_a">Submit Date</label>
            <input type="text" id="submitdate" name="delivery_date" value="" class="inpt_a required" minlength="5" required="" err="Enter Valied Name" regexp="JSVAL_RX_EMAIL" />
        </div>

        <div class="lblSpace">
            <button class="btn btn_d sepV_a" type="submit">
                <span>Submit form</span>
            </button>
            <a href="#" class="vam clear_form">Clear form</a>
        </div>
    </fieldset>
</form>









