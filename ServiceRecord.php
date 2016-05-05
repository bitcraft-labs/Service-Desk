<!DOCTYPE html>
<!--
Project:    Bitcraft Service Desk (An Open Source ITSM Web App)
Lead Devs:  Joshua Nasiatka, Allen Perry, Eugene Duffy
For:        Software Engineering
Dev Date:   Spring 2016
Status:     Staging; Idea Testing; Development
-->
<?php
  // ini_set('display_errors', 1);
  include("modules/mainhead.php");

  if ($myACL->hasPermission('hd_portal') != true) {
    header("location: /");
    exit;
  }

  if (isset($_POST['submit_note'])) {
    $dali->submitNewNote($_GET['sr'], $_SESSION['userID'], $_POST['owner'], $_POST['subject'], $_POST['note_editor']);
  }

  if(isset($_GET['sr']) && is_numeric($_GET['sr']) ) {
  	if(!$dali->doesSRExist($_GET['sr'])) {
  		header("location: /");
  		exit;
  	}
  }

  include_once 'modules/head.php';
  echo "<body class='hold-transition skin-$skin sidebar-mini'>
    <div class='wrapper'>";
	// build the user interface
	include_once 'modules/header.php';
	include_once 'modules/left_sidebar.php';
	?>

		<div class="content-wrapper">
      		<div class="ssp-title hd">
	          <h3>
	            <?php
	            $sr = $_GET['sr'];
				if ($sr == "all") {
					$now = getdate();
					$now = array($now[mday]-1,$now[mon],$now[year]);
					echo "<i class='fa fa-table fa-2x pull-left'> </i>All Service Records<br><small>As of $now[1]-$now[0]-$now[2]</small>";
				} elseif (isset($sr) && is_numeric($sr)) {
	              echo "<i class='fa fa-pencil-square-o fa-2x pull-left'> </i>Service Record: $sr<br><small>Yes, every thing you do is neccessary to be written down</small>";
	            } elseif (isset($sr) && $sr == 'new'){
	              echo "<i class='fa fa-pencil-square-o fa-2x pull-left'> </i>Add New Service Record<br><small>Don't forget any valuable information</small>";
	            } elseif ($_GET['page'] == "configure") {
	              echo "<i class='fa fa-cog fa-2x pull-left'> </i>Service Desk Configuration<br><small>Configure all da things!</small>";
	            }
	    				else
	    					echo "Welcome to Service Record Central";
	            ?>
	    	  </h3>
      		</div>

			<section class="content">
				<div class="row">
					<div class="col-xs-12">
					  <?php //Show all service records ?>
					  <?php if ($sr == "all") { ?>
					    	<table id="records" class="table table-bordered table-striped">
					    		<thead>
                    	<?php $thead = "
					    			<tr>
					    				<th class='padding_fix'>SR#</th>
					    				<th class='padding_fix'>Category</th>
					    				<th class='padding_fix'>Status</th>
					    				<th class='padding_fix'>Requester</th>
					    				<th class='padding_fix'>Assigned Admin</th>
					    				<th class='padding_fix'>User Type</th>
					    				<th class='padding_fix'>Date Checked In</th>
					    				<th class='padding_fix'>Date Last Updated</th>
					    			</tr>"; echo $thead; ?>
					    		</thead>
					    		<tbody>
					    			<?= $dali->buildSRTicketHd($sr); ?>
					    		</tbody>
					    		<tfoot>
                    <?= $thead ?>
					    		</tfoot>
				    		</table>
		    		  <?php }
		    		  //show individual service record
		    		  else if (isset($sr) && is_numeric($sr)) {
		    		  	$info = $dali->buildSRTicketViewHd($sr);
		    		  	?>

		    		  	<!-- User info -->
		    		  	<div id="user_contact" class="col-md-6">
		    		  		<div class="box box-solid box-purple">
							  <div class="box-header with-border">
							  <h3 class='box-title'><i class='fa fa-user'> </i> Contact Information</h3>
							   <div class="box-tools pull-right">
							      <!--<span class="label label-success">Student</span>-->
							   </div><!-- /.box-tools -->
							  </div>
							  <div class="box-body">
						      	<div class="col-md-8"> <!-- Problem -->
						      		<h4 style="font-weight: bold;"><?= $info['person_info'][1] . ' ' . $info['person_info'][2]; ?></h4>
						      		<!-- email -->
						            <div class="form-group">
						              <label>Primary Email:</label>
						              <div class="input-group">
						                <div class="input-group-addon">
						                  <i class="fa fa-envelope"></i>
						                </div>
						                <input type="text" class="form-control" value="<?= $info['person_info'][3]; ?>" data-inputmask='"mask": "__@__.__"' data-mask disabled>
						              </div><!-- /.input group -->
						            </div><!-- /.form group -->
								    <!-- phone -->
						            <div class="form-group">
						              <label>Primary Phone:</label>
						              <div class="input-group">
						                <div class="input-group-addon">
						                  <i class="fa fa-phone"></i>
						                </div>
						                <input type="text" class="form-control" value="<?= $info['person_info'][8]; ?>" data-inputmask='"mask": "(999) 999-9999"' data-mask disabled>
						              </div><!-- /.input group -->
						            </div><!-- /.form group -->
								    <!-- banner id -->
                        <div class="form-group">
                          <label>Banner ID:</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                            <i>@</i>
                            </div>
                            <input type="text" class="form-control" value="<?= $info['person_info'][10]; ?>" data-inputmask='"mask": "@12345678"' data-mask disabled>
                          </div>
                        </div>
  							 	    </div>
		    		  		  </div>
                  </div>
                </div>

		    		  	<!-- Specific info -->
		    		  	<div id="specific_info" class="col-md-6">
		    		  		<div style="height: inherit;"class="box box-solid box-purple">
							  <div class="box-header with-border">
							  	<?= $info['side_title']; ?>
							  </div>
							  <div class="box-body">
						     	<?= $info['side']; ?>
						      </div>
						    </div>
						</div>
						<div class="col-md-12">
							<div class="box box-solid box-purple">
							  <div class="box-header with-border">
							   <?= $info['title'] ?>
							    <div class="box-tools pull-right">
							      <!--<span class="label label-success">Student</span>-->
							    </div><!-- /.box-tools -->
							  </div><!-- /.box-header -->
							  <div class="box-body">
						      <div class="col-md-8"> <!-- Problem -->
						        <p><strong>Problem:</strong> <?= $info['problem']; ?></p>
						        <p><strong>Additional Details:</strong></p>
						        <textarea style="padding: 10px; border-radius: 5px; resize: none;" class="form-control" name="addl_details" id="" cols="111" rows="4" disabled><?= $info['description']; ?></textarea>
						      </div> <!-- /Problem -->
						      <div class="col-md-4"> <!-- Submission Notes -->
						        <p>Assigned to: <?= $info['assigned_admin']; ?><br /> <!-- Added to array later -->
						          Submitted by: <?= $info['submitted_by']; ?><br />
						          Submitted: <?= $info['submitted_when']; ?></p>
						        <p><?= $dali->getQRCode(); ?> Scan to mobile</p>
								    <p>Last Updated: <?= $info['last_updated']; ?></p>
						        <!--<p><img src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fhelpdesk.bitcraftlabs.net%2FServiceRecord.php%3Fsr%3Dnew%26type%3D1&chs=180x180&choe=UTF-8&chld=L|2' width="120" alt="qr" /> Scan to mobile</p>-->
						      </div> <!-- /Submission notes -->
						      <div style="margin-top: -30px;" class="col-md-12">
                    <!-- Notes -->
						        <h4><strong>Notes:</strong></h4>
                    <p id="notes_section"><?= $dali->getNotes($sr); ?></p>
						      </div>

							  </div><!-- /.box-body -->
							  <div class="box-footer">
							  	<!-- Implement way to add another comment -->
                  <div class="col-md-12" id="new_note_container">
                    <form action="" method="post">
                      <!-- <div class="form-control"> -->
                        <label for="subject">Subject</label>
                        <input type="text" name="subject" class="form-control input-md" placeholder="Subject" value="RE: <?= $info['problem'] ?>"><br>
                        <input type="hidden" name="owner" value="<?= $info['person_info'][0] ?>">
                        <textarea id="note_editor" name="note_editor"></textarea><br>
                        <button type="submit" name="submit_note" class="btn btn-custom">Add Note</button>
                      <!-- </div> -->
                    </form>
                  </div>
							    <button style="margin: 10px;" type="button" class="btn btn-custom" onclick="add_note()" id="note_btn">Add note</button>
							  </div><!-- box-footer -->
							</div><!-- /.box -->
						</div><!-- /checkup -->
						<!-- Implement way to add another comment -->
						<div class="col-sm-4">
							<button style="margin: 5px;" type="button" class="btn btn-custom" onclick="">Save</button>
							<button style="margin: 5px;" type="button" class="btn btn-custom" onclick="javascript:window.print();">Print</button>
						</div>
		    		  	<?php
		    		  } elseif (isset($sr) && ($sr == "new")) {
			                $type = $_GET['type'];
			                if (isset($type) && ($type == '1')){
			                  include_once 'modules/service_record/templates/computer_repair.php';
			                } else {
			                  include_once 'modules/service_record/templates/sr_new.php';
			                }
			              } elseif ($_GET['page'] == "configure") {
			                echo "the configuration page will be here";
					    		  } else {
					    		  	//show welcome page
					    		  	echo "<p>You have reached this page in error</p>";
					    		  	echo "<p>Please return to the <a href='./'>Dashboard</a> or <a href='ServiceRecord.php?sr=all'>Search for a Record</a></p>";
					    		  	echo "<script type='text/javascript'>window.location.href = './';</script>";
		    		  		}
		    		  ?>

				    </div>
			    </div>
			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->
		<?php
		include_once 'modules/footer.php';
		include_once 'modules/control_sidebar.php'; ?>
    </div><!-- ./wrapper -->
    <?php //if ($includeModal) {
      include_once 'modules/service_record/machine.php';
    //}?>

    <!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery -->
    <script src="bower/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bower/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="bower/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
    <script src="bower/AdminLTE/plugins/datatables/dataTables.bootstrap.js"></script>
    <!-- SlimScroll -->
    <script src="bower/AdminLTE/plugins/slimScroll/jquery.slimscroll.js"></script>
    <!-- FastClick -->
    <script src="bower/AdminLTE/plugins/fastclick/fastclick.min.js"></script>
    <!-- Select2 -->
    <script src="bower/AdminLTE/plugins/select2/select2.min.js"></script>
    <!-- AdminLTE App -->
    <script src="bower/AdminLTE/dist/js/app.min.js"></script>
    <!-- Note Handler -->
    <?php if (isset($_GET['sr']) && is_numeric($_GET['sr'])) {
      echo '<script src="dist/js/new_note.js"></script>';
      echo '<script src="bower/ckeditor/ckeditor.js"></script>';
      echo '<script>CKEDITOR.replace("note_editor")</script>';
    }?>
    <!-- page script -->
    <?php
    if($_GET['sr'] == 'new') {
   		echo '<script src="dist/js/generate_sr.js"></script>';
   	}
   	?>
    <script>
      $(function () {
        $('#records').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "order" : [[0, "desc"]],
          "info": true,
          "autoWidth": false
        });
      });

      $(function() {
        $("#sr_type").select2();
        $("#sr_cat").select2();
        $("#sr_subcat").select2();
        $(".building").select2();
        $(".user-list").select2();
        $(".machine").select2();
        $(".request-type").select2();
      });
     $('#sdesk ul').toggle(200);$('#sdesk').addClass("active"); 
     $(".clickableRow").on("click",function() {
	      if (this.parentNode.parentNode.getAttribute("id") === "downloads") {
	        window.open($(this).attr("data-href"),"_blank");
	      } else {
	        document.location = $(this).attr("data-href");
	      }
	    });
     jQuery(document).ready(function($) {
      	$("#incident_building").css("display", "none");
      	$("#machine_display").css("display", "none");
      	var height = $("#user_contact").css("height");
      	var regex = /px/;
      	var check = regex.exec(height);
      	if(check) var h = height.substring(0, check.index);
      	$("#specific_info").css("height", h - 20 + "px");
      	$("#sdesk li").hover(function () {
	      $(this).addClass("active");
	    }, function () {
	      $(this).removeClass("active");
	    });
	    $("#ddesk li").hover(function () {
	      $(this).addClass("active");
	    }, function () {
	      $(this).removeClass("active");
	    });
      $("#new_note_container").hide();
      });
    </script>
    <?php
    include_once 'modules/modals.php'; ?>
  </body>
</html>
