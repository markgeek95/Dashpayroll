<div class="modal fade modal-open" id="withholding_tax_delete" role="dialog">
						<div class="modal-dialog modal-sm">

							@include('messages.loader_notification')

							<div class="modal-content">
								<div class="modal-header modal-bgcolor-delete">
									<div class="modal-title mdl-title text-center">
										<strong class="font-title"> 
											<i class="fa fa-trash-o" aria-hidden="true"></i> Delete 
											<a class="btn-closing pull-right" data-dismiss="modal">
												<i class="fa fa-times" aria-hidden="true"></i>
											</a>
										</strong>
									</div>	
								</div>
								<div class="modal-body">
									<div class="container-fluid">
										<div class="row">
											<div class="col-sm-12 text-center mt-5">
												<strong> Are You Sure You Want to Delete?</strong>
											</div>
											<div class = "col-sm-12 text-center mt-20">
												<button type="button" class="btn btn-primary btn-sm"
												v-on:click.prevent="witholding_tax_delete">
													<i class="fa fa-check" aria-hidden="true"></i> Yes
												</button>
												<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">
													<i class="fa fa-times" aria-hidden="true"></i> No
												</button>
											</div>	
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>