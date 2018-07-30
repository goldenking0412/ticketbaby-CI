<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
<!-- jQuery library -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jscript.js"></script>

<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo1").flexisel();
});
</script>
<script src="js/bootstrap-select.js"></script>

<!--CALL PAGE TAB CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/typography.css">
<!--CALL PAGE TAB CSS -->


</head>
<div class="container-fluid content-bg">
	<div class="col-xs-12">
	<center>
		<img src="<?php echo base_url();?>assets/images/nimg05.png" class="img-responsive"/>
	</center>
	</div>
</div>
<div class="container-fluid content-bg">
<div class="container">
	<div class="col-md-3 col-xs-12">
		<form id='search_top_category' action="<?php echo base_url();?>index.php/music/music">
		<div class="col-xs-12 content2 form-horizontal pad-lr">
		<div class="col-xs-12 bgGr13">
			<h4><span class="text-orang"><strong>Shop for Events</strong></span></h4>
		</div>
				 <div class="form-group">
                    <label>Category</label>
                    <?php
					
                        $category_id = isset($data_catge) ? $data_catge['cat_id'] : 0;
						
                    ?>
                    
            
                    <select name="category_id" class="form-control">
					<option value="" selected="selected">Select Category</option>
				
                        <?php
						
						
					    foreach($category_name  as $k=>$row) 
						{
                            if ( $category_id == $cat_id[$k] ) {
                                echo "<option selected value=".$cat_id[$k].">".$row."</option>"; 
                            }else {    
                                echo "<option value=".$cat_id[$k].">".$row."</option>";    
                            }                  
                        }
						?>  
					</select>
                    </div>
			
		
			<div class="form-group ">
				<label class="col-md-2">From</label>

				<div class="col-md-9 col-md-offset-1">
					<div class="controls input-append date form_date" data-date="" data-date-format="dd M yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" placeholder="10/2/2015" id="start_date" name="start_date"  value="<?php echo $start_date;?>" >
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"><img src="<?php echo base_url();?>assets/images/calender.png"/></i></span>
				</div>
				</div>
			</div>
			<div class="form-group ">
				<label class="col-md-2">To</label>
				<div class="col-md-9 col-md-offset-1">
				  <div class="controls input-append date form_date" data-date="" data-date-format="dd M yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" placeholder="10/2/2015" id='end_date' name="end_date"  value="<?php echo $end_date;?>" >
                    <span class="add-on"><i class="icon-remove"></i></span>
					<span class="add-on"><i class="icon-th"></i>  <img src="<?php echo base_url();?>assets/images/calender.png"/></span>
				</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12">
					<input type="text" class="form-control" name='city' value="<?php echo $city;?>" placeholder="Phoenix & Tucson">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-12 text-right">
					<button class="btn btn-primary btn-blue" type="submit" >GO</button>
				</div>
			</div>
		</div>
		</form>
	
		<div class="col-xs-12">&nbsp;</div>
		
		<div class="col-xs-12 content2 pad-lr">

		<div class="col-xs-12 bgGr12">
			<h4>Local Venues</h4>
		</div>
					 <?php
		// print_r($home_page_event_list);die('test');
			if($home_page_event_list){
                foreach ($home_page_event_list as $event_item):
                 
				 $href_start	=	'';
				 $href_end		=	'';
				 if ( $event_item['ticketseatrows'] > 0 ) { 
				 // print_r($home_page_event_list);die('test');
					$base_url	=	base_url();
					$href_start	=	"<a href='{$base_url}index.php/event/{$event_item['slug']}/music' title='{$event_item['title']}'>";
					$href_end	=	"<a>";
				 }
				
	
				$thumb1_recommended_carousel	=	$event_item['thumb1_recommended_carousel'];
							if($thumb1_recommended_carousel){
								$img	=	base_url()."assets/upload/event/thumb/".$thumb1_recommended_carousel; 
							}	
						
                
               ?>
			<p class="hasBottomBorder"><span class="text-orang"><?php echo $href_start;  echo $event_item['venue']; echo $href_end;?>	</span> <br/></p>
			<!--p class="hasBottomBorder"><span class="text-orang">ASU Gammage</span> <br/>12 Events</p>
			<p class="hasBottomBorder"><span class="text-orang">Chandler Centre for the Arts</span> <br/>12 Events</p>
			<p class="hasBottomBorder"><span class="text-orang">Talking Stick Resort</span> <br/>12 Events</p>
			<p style="padding-bottom:0;padding-top:10px;"><span class="text-orang"><strong>More Venues</strong></span></p>
			<p class="hasBottomBorder"><span class="text-orang">Centennial Hall</span> <br/>12 Events</p-->
			
<?php  endforeach;
            }else{
			echo "No event found.";
			}
							?>
							

	    </div>
			
		
		<div class="col-xs-12">&nbsp;</div>
		<img src="<?php echo base_url();?>assets/images/img002.jpg" class="img-responsive"/>
	</div>	
	
    
    
	<div class="col-md-6 col-xs-12">
		<img src="<?php echo base_url();?>assets/images/nimg08.png" class="img-responsive"/><br/><br/>
					
						
		<div id="slist2"  class="owl-carousel">
		 
			<?php
			$home_page_event_list = isset($home_page_event_list) ? $home_page_event_list : '';
			
		 	//echo "<pre>";print_r($home_page_event_list);die;
			if($home_page_event_list){
				
                foreach ($home_page_event_list as $event_item):
                 
				 $href_start	=	'';
				 $href_end		=	'';
				 $img = '';
				 if ($event_item['ticketseatrows']) { 
				 //print_r($home_page_event_list);die('test');
					$base_url	=	base_url();
					$href_start	=	"<a href='{$base_url}index.php/event/{$event_item['slug']}/music' title='{$event_item['title']}'>";
					$href_end	=	"</a>";
				 }
				//echo "<pre>"; print_r($event_item);
	
				if($event_item['thumb1_main_carousel'] != ''){
					$img	=	base_url()."assets/upload/event/thumb/".$event_item['thumb1_main_carousel']; 
				}	
							 //echo $href_start;
				?>	
		 	<div class="item">
			<?php ?>
			  <img src="<?php echo $img;?>" width='100%' style="height: 130px;" class="img-responsive" alt="<?php echo $event_item['slug']; ?>"/>
			  <br/>
			  <small><strong><span class="text-orang"> <?php  echo  word_limiter($event_item['title'],2);?></span></strong><br/></small>
			  <img src="<?php echo base_url();?>assets/images/star2.png" class="img-responsive" alt=""/>
			<?php ?>
			</div>
		<?php 
                 echo $href_end;
                endforeach;
            }else{
			echo "No event found.";
			}?>
		</div>
		
        <div class='tabs tabs_default'>
                <ul class='horizontal'>
                    <li><a href="#tab-1">Event List</a></li>
                    <li><a href="#tab-2">Hot Tickets</a></li>
                </ul>
                
            <div id='tab-1'>
            	<?php
					if(!empty($getEventIdsByCategoryId)){
						foreach($getEventIdsByCategoryId as $eventId){
							
							$eventDetails = get_event_by_id($eventId['event_id']);
							
							if(!empty($eventDetails)){
							
			   ?>
               				<div class="col-xs-12 bgGray3 form2"><br/>
								<div class="col-sm-2 col-xs-12"><br/>
									<div class="col-xs-4 orang-bk2 text-center">
										<small><?php echo date('M',strtotime($eventDetails[0]->start_date));?></small><br/><strong><big><?php echo date('d',strtotime($eventDetails[0]->start_date));?></big></strong><br/><small><?php echo date('Y',strtotime($eventDetails[0]->start_date));?></small>
									</div>
								</div>
								<div class="col-sm-7 col-xs-12 bgWhite-o2">
									<small>
									<span class="text-orang">
                                    	<?php echo $eventDetails[0]->title; ?>
										<?php echo character_limiter($eventDetails[0]->summary,10);?><br/>
									</span><br/>
									<strong><?php echo $eventDetails[0]->venue;?></strong><br/>
									</small>
								</div>
								<div class="col-sm-3 col-xs-12 bgGray2"><br/>
									<a href="<?php echo base_url()?>index.php/event/<?php echo $eventDetails[0]->slug; ?>">
                                    	<button class="btn btn-primary btn-blue btn-xs">View Details</button>
                                    </a>
								</div>
							</div>
                <?php   	
							}
						}
					}else{
						echo '<h3>No Event Found!!!</h3>';
					}
				
				?>
            
            </div>
            <div id='tab-2'>
            	 <?php
				 //print_r($home_page_event_list);die('test');
					if($home_page_event_list){
						foreach ($home_page_event_list as $event_item):
						 
						 $href_start	=	'';
						 $href_end		=	'';
						 if ($event_item['ticketseatrows']) { 
						 //print_r($home_page_event_list);die('test');
							$base_url	=	base_url();
							$href_start	=	"<a href='{$base_url}index.php/event/{$event_item['slug']}/music' title='{$event_item['title']}'>";
							$href_end	=	"</a>";
						 }
						 if($event_item['show_hot_ticket']=='Y'){
							echo $href_start; 
						 ?>
					<div class="col-xs-12 bgGray3 form2"><br/>
					<div class="col-sm-2 col-xs-12"><br/>
						<div class="col-xs-4 orang-bk2 text-center">
							<small><?php echo date('M',strtotime($event_item['start_date']));?></small><br/><strong><big><?php echo date('d',strtotime($event_item['start_date']));?></big></strong><br/><small><?php echo date('Y',strtotime($event_item['start_date']));?></small>
						</div>
					</div>
					<div class="col-sm-7 col-xs-12 bgWhite-o2">
						<small>
						<span class="text-orang"><?php echo character_limiter($event_item['summary'],10);?><br/>
						</span><br/>
						<strong><?php echo $event_item['category_name'];?></strong><br/>
						</small>
					</div>
					<div class="col-sm-3 col-xs-12 bgGray2"><br/>
						<button class="btn btn-primary btn-blue btn-xs">SEE tickets</button>
					</div>
					
				</div>
		<?php 
						 echo $href_end;}else {echo "No hot ticket";}
						endforeach;
					}else{
					echo "No event found.";
					}
				  ?>

            </div>
            
        </div>     
     
        
		<div class="col-xs-12">&nbsp;</div>
		<!--<div class="col-xs-12 bgGr1">
			<button class="btn btn-black-g btn-lg noBtmRad">Event List</button>
		</div>	-->
		



			
		</div>
		<div class="col-md-3 col-xs-12 noTble">
		<img src="<?php echo base_url();?>assets/images/nimg06.png" class="img-responsive"/><br/><br/>
		<img src="<?php echo base_url();?>assets/images/nimg07.png" class="img-responsive"/>
		<div class="col-xs-12">&nbsp;</div>
		<div class="col-xs-12 content2 pad-lr">
		<div class="col-xs-12 bgGr12">
			<h4><img src="<?php echo base_url();?>assets/images/nimg13.png" style="margin-top:-5px;"/> Friends on Ticketmast</h4>
		</div>
			<p>facebook API</p>
			<table class="table">
				<tr>
					<td><img src="<?php echo base_url();?>assets/images/nimg09.png" class="img-responsive"/></td>
					<td><a href="#"><small>One Direction</small></a></td>
					<td class="text-center"><strong>70561</strong><br/><small class="sm">RSVPs</small></td>
				</tr>
				<tr>
					<td><img src="<?php echo base_url();?>assets/images/nimg10.png" class="img-responsive"/></td>
					<td><a href="#"><small>Garth Brooks</small></a></td>
					<td class="text-center"><strong>35426</strong><br/><small class="sm">RSVPs</small></td>
				</tr>
				<tr>
					<td><img src="<?php echo base_url();?>assets/images/nimg11.png" class="img-responsive"/></td>
					<td><a href="#"><small>Fleetwood Mac</small></a></td>
					<td class="text-center"><strong>46082</strong><br/><small class="sm">RSVPs</small></td>
				</tr>
			</table>
			<p class="text-right"><a href="#">More Artists >></a></p>
			<img src="<?php echo base_url();?>assets/images/nimg12.png" class="img-responsive" style="margin-bottom:-20px;"/>
		</div>
		<div class="col-xs-12">&nbsp;</div>
		<div class="col-xs-12 content2 pad-lr">
		<div class="col-xs-12 bgCian">
			<h4>my TICKET BABY</h4>
		</div>
			<p>
			<small>Hello,</br>
			Update your list favourites and never</br>
			miss an event!</br><br/>
			<a href="<?=base_url()?>index.php/user/login""><span class="text-orang">Sign in</span></a> or <a href="<?=base_url()?>index.php/user/registration""><span class="text-orang">Create Account</span></a></small>
			</p>
		</div>
	</div>
</div>
</div>


    
<link href="<?php echo base_url();?>assets/date/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets/date/css/font-awesome.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="<?php echo base_url();?>assets/date/main/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/date/main/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/date/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/date/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">

    $('.form_datetime').datetimepicker({
        //language:  'fr',
		dateFormat: 'yy-mm-dd',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        dateFormat: 'yy-mm-dd',
		language:  'hi',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
       language:  'en',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
<script>
$(document).ready(function(){

	$("li a").each(function() {
		var href	=	$(this).attr('href');
		if(typeof href === 'undefined'){
			$(this).hide();		
		}
		
	});
		
});
</script>
