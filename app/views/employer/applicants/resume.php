<div class="row">
	<div class="col-md-12">
		<!-- Resume starts -->
		<div class="resume">
			<?php $app->
			renderAlerts(); ?>
			<div class="row">
				<div class="col-md-12">
					<h2><?php echo $applicant['applicant_first'].' '.$applicant['applicant_last']; ?> <span class="rsmall"><span class="color">@</span> <?php echo $applicant['position_name']; ?></span></h2>
				
					<hr/>
					<!-- Resume -->
					<div class="row">
						<div class="col-md-12">
                            <!-- Preferred Designation -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
								

										<h4>Preferred Designation</h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
                                            <div class="row">
											<div class="col-sm-12" style="text-align:right">
												<?php if ( is_file( DIR_UPLOADS.'applicant'.DIRECTORY_SEPARATOR.$applicant['applicant_photo'] ) ): ?>
												<img src="<?php echo base_url(); ?>files/applicant/<?php echo $applicant['applicant_photo']; ?>" alt="" class="header-avatar profile-photo" style="width:150px"/>
												<?php else: ?>
												<img src="<?php echo $app->getPath()['images']; ?>avatars/no-picture.jpg" alt="" class="header-avatar profile-photo" style="width:150px"/>
												<?php endif; ?>
												<div class="clearfix"></div>
											     </div>
                                                <div class="col-sm-3" >
												
									

												 <span class="field">Preferred position:</span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description"><?php echo $applicant['position_name']; ?></span>
                                                </div>
												<div class="col-sm-12" style="text-align:LEFT">
												<?php if($applicant['applicant_position_type']!='Skilled') { ?>
													<span class="field">Contact No:</span>
													</div>
													<div class="col-sm-9" >
														<span class="description"><?php echo $applicant['applicant_contacts']; ?></span>
													</div>
												<div class="clearfix"></div>
											     </div>	
												<?php } ?>
												
                                                
                                                <div class="clearfix"></div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Other preferred positions:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <?php $positions = []; ?>
                                                    <?php foreach ( $applicant['other-preferred-positions'] as $position ): ?>
                                                    <?php $positions[] = $position['position_name']; ?>
                                                    <?php endforeach; ?>
                                                    <span class="description">
                                                        <small><?php echo implode( ',&nbsp;', $positions ); ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
										
                                            
                                            
										</div>
									</div>
								</div>
							</div>
                            
							<!-- About -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>About <?php echo $applicant['applicant_first']; ?></h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <h5><small>Name:</small></h5>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <h5><?php echo $applicant['applicant_first'].' '.$applicant['applicant_last']; ?></h5>
                                                </div>
                                            </div>
                                            
											<div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Date of birth:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_birthdate']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Civil status:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_civil_status']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Gender:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_gender']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                         
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Address:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_address']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Nationality:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_nationality']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Belief/Religion:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_religion']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Height:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_height']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Weight:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['applicant_weight']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Languages:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo str_replace( ',', ',&nbsp;', $applicant['applicant_languages'] ); ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
										</div>
									</div>
								</div>
							</div>
                            
                            <!-- Passport -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>Passport</h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
                                        
											<div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Passport number:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['passport_number']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-3" >
                                                    <span class="field"><small>Date of expiration:</small></span>
                                                </div>
                                                <div class="col-sm-9" >
                                                    <span class="description">
                                                        <small><?php echo date( 'd M Y', strtotime( $applicant['passport_expiration'] ) ); ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
										</div>
									</div>
								</div>
							</div>
                            
							<!-- Education -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>Education</h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
                                        
											<div class="row">
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>MBA:</small></span>
                                                </div>
                                                <div class="col-sm-4" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_mba']; ?></small>
                                                    </span>
                                                </div>
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Course:</small></span>
                                                </div>
                                                <div class="col-sm-3" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_mba_course']; ?></small>
                                                    </span>
                                                </div>                                                
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Year:</small></span>
                                                </div>
                                                <div class="col-sm-2" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_mba_year']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="dashed"></div>
                                            
                                            <div class="row">
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>College:</small></span>
                                                </div>
                                                <div class="col-sm-4" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_college']; ?></small>
                                                    </span>
                                                </div>
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Course:</small></span>
                                                </div>
                                                <div class="col-sm-3" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_college_skills']; ?></small>
                                                    </span>
                                                </div>                                                
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Year:</small></span>
                                                </div>
                                                <div class="col-sm-2" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_college_year']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="dashed"></div>
                                            
                                            <div class="row">
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Others:</small></span>
                                                </div>
                                                <div class="col-sm-8" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_others']; ?></small>
                                                    </span>
                                                </div>                                               
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Year:</small></span>
                                                </div>
                                                <div class="col-sm-2" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_others_year']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="dashed"></div>
                                            
                                            <div class="row">
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>H.School:</small></span>
                                                </div>
                                                <div class="col-sm-8" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_highschool']; ?></small>
                                                    </span>
                                                </div>                                               
                                                <div class="col-sm-1" >
                                                    <span class="field"><small>Year:</small></span>
                                                </div>
                                                <div class="col-sm-2" >
                                                    <span class="description">
                                                        <small><?php echo $applicant['education_highschool_year']; ?></small>
                                                    </span>
                                                </div>
                                            </div>
                                            
										</div>
									</div>
								</div>
							</div>

                            <!-- Work Experiences -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>Work Experiences</h4>
									</div>
									<div class="col-md-9">
                                        <div class="rinfo">
                                            <?php if ( empty($applicant['experiences'] ) ): ?>
                                                -- No working experiences --
                                            <?php endif; ?>
                                            <?php foreach ( $applicant['experiences'] as $experience ): ?>
											<div class="row">
                                                <div class="col-sm-12" >
                                                    <div>
                                                        <span class="description"><small><?php echo $experience['experience_company']; ?></small></span>
                                                    </div>
                                                    <div class="rmeta"><strong><?php echo $experience['experience_position']; ?></strong> for <?php echo $experience['experience_years']; ?> years</div>
                                                    <p><?php echo $experience['experience_from']; ?> &minus; <?php echo $experience['experience_to']; ?>, &#8369; <?php echo number_format( $experience['experience_salary'], 2 ); ?></p>
                                                </div>
                                            </div>                                           
                                            
                                            <?php endforeach; ?>                                          
                                            
										</div>
									</div>
								</div>
							</div>
                            
							<!-- Skills -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>Other Skills</h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
											<!-- Class "rskills" is important -->
											<div class="rskills">
                                                <?php if ( empty( $applicant['applicant_other_skills'] ) ): ?>
                                                No more other skills defined
                                                <?php endif; ?>
                                                <?php foreach ( explode( ',', $applicant['applicant_other_skills'] ) as $skill ): ?>
												<span><?php echo $skill; ?></span>&nbsp;
                                                <?php endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Remarks -->
							<div class="rblock">
								<div class="row">
									<div class="col-md-3">
										<h4>Remarks</h4>
									</div>
									<div class="col-md-9">
										<div class="rinfo">
											<!-- Class "rskills" is important -->
											<div class="rskills">
												<?php echo $applicant['applicant_remarks']; ?>
											</div>
										</div>
									</div>
								</div>
							</div>

                            <!-- Remarks -->
                            <div class="rblock">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4>Files</h4>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="hidden" class="applicant_id" value="<?php echo $applicant['applicant_id']; ?>" />
                                        <div class="rinfo">
                                            <!-- Class "rskills" is important -->
                                            <div class="rskills cyd_output_files">
                                                Loading...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Resume ends -->
		<!-- CTA starts -->
		<div class="cta">
			<div class="row">
				<div class="col-sm-6">
					<!-- First line -->
					<p class="cbig">
						Download applicant's resume
					</p>
					<!-- Second line -->
					<p class="csmall">
						Click 'PDF' or 'DOCX' button to download the resume
					</p>
				</div>
				<div class="col-sm-4" align="right">
					<!-- Button -->
                    <a href="<?php echo site_url( 'public/applicants/pdf/'.$applicant['applicant_slug'] ); ?>" target="_blank" class="btn btn-md btn-danger">PDF</a>
                    <?php if ( empty( $resume ) ): ?>                    
              
           
                    <?php else: ?>
                    <a href="#" class="btn disabled btn-md btn-danger">PDF</a>
                    <a href="<?php echo base_url().$resume['file_path']; ?>" class="btn btn-md btn-info">DOCX</a>
                    <?php endif; ?>
                </div>
                <div class="col-sm-2 pull-right" align="center">
                    <a href="javascript:window.close()" class="btn btn-md btn-default">Close</a>
				</div>
			</div>
		</div>
		<!-- CTA Ends -->
	</div>
</div>
