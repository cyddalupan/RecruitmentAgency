<!-- Page Breadcrumb -->
<div class="page-breadcrumbs">
    <ul class="breadcrumb">
        <li>
            <i class="fa fa-home"></i>
            <a href="<?php echo site_url('admin/'); ?>">Home</a>
        </li>
        <li class="active">Marketing Agencies</li>
    </ul>
</div>
<!-- /Page Breadcrumb -->

<!-- Page Header -->
<div class="page-header position-relative">
    <div class="header-title">
        <h1>
            Marketing Agencies
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
        <div class="col-xs-12 col-md-12">
            <div class="widget">
                <div class="widget-header  with-footer">
                    <span class="widget-caption">
                        <a href="#" role="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#modalAddMarketingAgency"><i class="fa fa-plus"></i> Add marketing agency</a>
                    </span>
                    <div class="widget-buttons">
                        <a href="#" data-toggle="maximize">
                            <i class="fa fa-expand"></i>
                        </a>
                        <a href="#" data-toggle="collapse">
                            <i class="fa fa-minus"></i>
                        </a>
                        <a href="#" data-toggle="dispose">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped ">
                            <thead class=" bordered-palegreen">
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Marketing Agency</th>
									<th>Contact Person</th>
                                    <th>Contacts</th>
                                    <th>Email</th>
                                    <th>Referred employers</th>
                                    <th>Address</th>
                                    <th>Created</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $ctr = $paginationCounter['from']; ?>
                                <?php foreach ($agencies as $agency): ?>
                                <tr>
                                    <td>
                                        <?php echo str_pad( $ctr, 3, '0', STR_PAD_LEFT); ?>
                                    </td>
                                    <td>
                                        <?php echo $agency['agency_name']; ?>
                                    </td>
									<td>
                                        <?php echo $agency['agency_contact_person']; ?>
                                    </td>
                                    <td>
                                        <?php echo str_replace(',', ' / ', $agency['agency_contacts'] ); ?>
                                    </td>
                                    <td>
                                        <a href="mailto:<?php echo $agency['agency_email']; ?>"><?php echo $agency['agency_email']; ?></a>
                                    </td>
                                    <td>
                                        <?php echo number_format( $agency['employers'] ); ?>    
                                    </td>
                                    <td>
                                        <?php echo $agency['agency_address']; ?>
                                    </td>
                                    <td>
                                        <small><?php echo date( 'M-d-Y h:ia', strtotime( $agency['agency_created'] ) ); ?></small>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-default btn-xs black btn-edit-marketing-agency" data-toggle="modal" data-target="#modalEditMarketingAgency" data-marketing-agency="<?php echo (int) $agency['agency_id']; ?>"><i class="fa fa-pencil"></i> Edit</a>
                                    </td>
                                </tr>
                                <?php $ctr++; ?>
                                <?php endforeach; ?>
                                <?php if ( count( $agencies ) == 0 ): ?>
                                <tr>
                                    <td align="center" colspan="7">-- No marketing agencies --</td>
                                </tr>
                                <?php endif; ?>
                            </tbody>
                        </table> 
                    </div>
                    <hr>
                    <div class="footer" align="right">
                        <span class="pull-left">
                           Showing <?php echo $paginationCounter['from']; ?> to <?php echo $paginationCounter['to']; ?> of <?php echo $paginationCounter['total-records']; ?> entries
                        </span>
                        <?php echo $paginationHTML; ?>
                        <div class="clearfix"></div>
                    </div> 
                </div> 
            </div>
            
            
        </div>
        
    </div>
    
</div>
<!-- /Page Body --> 