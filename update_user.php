<div class="modal custom-modal fade" id="update_modal<?php echo $row['ProfileID']?>" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<form method="POST" action="updateprofilemodal1.php">
				<div class="modal-header">
					<h5 class="modal-title">Edit Employee</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-6">
						<div class="form-group">
								<label class="col-form-label">First Name</label>
							<input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
							<input type="text" name="FirstName" value="<?php echo $row['FirstName']?>" class="form-control" required="required"/>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label">Lastname</label>
							<input type="text" name="LastName" value="<?php echo $row['LastName']?>" class="form-control" required="required" />
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" name="Username" value="<?php echo $row['Username']?>" class="form-control" onkeypress="return AvoidSpace(event)"required="required"/>
						</div>
						</div>
						<div class="col-sm-6">
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="text" name="Email" value="<?php echo $row['Email']?>" class="form-control" required="required"/>
						</div>
						</div>
					</div>

				<div class="submit-section">
					<button name="submit3" class="btn btn-primary submit-btn"><span class="glyphicon glyphicon-edit"></span> Update</button>
				</div>
				</div>		</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
      function AvoidSpace (event){
        var k = event ? event.which : window.event.keyCode;
        if (k==32) return false;
      }
    </script>