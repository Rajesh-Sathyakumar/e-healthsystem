<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <?php 
                if($role == ROLE_STATE_ADMIN)
                {
                    ?>
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>sendNotification" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">To</label>
                                        <input type="text" class="form-control required" value="<?php echo set_value('fname'); ?>" id="fname" name="fname" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="fname">Message</label>
                                     <textarea type="text" class="form-control" id="comments" name="comments" placeholder="Enter your remarks here" required="true"></textarea>
                                 </div>
                    </div>
                                </div>
                            </div>
                                
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Send" />
                        </div>
                    </form>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="box box-primary">
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">                                
                                    <div class="form-group">
                                        <label for="fname">From</label>
                                        <input type="text" class="form-control required" value="<?php echo $notification->name;?>" id="fname" name="fname" maxlength="128" disabled="true">
                                    </div>
                                    
                                </div>
                                <div class="col-md-12">
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label for="fname">Message</label>
                                             </div>
                                     <textarea type="text" class="form-control"  id="comments" name="comments" disabled="true"><?php echo $notification->message; ?></textarea>
                                
                                </div>
                                </div>
                            </div>
                        </div>
                                
                        <!-- <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Send" />
                        </div> -->
                    </form>
                </div> 
                <?php   
            }
            ?>
            </div>
           
        </div>    
    </section>
    
</div>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/conditional-field.js" type="text/javascript"></script>
  <script>
$(document).ready(function(){

 new ConditionalField({
  control: '.select-field',
  visibility: {
    '3': '.3',
    '2': '.2',
    '5': '.5'
  }
});

});
</script>

