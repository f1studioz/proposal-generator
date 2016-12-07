<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic | Form Wizard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo">
        <!-- BEGIN CONTAINER -->
        <div class="wrapper">
            <!-- BEGIN HEADER -->
            <!-- END HEADER -->
            <div class="container-fluid">
                <div class="page-content">
                    <!-- BEGIN BREADCRUMBS -->
                    <div class="breadcrumbs">
                        <h1>Proposal Generator</h1>
                    </div>
                    <!-- END BREADCRUMBS -->
                    <!-- BEGIN SIDEBAR CONTENT LAYOUT -->
                    <div class="page-content-container">
                        <div class="page-content-row">
                            <!-- BEGIN PAGE SIDEBAR -->
                            <!-- END PAGE SIDEBAR -->
                            <div class="page-content-col">
                                <!-- BEGIN PAGE BASE CONTENT -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered" id="form_wizard_1">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class=" icon-layers font-red"></i>
                                                    <span class="caption-subject font-red bold uppercase"> Form Wizard -
                                                        <span class="step-title"> Step 1 of 4 </span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form class="form-horizontal" action="#" id="submit_form" method="POST">
                                                    <div class="form-wizard">
                                                        <div class="form-body">
                                                            <ul class="nav nav-pills nav-justified steps">
                                                                <li>
                                                                    <a href="#tab1" data-toggle="tab" class="step">
                                                                        <span class="number"> 1 </span>
                                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Company Details </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                                        <span class="number"> 2 </span>
                                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Additional Details </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#tab3" data-toggle="tab" class="step active">
                                                                        <span class="number"> 3 </span>
                                                                        <span class="desc">
                                                                            <i class="fa fa-check"></i> Pricing Details </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div id="bar" class="progress progress-striped" role="progressbar">
                                                                <div class="progress-bar progress-bar-success"> </div>
                                                            </div>
                                                            <div class="tab-content">
                                                                <div class="alert alert-danger display-none">
                                                                    <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                                                <div class="alert alert-success display-none">
                                                                    <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                                                <div class="tab-pane active" id="tab1">
                                                                    <h3 class="block">Provide your account details</h3>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Company Name
                                                                            <span class="required"> * </span>
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control" id="CompanyName" name="CompanyName" value="">
                                                                            <span class="help-block"> Provide your username </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Company Registered Name
                                                                            <span class="required"> * </span>
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control" id="CompanyRegisteredName" name="CompanyRegisteredName" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Company POC Designation
                                                                            <span class="required"> * </span>
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control" id="CompanyPOCDesignation" name="CompanyPOCDesignation">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label col-md-3">Project Name
                                                                            <span class="required"> * </span>
                                                                        </label>
                                                                        <div class="col-md-4">
                                                                            <input type="text" class="form-control" id="ProjectName" name="ProjectName">
                                                                            <span class="help-block"> Provide your Project Name </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab2">
                                                                    <h3 class="block">Provide your profile details</h3>

                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Deliverables
                                                                                    <span class="required"> * </span>
                                                                                </label>
                                                                                <div class="col-md-6">
                                                                                    <textarea spellcheck="false" id="Deliverable" name="">
                                                                                        <ol>
                                                                                            <li>Web Application Design</li>
                                                                                            <li>Mobile Design of the application (Responsive)</li>
                                                                                            <li>UI code (HTML / CSS)</li>
                                                                                        </ol>
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Scope
                                                                                    <span class="required"> * </span>
                                                                                </label>
                                                                                <div class="col-md-6">
                                                                                    <textarea spellcheck="false" id="Scope" name="">
                                                                                        <strong>UX Design</strong>
                                                                                            <ul>
                                                                                            <li>Information Architecture</li>
                                                                                            <li>VisualDesign Website</li>
                                                                                            <li>Visual Design – Mobile </li>
                                                                                            </ul>
                                                                                            <p>UI Implementation</p>
                                                                                            <ul>
                                                                                            <li>Responsivewebsiteimplementation</li>
                                                                                            <li>Technologies – HTML5/CSS/Bootstrap</li>
                                                                                            </ul>
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="control-label col-md-3">Functionality
                                                                                    <span class="required"> * </span>
                                                                                </label>
                                                                                <div class="col-md-6">
                                                                                    <textarea spellcheck="false" id="Functionality" name="">
                                                                                        <strong>User</strong>
                                                                                            <ul>
                                                                                                <li>Registration</li>
                                                                                                <li>Login/Logout</li>
                                                                                                <li>Navigate/Search associated public entities and Institutions</li>
                                                                                                <li>Request for associated forms related to institutions</li>
                                                                                                <li>View my and my family's (associated) M4C profile</li>
                                                                                                <li>Sharing information with others through M4C (Identity Transaction)</li>
                                                                                                <li>Receive information from others (Inbox)</li>
                                                                                                <li>View SmartContracts and make payment to Institutions (Institution Transaction)</li>
                                                                                                <li>Make Payments</li>
                                                                                                <li>Notifications</li>
                                                                                            </ul>
                                                                                            <p>Institution</p>
                                                                                            <ul>
                                                                                                <li>Registration</li>
                                                                                                <li>Login/Logout</li>
                                                                                                <li>Create and/or assign authorize roles to associated individuals within institution</li>
                                                                                                <li>Navigate / Search associated public entities</li>
                                                                                                <li>Upload/Update forms – Admission etc/.</li>
                                                                                                <li>Manage filled forms and shared info by others to institution (Identity Transaction)</li>
                                                                                                <li>Receive information from others (Inbox)</li>
                                                                                                <li>Update document shared by others (vaccination redbook etc.)</li>
                                                                                                <li>Send information to others (provisional admission letters, send invoice etc.)</li>
                                                                                                <li>Make Payments</li>
                                                                                                <li>Notifications</li>
                                                                                            </ul>
                                                                                    </textarea>
                                                                                </div>
                                                                            </div>
                                                                </div>
                                                                <div class="tab-pane" id="tab3">
                                                                    <h3 class="block">Provide your billing and credit card details</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-actions">
                                                            <div class="row">
                                                                <div class="col-md-offset-3 col-md-9">
                                                                    <a href="javascript:;" class="btn default button-previous">
                                                                        <i class="fa fa-angle-left"></i> Back </a>
                                                                    <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                                                        <i class="fa fa-angle-right"></i>
                                                                    </a>
                                                                    <a href="javascript:;" class="btn green button-submit"> Submit
                                                                        <i class="fa fa-check"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PAGE BASE CONTENT -->
                            </div>
                        </div>
                    </div>
                    <!-- END SIDEBAR CONTENT LAYOUT -->
                </div>
            </div>
        </div>
        <script type="text/javascript">
          var baseurl = "http://localhost/proposal-generator/metronic/";
        </script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/html-docx.js"></script>
        <script src="js/Blob.js"></script>
        <script src="js/FileSaver.js"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="js/additional-methods.min.js" type="text/javascript"></script>
        <script src="js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <script src="js/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="js/app.min.js" type="text/javascript"></script>
        <script src="js/form-wizard.min.js" type="text/javascript"></script>
    </body>

</html>