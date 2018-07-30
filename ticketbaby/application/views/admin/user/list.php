<div class="row">
    <div class="col-md-5">
         <div class="panel panel-default"> 
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-users"></i><?php if(isset($user)){ echo "Edit User";} else{ echo 'Add New User';} ?></h6>
            </div> 
             <?php
             if(isset($user)){
             $url = admin_url('user_management/update');
             }else{
                 $url = admin_url('user_management/save');
             }
             ?>
             <form class="form_edit" method="post" action="<?php echo $url; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
						<label>Full Name</label>
                        <input type="text" name="name" class="form-control" value="<?php if(isset($user->name)){echo $user->name;}?>">
						<?php echo form_error('name'); ?>
						<label>User ID</label>
						<input type="text" name="username" class="form-control" value="<?php if(isset($user->username)){echo $user->username;}?>" <?php if(isset($user->username)){ echo 'readonly="readonly"';}?>>
						<?php echo form_error('username'); ?>
						<label>Email</label> 
					    <input type="text" name="email" class="form-control" value="<?php if(isset($user->email)){echo $user->email;}?>">
						<?php echo form_error('email'); ?>
						<label>Phone Number</label> 
					    <input type="text" name="phone_no" class="form-control" value="<?php if(isset($user->phone_no)){echo $user->phone_no;}?>">
						<?php if(isset($user)){ ?>
						<label>Current Password</label> 
					    <input type="password" name="current_password" id="current_password" class="form-control" value="">
						<?php echo form_error('current_password'); ?>
						<?php } ?>
						<label><?php if(isset($user)){ ?>New Password <?php } else { ?>Password <?php } ?></label> 
					    <input type="password" name="password" class="form-control" value="">
						<?php echo form_error('password'); ?>
						<label><?php if(isset($user)){ ?>Repeat New Password <?php } else { ?>Repeat Password <?php } ?></label> 
					    <input type="password" name="repeat_password" class="form-control" value="">
						<?php echo form_error('repeat_password'); ?>
                    </div>
                </div>
             </div>
               <div class="form-actions text-left "> 
						<?php if(isset($user)) { ?>
						<input type="hidden" value="<?php echo $user->id; ?>" name="id">
                        <?php } ?>
                        <input type="submit" value="<?php if(isset($user)){ $rdct = 'user_management'; echo 'Update';}else{ $rdct = ''; echo 'Add';} ?>" class="btn btn-primary"> 
                       <a href="<?php echo admin_url($rdct); ?>" class="btn btn-danger">Cancel</a> 
                       
                    </div>
            
        </form>
    </div>
          </div>

    <div class="col-md-7">
        <!-- Media datatable --> 
        <div class="panel panel-default"> 
            <div class="panel-heading">
                <h6 class="panel-title"><i class="icon-users"></i>Users List</h6>
            </div> 

            <div class="datatable"> 
                <table class="table table-bordered table-striped"> 
                    <thead> 
                        <tr> 
                            <th>S.N.</th>
							<th>User ID</th>  
							<th>Password</th>  
							<th>Full Name</th>
							<th>Last Login</th>
							<th class="actions-column">Action</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php $cnt=1; foreach ($users as $e) { ?>
                            <tr>  
                                <td>
                                    <?php echo $cnt; ?>
                                </td>
								<td>
                                    <?php echo $e->username; ?>
                                </td>
								<td>
                                    <?php echo $e->password; ?>
                                </td>
                                <td>
                                    <?php echo $e->name; ?>
                                </td>
								<td>
                                    <?php echo $e->last_login; ?>
                                </td>
                                <td class="text-center"> 
                                    <div class="btn-group"> 
                                        <button class="btn btn-default btn-icon dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></button>
                                        <ul class="dropdown-menu icons-right dropdown-menu-right">
                                            <li><a href="<?php echo admin_url('user_management/edit/'.$e->id) ?>"><i class="icon-pencil2"></i> Edit </a></li>
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#DeletModel_<?php echo $e->id; ?>" ><i class="icon-remove4"></i> Remove </a></li>
                                        </ul> 
                                    </div> 
                                </td> 
                            </tr>
							<div class="modal fade" id="DeletModel_<?php echo $e->id; ?>" role="dialog">
							  <div class="modal-dialog"> 
								<!-- Modal content to Delete -->
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title"><img src="http://ticketbaby.co.uk/assets/images/logo_popup.png"><span style="font-size:30px;padding-left:110px;">Baby Alert!</span></h4>
								  </div>
								  <div class="modal-body">
									<form action="<?php echo admin_url('user_management/delete/'.$e->id) ?>" method="get" id="DeleteForm_<?php echo $e->id; ?>">
									<div class="row">
									  <div class="col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
										<h1 style="text-align:center;"><img src="http://ticketbaby.co.uk/assets/images/lock.jpg">&nbsp;&nbsp;&nbsp;&nbsp;PASSWORD REQUIRED</h1>
								        </div>
								      </div>
								   </div>
									<div class="row">
									  <div class="col-md-12 col-sm-12 col-xs-12">
										<div class="form-group">
											<br>
											<input class="form-control" placeholder="password" type="password" name="user_password_<?php echo $e->id; ?>" id="user_password_<?php echo $e->id; ?>">
										</div>
									  </div>
									</div>
								  </div>
								  <div class="modal-footer">
									<button type="button" onclick="javascript: SubmitPassword(<?php echo $e->id; ?>);" class="btn btn-primary">Proceed</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								  </div>
								  </form>
								</div>
							  </div>
							</div>
                        <?php $cnt++; } ?>
                    </tbody> 
                </table> 
            </div> 
        </div> 

    </div>
</div>
<script type="text/javascript">
//Confirm Password to Delete record
function SubmitPassword(id) {
	var formID = $("#DeleteForm_" + id).serialize();
	var Passwrd = $("#user_password_" + id).val();
	if(Passwrd!=""){
		$.ajax({
			type: 'POST',
			dataType: 'json',
			url: '<?php echo admin_url("orders/ConfirmPassword/") ?>' + '/' + id,
			data: formID,
			success: function(response) {
				if(response=='Confirmed'){
					$('#DeletModel_'+ id).modal('hide');
					$("#DeleteForm_"+id).submit();
				}
				else{
					alert("Invalid Password!");
					return false;
				}
			}
		});
	}
	else{
		alert("Please Enter Password!");
		return false;
	}
}
</script>