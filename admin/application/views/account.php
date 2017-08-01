<!--
  
  KARYON SOLUTIONS CONFIDENTIAL
  __________________
  
    Author : Ashwin Choudhary
    Url - http://www.karyonsolutions.com  
    [2016] - [2017] Karyon Solutions 
    All Rights Reserved.
  
  NOTICE:  All information contained herein is, and remains
  the property of Karyon Solutions and its suppliers,
  if any.  The intellectual and technical concepts contained
  herein are proprietary to Karyon Solutions
  and its suppliers and may be covered by Indian and Foreign Patents,
  patents in process, and are protected by trade secret or copyright law.
  Dissemination of this information or reproduction of this material
  is strictly forbidden unless prior written permission is obtained
 from Karyon Solutions.
-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <?php if ($this->session->flashdata('error_msg') != ""){ ?>
  <div class="alert alert-warning alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Warnig!</strong> <?php echo $this->session->flashdata('error_msg');?>
</div>
<?php  } ?>
<?php if ($this->session->flashdata('success_msg') != ""){ ?>
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> <?php echo $this->session->flashdata('success_msg');?>
</div>
<?php  } ?>
<section class="content-header">
    <h1>User Profile</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/home"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">User profile</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
          <div class="box-body box-profile">
            <!-- <?php if($profileInfo['profile_image'] == 'NULL' || $profileInfo['profile_image'] == '') { ?> -->
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>images/profile_img.jpg" alt="User profile picture">
            <!-- <?php } else { ?>
            <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>images/<?php echo $profileInfo['profile_image'];?>" alt="User profile picture">
            <?php } ?> -->
            <h3 class="profile-username text-center"><?php echo $data['partyNameInfo']->FIRST_NAME;?> <?php echo $data['partyNameInfo']->LAST_NAME;?></h3>

            <p class="text-muted text-center">Admin</p>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b>Customer</b> <a class="pull-right"><?php echo $data['noOfCustomer']; ?></a>
            </li>
            <li class="list-group-item">
                <b>Driver</b> <a class="pull-right"><?php echo $data['noOfDriver']; ?></a>
            </li>
            <li class="list-group-item">
                <b>Bussiness Lister</b> <a class="pull-right"><?php echo $data['noOfBussinessLister']; ?></a>
            </li>
        </ul>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
</div>
<!-- /.col -->
<div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="<?php if($data['active'] == "time") echo "active";?>"><a href="#timeline" data-toggle="tab">Timeline</a></li>
        <li class="<?php if($data['active'] == "setting") echo "active";?>"><a href="#settings" data-toggle="tab">Basic Info</a></li>
        <li class="<?php if($data['active'] == "password") echo "active";?>"><a href="#password" data-toggle="tab">Change Password</a></li>
        <li class="<?php if($data['active'] == "address") echo "active";?>"><a href="#address" data-toggle="tab">Address</a></li>
        <li class="<?php if($data['active'] == "profilepicture") echo "active";?>"><a href="#editprofilepicture" data-toggle="tab">Edit Profile picture</a></li>
    </ul>

    <div class="tab-content">

                <div class="tab-pane <?php if($data['active'] == "password") echo "active";?>" id="password">
                    <!-- <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin_controller/updateadminpassword" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $adminbasicdata->user_id; ?>">
                        <div class="form-group">
                            <label class="col-sm-2 control-label asterisk">New Password</label>
                            <div class="col-md-10">    
                                <input type="password" class="form-control" name="newpwd" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label asterisk">Confirm New Password</label>
                            <div class="col-md-10">    
                                <input type="password" class="form-control" name="confirmnewpwd" required="required">
                            </div>
                        </div>
                        <div class="walk_request_button">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>  -->
                </div>


                <div class="tab-pane <?php if($data['active'] == "setting") echo "active";?>" id="settings">
                        <!-- <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin_controller/updateadmin" method="POST">
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">User Name</label>
                                <div class="col-md-10">
                                    <?php if(isset($adminbasicdata->username)) { ?>
                                    <input type="text" class="form-control" name="username" value="<?php if(!empty($adminbasicdata->username)) echo $adminbasicdata->username; ?>" required="required">  
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="username" required="required">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">First Name</label>
                                <div class="col-md-10">
                                    <?php if(isset($adminbasicdata->fname)) { ?>
                                    <input type="text" class="form-control" name="fname" value="<?php if(!empty($adminbasicdata->fname)) echo $adminbasicdata->fname; ?>" required="required">  
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="fname" required="required">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">Last Name</label>
                                <div class="col-md-10">
                                    <?php if(isset($adminbasicdata->lname)) { ?>
                                    <input type="text" class="form-control" name="lname" value="<?php if(!empty($adminbasicdata->lname)) echo $adminbasicdata->lname; ?>">  
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="lname">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">Email</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->email_id)) { ?>
                                    <input type="email" class="form-control" name="email" value="<?php if(!empty($contactInfo->email_id)) echo $contactInfo->email_id; ?>" required="required">
                                    <?php } else{ ?>
                                    <input type="email" class="form-control" name="email">
                                    <?php  } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">Mobile</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->mobile)) {?>
                                    <input type="text" class="form-control" name="mobile" value="<?php if(!empty($contactInfo->mobile)) echo $contactInfo->mobile; ?>" required="required">
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="mobile">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" onclick='' class="btn btn-primary">Update</button>
                            </div> 
                        </form> -->
                    </div>

                    <div class="tab-pane <?php if($data['active'] == "address") echo "active"; ?>" id="address">
                        <!-- <form method="post" class="form-horizontal" action="<?php echo base_url();?>index.php/admin_controller/updateadminaddress"> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">Address Line 1</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->address_line_1)) {?>
                                    <input type="text" class="form-control" name="address_line_1" value="<?php if(!empty($contactInfo->address_line_1)) echo $contactInfo->address_line_1; ?>" required="required">
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="address_line_1">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">Address Line 2</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->address_line_2)) {?>
                                    <input type="text" class="form-control" name="address_line_2" value="<?php if(!empty($contactInfo->address_line_2)) echo $contactInfo->address_line_2;?>">
                                    <?php } else {?>  
                                    <input type="text" class="form-control" name="address_line_2">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">city</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->city)) {?>
                                    <input type="text" class="form-control" name="city" value="<?php if(!empty($contactInfo->city)) echo $contactInfo->city;?>" required="required">
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="city" required="required">
                                    <?php } ?> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label asterisk">State</label>
                                <div class="col-md-10">
                                    <?php if(isset($contactInfo->state)) {?>                      
                                    <input type="text" class="form-control" value="<?php if(!empty($contactInfo->state)) echo $contactInfo->state;?>" name="state" requiredrequired">
                                    <?php } else { ?>
                                    <input type="text" class="form-control" name="state" required="required">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" onclick='' class="btn btn-primary">Update</button>
                            </div> 
                        </form> -->
                    </div>

                    <div class="tab-pane <?php if($data['active'] == "profilepicture") echo "active"; ?>" id="editprofilepicture">
                        <!-- <form class="form-horizontal" action="<?php echo base_url();?>index.php/admin_controller/updateadminprofilepicture" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-10">
                                    <input type="file" name="admin_image" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" required="required" multiple />
                                    <label for="file-7"><span></span> 
                                        <strong>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                            </svg> Upload Image&hellip;
                                        </strong>
                                    </label>                        
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" onclick='' class="btn btn-primary">Update</button>
                            </div>   
                        </form>  -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>  