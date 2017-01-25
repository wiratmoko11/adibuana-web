<!-- Main content -->
			<div class="content-wrapper">

				<!-- Horizontal form options -->
				<div class="row">
				
					<div class="col-md-12">

						<!-- Static mode -->
						<form class="form-horizontal" action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">View <?php echo $katagori->title_eng ?></h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="reload"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									
                                    <div class="form-group">
										<label class="col-lg-3 control-label">Title (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $katagori->title_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Title (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $katagori->title_eng ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Lead (Indonesia)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $katagori->lead_ina ?></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-lg-3 control-label">Lead (English)</label>
										<div class="col-lg-9">
											<div class="form-control-static"><?php echo $katagori->lead_eng ?></div>
										</div>
									</div>

								</div>
							</div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->
			</div>
			<!-- /main content -->