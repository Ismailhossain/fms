
                <div class="clear"></div>
                <?php if($this->session->flashdata('success_msg')){?>
                <div class="msg_box msg_ok"><?php echo $this->session->flashdata('success_msg')?></div>
                <?php }?>
                   <div class="clear"></div>
				<?php if($this->session->userdata('username')){?>
              	<div class="msg_box msg_ok"><?php echo $this->session->userdata('username')?><?php echo $this->session->unset_userdata('username'); ?></div>
             	<?php }?>

 				<div class="clear"></div>
                <?php if(validation_errors()){?>
              	<div class="msg_box msg_error"><?php echo validation_errors(); ?></div>
             	<?php }?>
 				<div class="clear"></div>
				<?php if($this->session->flashdata('delete_msg')){?>
 				<div class="msg_box msg_info"><?php echo $this->session->flashdata('delete_msg')?></div>
            	<?php }?>
 				<div class="clear"></div>
                <?php if($this->session->userdata('error_msg')){?>
 				<div class="msg_box msg_alert"><?php echo $this->session->userdata('error_msg')?><?php echo $this->session->unset_userdata('error_msg'); ?></div>
            	<?php }?>
 				<div class="clear"></div>
<!--                --><?php //if($this->session->flashdata('error_msg')){?>
<!--                <div class="msg_box msg_alert">--><?php //echo $this->session->flashdata('error_msg')?><!--</div>-->
<!--                --><?php //}?>
<!--                <div class="clear"></div> -->