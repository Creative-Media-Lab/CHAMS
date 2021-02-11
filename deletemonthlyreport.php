<div class="modal custom-modal fade" id="delete_monthlyreport<?php echo $row['MonthlyReportID']?>" role="dialog">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-header">
									<h3>Delete Employee</h3>
									<p>Are you sure want to delete?</p>
								</div>
								<div class="modal-btn delete-action">
									<div class="row">
										<div class="col-6">
											<input type="hidden" name="ProfileID" value="<?php echo $row['ProfileID']?>"/>
											<form action="deletemonthlyreport1.php"> 
											<button name="delete" class="btn btn-primary submit-btn"><span class="glyphicon glyphicon-edit"></span> Delete</button>
											<form/>
										</div>
										<div class="col-6">
											<a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>