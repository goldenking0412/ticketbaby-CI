<div class="container-fluid content-bg">
    <div class="container content">
        <div class="row no-mar main-content">
            <div class="col-md-4 col-sm-4 left-sidebar">
                <div class="main-thumb">
                    <img src="<?=base_url()?>assets/upload/event/thumb/<?php echo $event["thumb1"]; ?>" />
                </div>  
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="movie-video-heading">
                    <h1><?php echo $event["title"]; ?></h1>
                    <h2>price - &pound; <?php echo $event["min_unit_price"]; ?> - &pound; <?php echo $event["max_unit_price"]; ?> </h2>
                    <!--
                    <p style="display:inline-block"><img src="images/stars.png"/></p>&nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="display:inline-block"><img src="images/img0f.png"/></p><br/>
                    -->
                    <br/>
                </div>
                <div class="seating-text">
                    <p><?php echo $event["details"]; ?></p>
                 </div>
            </div>
            <div class="col-xs-12">
            
                <div class="Music-info col-xs-12 ">
                    <h1 class="dark">Music Information</h1>
                </div>  

                <div class="col-md-6 col-xs-12">

                <div class="Music-info"><br/>
                    <div class="col-xs-4 orang-bk text-center">
                    <strong><?php echo strtoupper($event["start_date_month"]); ?><br/><?php echo $event["start_date_date"]; ?></strong><br/><?php echo strtoupper(substr($event["start_date_day"],0,3)); ?>
                    </div>
                    <div class="p-no">
                    <p>Venue : <?php echo $event["venue"]; ?></p>
                    <p>Address : <?php echo $event["address"]; ?></p>
                    <p>City : <?php echo $event["city"]; ?></p>
                    <p>Country : <?php echo $event["country"]; ?></p>
                    </div><br/><br/><br/>
                </div>


                <div class="table-only">
                    <h1>TICKETS - choose your section</h1>
                    <ul>
                        <li class="row"> 
                        <label class="col-md-12 col-sm-12 col-xs-12"> 
                            <strong class="col-md-3 col-sm-3 col-xs-3 text-center">Type</strong>
                            <strong class="col-md-5 col-sm-5 col-xs-5 text-center" >Price</strong>
                            <strong class="col-md-4 col-sm-4 col-xs-4 text-center">Available</strong>
                        </label>
                        </li>
                        <?php foreach ($event_seats as $events_item): if($events_item['ticket_section_section'] == "ticket") { 
                            $avaialble_ticket =  ($events_item['group_unit_total']-sizeof($events_item['occupied_seat_numbers'])) / $events_item['unit_min_purchase'];
                        ?>
                        <li class="row">
                            <input class="col-md-1 col-sm-1 col-xs-1" type="radio" data-Music="<?php echo $events_item['event_id'] ?>" data-ticket-class="<?php echo $events_item['ticket_class_id'] ?>" name="seat_ticket" <?php if (intval($avaialble_ticket) < 1){ echo "disabled";} ?> />
                            <label class="col-md-4 col-xs-10"><strong><?php echo $events_item['ticket_class_title']; ?></strong></label>
                            <label class="col-md-4"><em>&pound; <?php echo $events_item['unit_price'] * $events_item['unit_min_purchase']; ?></em></label>
                            <label class="col-md-3 text-center"><?php echo $avaialble_ticket;  ?></label>
                        </li>
                        <?php } endforeach ?>
                    </ul>
                </div>

                <!--   
                <div class="table-only">
                    <h1>Select Quantity</h1>
                    <ul>
                        <li class="row">
                        <div class="form-group col-md-4 col-xs-10">
                            <select class="selectpicker show-tick form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                            </select>
                        </div>
                        <p class="col-md-8 col-sm-8 toppad">Adult Type &pound;26.50 (&pound;25.00 ticket price + &pound; 1.50 fees)</p>
                        </li>
                    </ul>
                </div>   
                -->
                
                <div class="table-only outer-additional">
                    <h1>Additionals</h1>
                    <ul>
                        <li class="row">
                            <p class="col-xs-12">None</p>
                        </li>
                    </ul>
                </div>
                
                <div class="table-only qty">
                    <h1>
                        <ul>
                            <li class="col-md-2 col-xs-2">&nbsp;</li>
                            <li class="col-md-3 col-xs-3">Table Type</li>
                            <li class="col-md-4 col-xs-4">Unit/Price</li>
                            <li class="col-md-3 col-xs-3">Total</li>
                            <div class="clearfix"></div>
                        </ul>
                    </h1>
                    <div class="session-cart-list text-center">
                    Empty!
                    </div>

                </div>
                
                <div class="note">
                    <div class="row no-mar">
                        <div class="col-md-2 col-sm-4 col-xs-3 ii">
                            <p>i</p>
                        </div>
                        <div class="col-md-10 col-sm-8 col-xs-9 ii-text">
                            <p>Your order may be subject to a fulfilment fee or postage fee it will be added to your shopping basket</p>
                        </div>
                    </div>
                </div>
                
                <div class="row no-mar"><br/>
                    <div class="col-md-4 col-xs-2"></div>
                    <div class="col-md-4 col-sm-12 col-xs-8 btn btn-danger btn-orang button-add-to-cart">
                       Add to basket
                    </div>
                    <div class="col-md-3 col-xs-2"></div>
                </div>
                
            </div>

            <?php if( trim($event["youtube_url"]) ) { ?>
            <div class="col-md-6 col-xs-12"><br/><br/>
                <div class="col-xs-12 well" style="padding:0;">
                    <iframe width="100%" height="315" src="<?=$event["youtube_url"];?>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <?php } ?>

            </div>
        </div>
    </div>


</div>

