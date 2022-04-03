<!-- Page Breadcrumb -->
<div class="page-breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?php echo site_url('admin/'); ?>">Home</a>
        </li>
        <li>Applicants</li>
        <li class="active">New</li>
    </ul>
</div>
<!-- /Page Breadcrumb -->
<!-- Page Header -->
<div class="page-header position-relative">
    <div class="header-title">
        <h1>
            Add New Applicant
        </h1>
    </div>
    <!--Header Buttons-->
    <div class="header-buttons">
        <a class="sidebar-toggler" href="#">
            <i class="fa fa-arrows-h"></i>
        </a>
        <a class="refresh" id="refresh-toggler" href="#">
            <i class="fa fa-refresh"></i>
        </a>
        <a class="fullscreen" id="fullscreen-toggler" href="#">
            <i class="fa fa-arrows-alt"></i>
        </a>
    </div>
    <!--Header Buttons End-->
</div>
<!-- /Page Header -->
<!-- Page Body -->
<div class="page-body page-<?php echo $app->getTemplate(); ?>">
	<?php $app->renderAlerts(); ?>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
              
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    
                    <div class="row">
                        <div class="col-lg-11 col-md-11 col-sm-12 col-xs-12">
                            <div class="widget flat radius-bordered">
                                <div class="widget-header bg-blue">
                                    <span class="widget-caption">Registration Form</span>
                                </div>
                                <div class="widget-body">
                                    <div id="registration-form">
                                        <form class="form" role="form" method="post" enctype="multipart/form-data">
                                        	<div class="row">
                                            	<div class="col-sm-8">
                                                	<div class="form-title">
                                                        <strong>Preferred Designation</strong>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Position</label> 
                                                                <select name="applicant[preferred-position]" style="width:100%" required>
                                                                    <option value="">-- Select position --</option>
                                                                    <?php foreach ($categories as $category): ?>
                                                                    <?php if ( count( $category['positions'] ) == 0 ) continue; ?>
                                                                    <optgroup label="<?php echo $category['category_name']; ?>">
                                                                    <?php foreach ($category['positions'] as $position): ?>
                                                                    <option value="<?php echo $position['position_id']; ?>" <?php echo isset( $post['applicant']['preferred-position'] ) && $post['applicant']['preferred-position'] == $position['position_id'] ? 'selected' : '';  ?>><?php echo $position['position_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    </optgroup>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label>Currency</label> 
                                                            <select name="applicant[currency]" required>
                                                                <option value="">-- Select Currency --</option>
                                                                <?php foreach ($currencies as $currency) { ?>
                                                                    <option><?php echo $currency->currency; ?></option>
                                                                <?php }//end foreach ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label>Expected Salary</label>
                                                                <input type="text" name="applicant[expected-salary]" class="form-control" placeholder="00.00" value="<?php echo isset( $post['applicant']['expected-salary'] ) ? $post['applicant']['expected-salary'] : ''; ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label>Other preferred positions <small><em>(Press Enter to accept position)</em></small>:</label> 
                                                                <select name="applicant[other-preferred-positions][]" multiple style="width:100%">
                                                                    <option value="">-- Select position --</option>
                                                                    <?php foreach ($categories as $category): ?>
                                                                    <optgroup label="<?php echo $category['category_name']; ?>">
                                                                    <?php foreach ($category['positions'] as $position): ?>
                                                                    <option value="<?php echo $position['position_id']; ?>" <?php echo isset( $post['applicant']['other-preferred-positions'] ) && in_array( $position['position_id'], $post['applicant']['other-preferred-positions']) ? 'selected' : '';  ?>><?php echo $position['position_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    </optgroup>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row"> 
                                                        <div class="col-sm-8">
                                                        	<hr>
                                                            <div class="form-group">
                                                                <label>Preferred country:</label> 
                                                                <select name="applicant[preferred-country]" style="width:100%" required>
                                                                    <option value="">-- Select country --</option>
                                                                    <?php foreach ($countries as $country): ?>
                                                                    <option value="<?php echo $country['country_id']; ?>" <?php echo isset( $post['applicant']['preferred-country'] ) && $post['applicant']['preferred-country'] == $country['country_id'] ? 'selected' : '';  ?>><?php echo $country['country_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label>Other preferred countries <small><em>(Press Enter to accept country)</em></small>:</label> 
                                                                <select name="applicant[other-preferred-countries][]" multiple style="width:100%">
                                                                    <option value="">-- Select country --</option>
                                                                    <?php foreach ($countries as $country): ?>
                                                                    <option value="<?php echo $country['country_id']; ?>" <?php echo isset( $post['applicant']['other-preferred-countries'] ) && in_array( $country['country_id'], $post['applicant']['other-preferred-countries']) ? 'selected' : '';  ?>><?php echo $country['country_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-sm-4">
                                                
                                                	<div class="row" >
                                                    	<div class="col-sm-10 col-sm-offset-2" align="center" style="border-left:1px dashed #999">
                                                        	<img width="100" class="img-responsive img-rounded profile-photo" src="<?php echo $app->getPath()['images']; ?>avatars/no-picture.jpg" alt="Upload photo" /><br />
                                                            <input class="hide" type="file" name="applicant[photo]"/>
                                                            <button type="button" class="btn btn-md btn-info btn-photo-browse">Browse photo ...</button>
                                                        </div> 
                                                    </div>                                                     
                                                     
                                                </div>
                                            </div>
                                        	
                                            
                                            <hr class="wide" />
                                        
                                            <div class="form-title">
                                                <strong>Basic Information</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>First name</label>
                                                        <input type="text" name="applicant[basic][first]" class="form-control input-uppercase" placeholder="" value="<?php echo isset( $post['applicant']['basic']['first'] ) ? $post['applicant']['basic']['first'] : ''; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Middle name</label>
                                                        <input type="text" name="applicant[basic][middle]" class="form-control input-uppercase" placeholder="" value="<?php echo isset( $post['applicant']['basic']['middle'] ) ? $post['applicant']['basic']['middle'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Last name</label>
                                                        <input type="text" name="applicant[basic][last]" class="form-control input-uppercase" placeholder="" value="<?php echo isset( $post['applicant']['basic']['last'] ) ? $post['applicant']['basic']['last'] : ''; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Date of birth</label>
                                                        <span class="input-icon icon-right">
                                                            <div class="input-group">
                                                                <input name="applicant[basic][birthdate]" type="text" data-date-format="yyyy-mm-dd" class="form-control date-picker" placeholder="yyyy-mm-dd" value="<?php echo isset( $post['applicant']['basic']['birthdate'] ) ? $post['applicant']['basic']['birthdate'] : date( 'Y-m-d', time() ); ?>" required>
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Civil status</label>
                                                        <select name="applicant[basic][status]" class="form-control">
                                                            <option value="Single">Single</option>
															<option value="Single With Children">Single With Children</option>
															 <option value="Separated">Separated</option>
                                                            <option value="Married">Married</option>
                                                        </select>
                                                    </div>
                                                </div>
												
												  <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Children(s)</label>
                                                        <input type="text" name="applicant[basic][applicant_children]" class="form-control" placeholder="example: 2 Girl 8 year(s) old,1 boy 2 year(s)" value="<?php echo isset( $post['applicant']['basic']['applicant_children'] ) ? $post['applicant']['basic']['applicant_children'] : ''; ?>">
                                                    </div>
                                                </div>
												
												
												
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select name="applicant[basic][gender]" class="form-control">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
												
												<div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Mother Name </label>
                                                        <input type="text" name="applicant[basic][applicant_mothers]" class="form-control" placeholder="Mother Name" value="<?php echo isset( $post['applicant']['basic']['applicant_mothers'] ) ? $post['applicant']['basic']['applicant_mothers'] : ''; ?>">
                                                    </div>
                                                </div>
												
												 <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Email <small><em>(optional)</em></small></label>
                                                        <input type="email" name="applicant[basic][email]" class="form-control" placeholder="example@domain.com" value="<?php echo isset( $post['applicant']['basic']['email'] ) ? $post['applicant']['basic']['email'] : ''; ?>">
                                                    </div>
                                                </div>
											
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="">Contact number(s) <small><em>(Press Enter to accept number)</em></small></label>
                                                        <input name="applicant[basic][contacts]" type="text" data-role="tagsinput" placeholder="Add contact number" value="<?php echo isset( $post['applicant']['basic']['contacts'] ) ? $post['applicant']['basic']['contacts'] : ''; ?>" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <input type="text" name="applicant[basic][address]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['basic']['address'] ) ? $post['applicant']['basic']['address'] : ''; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Nationality</label>
                                                        <input type="text" name="applicant[basic][nationality]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['basic']['nationality'] ) ? $post['applicant']['basic']['nationality'] : ''; ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Religion / Belief</label>
                                                        <input type="text" name="applicant[basic][religion]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['basic']['religion'] ) ? $post['applicant']['basic']['religion'] : ''; ?>" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Height</label>
                                                        <input type="text" name="applicant[basic][height]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['basic']['height'] ) ? $post['applicant']['basic']['height'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Weight</label>
                                                        <input type="text" name="applicant[basic][weight]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['basic']['weight'] ) ? $post['applicant']['basic']['weight'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-6">
                                     				<div class="form-group">
                                                        <label for="">Languages <small><em>(Press Enter to accept language)</em></small></label>
                                                        <input name="applicant[basic][languages]" type="text" value="<?php echo isset( $post['applicant']['basic']['languages'] ) ? $post['applicant']['basic']['languages'] : 'English'; ?>" data-role="tagsinput" placeholder="Add language" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                            <hr class="wide" />
                                        
                                            <div class="form-title">
                                               <strong> Passport Information</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Passport number</label>
                                                        <input type="text" name="applicant[passport][number]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['passport']['number'] ) ? $post['applicant']['passport']['number'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Expiration</label>
                                                        <span class="input-icon icon-right">
                                                            <div class="input-group">
                                                                <input name="applicant[passport][expiration]" type="text" data-date-format="yyyy-mm-dd" class="form-control date-picker" placeholder="yyyy-mm-dd" value="<?php echo isset( $post['applicant']['passport']['expiration'] ) ? $post['applicant']['passport']['expiration'] : date( 'Y-m-d', time() ); ?>">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Issue place</label>
                                                        <input type="text" name="applicant[passport][issue-place]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['passport']['issue-place'] ) ? $post['applicant']['passport']['issue-place'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Date issued</label>
                                                        <span class="input-icon icon-right">
                                                            <div class="input-group">
                                                                <input name="applicant[passport][issue]" type="text" data-date-format="yyyy-mm-dd" class="form-control date-picker" placeholder="yyyy-mm-dd" value="<?php echo isset( $post['applicant']['passport']['issue'] ) ? $post['applicant']['passport']['issue'] : date( 'Y-m-d', time() ); ?>">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr class="wide" />
                                            <div class="form-title">
                                                <strong>Educational Background</strong>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>MBA</label>
                                                        <input type="text" name="applicant[education][mba]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['mba'] ) ? $post['applicant']['education']['mba'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Course</label>
                                                        <input type="text" name="applicant[education][mba-course]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['mba-course'] ) ? $post['applicant']['education']['mba-course'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <input type="text" name="applicant[education][mba-year]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['mba-year'] ) ? $post['applicant']['education']['mba-year'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>College</label>
                                                        <input type="text" name="applicant[education][college]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['college'] ) ? $post['applicant']['education']['college'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label>Skills</label>
                                                        <input type="text" name="applicant[education][college-skills]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['college-skills'] ) ? $post['applicant']['education']['college-skills'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <input type="text" name="applicant[education][college-year]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['college-year'] ) ? $post['applicant']['education']['college-year'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Others</label>
                                                        <input type="text" name="applicant[education][others]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['others'] ) ? $post['applicant']['education']['others'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <input type="text" name="applicant[education][others-year]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['others-year'] ) ? $post['applicant']['education']['others-year'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-8">
                                                    <div class="form-group">
                                                        <label>Highschool</label>
                                                        <input type="text" name="applicant[education][highschool]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['highschool'] ) ? $post['applicant']['education']['highschool'] : ''; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <label>Year</label>
                                                        <input type="text" name="applicant[education][highschool-year]" class="form-control" placeholder="" value="<?php echo isset( $post['applicant']['education']['highschool-year'] ) ? $post['applicant']['education']['highschool-year'] : ''; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="wide" />
                                            <div class="form-title">
                                                <strong>Work Experience</strong>
                                            </div>
                                            <div class="work-experience-start">
                                                <div class="row work-experience">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Company</label>
                                                            <input type="text" name="applicant[work-experience][company][]" class="form-control" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <div class="cyd-copy-posi">
                                                                <select name="applicant[work-experience][position][]" style="width:100%">
                                                                    <option value="">-- Select position --</option>
                                                                    <?php foreach ($categories as $category): ?>
                                                                    <?php if ( count( $category['positions'] ) == 0 ) continue; ?>
                                                                    <optgroup label="<?php echo $category['category_name']; ?>">
                                                                    <?php foreach ($category['positions'] as $position): ?>
                                                                    <option value="<?php echo $position['position_name']; ?>" <?php echo isset( $post['applicant']['preferred-position'] ) && $post['applicant']['preferred-position'] == $position['position_id'] ? 'selected' : '';  ?>><?php echo $position['position_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                    </optgroup>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Salary</label>
                                                            <input type="text" name="applicant[work-experience][salary][]" class="form-control" placeholder="0.00">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label>Country</label>
                                                            <div class="cyd-copy-country">
                                                                <select name="applicant[work-experience][country][]" style="width:100%">
                                                                    <option value="">-- Select country --</option>
                                                                    <?php foreach ($countries as $country): ?>
                                                                    <option value="<?php echo $country['country_name']; ?>" <?php echo isset( $post['applicant']['preferred-country'] ) && $post['applicant']['preferred-country'] == $country['country_id'] ? 'selected' : '';  ?>><?php echo $country['country_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>From</label>
                                                            <input name="applicant[work-experience][from][]" type="text" data-date-format="yyyy-mm-dd" class="form-control input-sm date-picker work-started cyd-work-started-1" placeholder="yyyy-mm-dd" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <label>To</label>
                                                            <input name="applicant[work-experience][to][]" type="text" data-date-format="yyyy-mm-dd" class="form-control input-sm date-picker work-ended cyd-work-ended-1" placeholder="yyyy-mm-dd" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                        <div class="form-group">
                                                            <label>Years</label>
                                                            <input type="text" name="applicant[work-experience][years][]" class="form-control cyd-work-years-1" placeholder="0" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-1">
                                                    	<a href="#" role="button" class="btn btn-danger btn-xs">Remove</a>
                                                    </div>
                                                </div>
                                                <div class="work-experience-separator"></div>
                                            </div><!-- .work-experience-start -->
                                            
                                            <div>
                                            	<hr />
                                            	<a href="#" id="btn-add-work-experience" role="button" class="btn btn-xs btn-default"><i class="fa fa-plus"></i> Add work experience</a>
                                                &nbsp;<span class="pull-right">Total years experience: <span class="text-danger cyd-work-experience-years">0</span></span>
                                            </div>
                                            
                                            <hr class="wide" />
                                            
                                            <div class="form-title">
                                                <strong>Other Skills </strong>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-10">
                                     				<div class="form-group">
                                                        <label>Skills <small><em>(Press Enter to accept skills)</em></small></label>
                                                        <input name="applicant[other-skills]" type="text"  data-role="tagsinput" value="<?php echo isset( $post['applicant']['other-skills'] ) ? $post['applicant']['other-skills'] : 'cleaning the house,washing the clotthes,babysit,proper care for elders,gardening,cooking'; ?>">
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-sm-10">
                                                	<div class="form-group">
                                                        <label>Remarks <small><em>(optional)</em></small></label>
                                                        <span class="input-icon icon-right">
                                                            <textarea name="applicant[remarks]" class="form-control" rows="4" placeholder="Write some remarks..."><?php echo isset( $post['applicant']['remarks'] ) ? $post['applicant']['remarks'] : ''; ?></textarea>
                                                            <i class="fa fa-briefcase darkorange"></i>
                                                        </span>
                                                        <!--<p class="help-block">Write some remarks</p>-->
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr class="wide" />
                                            <div class="row">
                                            	<div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="applicant[type]" type="radio" value="Household" class="colored-blue" <?php echo isset( $post['applicant']['type'] ) && $post['applicant']['type'] == 'Skilled' ? '' : 'checked'; ?> >
                                                                <span class="text">Household</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input name="applicant[type]" type="radio" value="Skilled" class="colored-blue" <?php echo isset( $post['applicant']['type'] ) && $post['applicant']['type'] == 'Skilled' ? 'checked' : ''; ?> >
                                                                <span class="text">Skilled</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr class="wide" />
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Date applied</label>
                                                        <span class="input-icon icon-right">
                                                            <div class="input-group">
                                                                <input name="applicant[date-applied]" type="text" data-date-format="yyyy-mm-dd" class="form-control date-picker" placeholder="yyyy-mm-dd" value="<?php echo isset( $post['applicant']['date-applied'] ) ? $post['applicant']['date-applied'] : date( 'Y-m-d', time() ); ?>">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-calendar"></i>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Source</label>
                                                        <select name="applicant[source]" class="form-control">
                                                            <option value="0" disabled>-- Source --</option>
                                                            <option value="0" selected >DIRECT HIRE</option>
                                                            <?php foreach ( $agents as $agent ): ?>
                                                            <option value="<?php echo $agent['agent_id']; ?>" <?php echo isset( $post['applicant']['source'] ) && $post['applicant']['source'] == $agent['agent_id'] ? 'selected' : ''; ?>><?php echo $agent['agent_first'].' '.$agent['agent_last']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <hr class="wide" />
                                            <button type="reset" class="btn btn-default">Reset Form</button>
                                            <button type="submit" class="btn btn-blue">Register</button>
                                            
                                            <small><span class="pull-right">Signed in as <strong><?php echo $_SESSION['admin']['user']['user_fullname']; ?></strong> (<a href="?logout">Change user</a>)</span></small>
                                        </form>
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
<!-- /Page Body -->