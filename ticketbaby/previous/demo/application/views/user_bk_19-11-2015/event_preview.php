
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/new/style.css" />
<div class="container-fluid content-bg">
    <div class="container content">
        <div class="row no-mar main-content">
            <div class="col-md-4 col-sm-4 left-sidebar">
                <div class="main-thumb">
		<?php
//print_r($all_event);die('tssss');		
if($all_event){
		
		foreach($all_event as $_row_event){ 
	
				$avatar		=	$_row_event['thumb1'];
			
				if(!empty($avatar)){
					
					$url 		= 	 base_url();
					$path		=	$_SERVER['DOCUMENT_ROOT'] . "/demo/assets/upload/event/thumb/{$avatar}";
				
					if(file_exists($path)){
					
					 $img_path = $path;
				     $img_path 	=	$url. "assets/upload/event/thumb/{$avatar}";
					//echo  '<img src="'.$img_path.'" style="height:60%; width:65%; margin-left:200px; margin-top:50px;">';
					}
				}



		}
		
}
?>

                    <img src="<?php echo $img_path;?>" />
                </div>  
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="movie-video-heading">
                    <h1><?php echo $_row_event["title"]; ?></h1>
					  <!--
                    <p style="display:inline-block"><img src="images/stars.png"/></p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="display:inline-block"><img src="images/img0f.png"/></p><br/>
                    -->
                    <br/>
                </div>
                <div class="seating-text">
                    <p><?php echo $_row_event["details"]; ?></p>
					
					
					
		
                 </div>
            </div>
      
		 <div class="col-xs-12">
			
				<div class="event-info col-xs-12 ">
                	<h1 class="dark">Event Information</h1>
					<div class="col-md-0 col-lg-6 col-sm-6 col-xs-12"><br/>
						<div class="col-xs-4 orang-bk text-center">
							<strong><?php echo date('Y',strtotime($_row_event['start_date']));?><br/><?php echo date('M',strtotime($_row_event['start_date']));?></strong><br/><?php echo date('d',strtotime($_row_event['start_date']));?>
							
						</div>
						  <div class="event-info">
								
								<div class="p-no">
								<p>Venue : <?php echo $_row_event["venue"]; ?></p>
								<p>Address : <?php echo $_row_event["address"]; ?></p>
								<p>City : <?php echo $_row_event["city"]; ?></p>
								<p>Country : <?php echo $_row_event["country"]; ?></p>
								</div><br/><br/><br/><br/>
								
					
								
							</div>
						</div>
					
			
					
                </div> 
		
				 
			</div>	
             
        </div>
    </div>


</div>
 <div class="container line"></div>
     <div class="container no-pad intrest">
     	<h1>Related to your interest</h1>
     <ul id="flexiselDemo1"> 
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                           
    <li class="intrest-pic"><img src="<?=base_url()?>assets/upload/event/thumb/intrest1.png?>" />
            <p>Cowboy3 <img src="<?=base_url()?>assets/upload/event/thumb/star2.png" /></p>
     </li>
                                                        
</ul>


     </div>

