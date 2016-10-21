<div class="col-lg-4">

                                <!-- Progress counters -->
                                <div class="row">
                                    <div class="col-md-12">
                                    	

                                        <!-- Available hours -->
                                        <div class="panel text-center">
                                        	Monday, 20th Novermber 2015
                                            
                                        </div>
                                        <!-- /available hours -->

                                    </div>

                                    
                                </div>
                                <!-- /progress counters -->

                                <!-- Daily sales -->

                                <!-- /daily sales -->

                                <!-index-- My messages -->
                                <div class="panel panel-flat">
                                    

                                  
                                    <!-- Area chart -->
                                    <div id="messages-stats"></div>
                                    <!-- /area chart -->

                                    <!-- Tabs -->
                                    <ul class="nav nav-lg nav-tabs nav-justified no-margin no-border-radius bg-indigo-400 border-top border-top-indigo-300">
                                        <li class="active">
                                            <a href="#messages-tue" class="text-size-small text-uppercase" data-toggle="tab"> Feeds </a>
                                        </li>

                                      
                                    </ul>
                                    <!-- /tabs -->

                                    <!-- Tabs content -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fade in has-padding" id="messages-tue">
                                            <ul class="media-list">
                                                
                                                
                                                <?php 
												$query_feeds = mysql_query("SELECT * FROM examresults INNER JOIN users ON examresults.username=users.username ORDER BY examresults.id DESC LIMIT 4");
												if(!$query_feeds){
													echo mysql_error();
												}
												
												while($row1 = mysql_fetch_assoc($query_feeds)){
													
												

												?>
                                                 
                                                 <li class="media" style="border-left: solid 5px #ddd; box-shadow: 2px 2px 2px #888888;border-bottom-right-radius:5px;border-top-right-radius:5px">
                                                	<div >
    
                                                	</div>
                                                    <div class="media-body"style='border: solid 1px #ddd;padding:10px;;'>
                                                        <a href="#"> <?php echo $row1['firstname']." ".$row1['lastname'];?><span class="media-annotation pull-right">14:58</span> </a>
                                                        <div style="clear: both;"></div>
                                                        <div class="display-block text-muted pull-left">Attempted <strong style="color:red;"><?php echo $row1['subjects']?>  </strong> in  <strong style="color:red;"><?php echo strtoupper($row1['cat']);?> </strong> 
                                                        </div>
                                                        <div class="display-block text-muted pull-right"><?php echo $row1['percentage'];?> </div>
                                                    </div>
                                                </li>
                                                <?php }?>

                                                </ul>
                                        </div>

                                        

                                        
                                    </div>
                                    <!-- /tabs content -->

                                </div>
                                <!-- /my messages -->

                                <!-- Daily financials -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">Sponsored Ad</h6>
                                        <img src="images/ad.jpg"  width="350" height="200"/><br /><br />
                                        
                                         <img src="images/ad.jpg"  width="350" height="200"/>
                                        
                                    </div>

                                    <div class="panel-body">
                                        <div class="content-group-xs" id="bullets"></div>

                                       
                                    </div>
                                </div>
                                <!-- /daily financials -->

                            </div>