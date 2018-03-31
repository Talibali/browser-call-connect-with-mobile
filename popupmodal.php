<!-----------Model------------------->
                                                       <?php
                                                     
                                                           require_once '../twiliolib/call1.php';
                                                         ?> 
							<div id="myModal" class="modal fade" role="dialog">
								<div class="modal-dialog" style="width:69%;">
								<!-- Modal content-->
								<div class="modal-content row">
                                                               
								<div class="modal-header" >
								<?php if(!$status){
                                                                  
								?>
								<div class="row">
								<div class="col-sm-8"><strong>Call on the below contact. Show some result now !</strong></div>
								<div class="col-sm-4 custom-cpop">
								<!--<button type="button" class="btn btn-warning" onclick="callCustomer(document.getElementById('caller_id').value);" id='call_btn'><i id='refresh'></i>&nbsp;&nbsp;Call1 Now</button>-->
<button type="button" class="btn btn-success" onClick="call(document.getElementById('prospectphone').value);" id='call_btn'><i id='refresh'></i>&nbsp;&nbsp;Start Call</button>
<button type="button"  class="btn btn-warning cp-endcall" onClick="hangup();" id='call_btn'><i id='refresh'></i>&nbsp;&nbsp;End call</button>
								
								</div>
</div>