<style>
.message{
    width: 43%;
    height: 10px;
    margin-left: 412px;
}
</style>
<?php $this->load->helper('url');?>
<div class="container-fluid content-bg">
  <div class="container content">
       
  
<form class="form-horizontal" name="form" id="" method="POST" action="<?php echo base_url();?>index.php/user/edit_user_detail">   
		
        <div class="row no-mar main-content leftPad">
			<div class="col-md-6 col-xs-12">
				<h2 class="text-orange">Dashboard - Edit Profile</h2>
			</div>
			<div class="col-md-6 col-xs-12 text-right"><br/>
				<!-- <button class="btn btn-success btn-lg">Profile Settings</button> -->
			</div>
			<div class="col-xs-12">
				<nav class="navbar navbar-default subNav">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#subNav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>
                    <div class="collapse navbar-collapse" id="subNav">
                      <ul class="nav navbar-nav">
                        <li class="<?php if($this->router->fetch_method()=='editProfile'){ echo "userActiveMenu"; } ?> " ><a href="<?php echo base_url();?>index.php/user/editProfile"><i class="glyphicon glyphicon-list-alt"></i> Account Details</a></li>
						<li><a href="<?php echo base_url();?>index.php/user/order_detail"><i class="glyphicon glyphicon-tasks"></i> Order Details</a></li>
						<li><a href="<?php echo base_url();?>index.php/user/my_event"><i class="glyphicon glyphicon-calendar"></i> My Events</a></li>
					    <?php if($user_name!=''){ ?>
                        <li>
                            <a href="<?php echo base_url();?>index.php/Event/add_event"><i class="glyphicon glyphicon-calendar"></i> Create An Event</a>
                        </li>
                        <?php } ?>
                       </ul>                                                                   
					  <ul class="nav navbar-nav navbar-right">
					  <li class="dropdown">
						<a href="" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon glyphicon-cog"></i>&nbsp;<?php echo  (
						$user_name);?><b class="caret"></b></a>
						<ul class="dropdown-menu"> 
							<li><a href="<?php echo base_url();?>index.php/user/logout"><i class="glyphicon glyphicon-log-in"></i> Logout</a></li>
							<li><a href="<?php echo base_url();?>index.php/user/editProfile"><i class="glyphicon glyphicon-pencil"></i> Edit Profile</a></li>
						</ul>
					  </li> 
					  </ul>
                    </div>
                </nav>
			</div>
			

			<div class="col-xs-12"><hr/></div>
	
			<div class="col-xs-12">
				<ol class="breadcrumb">
				  <li><a href="<?php echo base_url();?>index.php/cart/home">Home</a></li>
				 <li><a href="<?php echo base_url();?>index.php/cart/home">Dashboard</a></li>
				  <li class="active">Edit Profile</li>
				</ol>
			</div>
			<div class="message">
					<?php 
				
				  if($this->session->flashdata('error')) { ?>                    
                        <p style="color:red">
                            <?php echo $this->session->flashdata('error');?>
                        </p>                   
                    <?php } 
					 elseif($this->session->flashdata('success')) { ?>                    
                        <p style="color:green">
                            <?php echo $this->session->flashdata('success');?>
                        </p>                   
                    <?php }?>
					</div>
			<div class="col-xs-12">
					<input type="hidden" name="user_ids" value="<?php echo $id;?>">
	
					<div class="form-group cus-form4">
						<label class="col-md-2">Username</label>
						<div class="col-md-10">
							<input type="text" class="form-control" value="<?php echo $user_name;?>"placeholder="anaszaman" name="user_name"   />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Full name</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="Anas Zaman" name="first_name" value="<?php echo ucwords($first_name);?>" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Email</label>
						<div class="col-md-10">
							<input type="email" class="form-control" placeholder="anaszaman.az@gmail.com" value="<?php echo $email;?>"  name="email" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Address</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="Blah Blah" value="<?php echo ucfirst($address);?>" name="address"  />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">City</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="California" value="<?php echo ucfirst($city);?>" name="city" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Area</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="Backers Road" value="<?php echo ucfirst($area);?>" name="area" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Country</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="United States" value="<?php echo ucfirst($country);?>" name="country" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Phone Number</label>
						<div class="col-md-10">
							<input type="text" class="form-control" placeholder="9999999999" value="<?php echo $phone;?>"  name="phone" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Password</label>
						<div class="col-md-10">
							<input type="password" class="form-control" placeholder="*****" name="password" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<label class="col-md-2">Retype Password</label>
						<div class="col-md-10">
							<input type="password" class="form-control" placeholder="*****" 	name="con_password" />
						</div>
					</div>
					<div class="form-group cus-form4">
						<div class="col-md-2">
							
						</div>
						<div class="col-md-10">
						 <input type="Submit" name="update" class="btn btn-warning btn-block" value="Save">
							
						</div>
					</div>
				
			</div>
        </div>

        </form>
    </div> <!-- container ends -->
</div> <!-- Main div ends -->
