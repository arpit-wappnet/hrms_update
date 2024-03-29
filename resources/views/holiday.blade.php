@extends('layouts.main')
@section('main-container').
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<body>
<!-- Preloader -->
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
  </div>
  <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top m-b-0">
      <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part"><a class="logo" href="index.html"><b><!--This is dark logo icon--><img src="{{url('plugins/images/eliteadmin-logo.png')}}" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{url('plugins/images/eliteadmin-logo-dark.png')}}" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="{{url('plugins/images/eliteadmin-text.png')}}" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{url('plugins/images/eliteadmin-text-dark.png')}}" alt="home" class="light-logo" /></span></a></div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
          <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
          <li>

          </li>
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
          <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu mailbox animated bounceInDown">
              <li>
                <div class="drop-title">You have 4 new messages</div>
              </li>
              <li>
                <div class="message-center"> <a href="#">
                  <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                  <div class="mail-contnet">
                    <h5>Pavan kumar</h5>
                    <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                  </a> <a href="#">
                  <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                  <div class="mail-contnet">
                    <h5>Sonu Nigam</h5>
                    <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                  </a> <a href="#">
                  <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                  <div class="mail-contnet">
                    <h5>Arijit Sinh</h5>
                    <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                  </a> <a href="#">
                  <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                  <div class="mail-contnet">
                    <h5>Pavan kumar</h5>
                    <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                  </a> </div>
              </li>
              <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
            </ul>
            <!-- /.dropdown-messages -->
          </li>
          <!-- /.dropdown -->
          <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
            </a>
            <ul class="dropdown-menu dropdown-tasks animated slideInUp">
              <li> <a href="#">
                <div>
                  <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                  </div>
                </div>
                </a> </li>
              <li class="divider"></li>
              <li> <a href="#">
                <div>
                  <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                  </div>
                </div>
                </a> </li>
              <li class="divider"></li>
              <li> <a href="#">
                <div>
                  <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                  </div>
                </div>
                </a> </li>
              <li class="divider"></li>
              <li> <a href="#">
                <div>
                  <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                  <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                  </div>
                </div>
                </a> </li>
              <li class="divider"></li>
              <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
            </ul>
            <!-- /.dropdown-tasks -->
          </li>
          <!-- /.dropdown -->
          <!-- .Megamenu -->
          <li class="mega-dropdown">
            <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
            <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header">Forms Elements</li>
                  <li><a href="form-basic.html">Basic Forms</a></li>
                              <li><a href="form-layout.html">Form Layout</a></li>
                  <li><a href="form-advanced.html">Form Addons</a></li>
                  <li><a href="form-material-elements.html">Form Material</a></li>
                  <li><a href="form-upload.html">File Upload</a></li>
                  <li><a href="form-mask.html">Form Mask</a></li>
              <li><a href="form-img-cropper.html">Image Cropping</a></li>
                  <li><a href="form-validation.html">Form Validation</a></li>

                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header">Advance Forms</li>
                  <li><a href="form-dropzone.html">File Dropzone</a></li>
                  <li><a href="form-pickers.html">Form-pickers</a></li>
                              <li><a href="form-wizard.html">Form-wizards</a></li>
              <li><a href="form-typehead.html">Typehead</a></li>
                  <li><a href="form-xeditable.html">X-editable</a></li>
              <li><a href="form-summernote.html">Summernote</a></li>
                  <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                  <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>

                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header">Table Example</li>
                  <li><a href="basic-table.html">Basic Tables</a></li>
                  <li><a href="data-table.html">Data Table</a></li>
                  <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                  <li><a href="responsive-tables.html">Responsive Tables</a></li>
                  <li><a href="editable-tables.html">Editable Tables</a></li>
                  <li><a href="foo-tables.html">FooTables</a></li>
                  <li><a href="jsgrid.html">JsGrid Tables</a></li>
                </ul>
              </li>
              <li class="col-sm-3">
                <ul>
                  <li class="dropdown-header">Charts</li>
                  <li> <a href="flot.html">Flot Charts</a> </li>
                  <li><a href="morris-chart.html">Morris Chart</a></li>
                  <li><a href="chart-js.html">Chart-js</a></li>
                  <li><a href="peity-chart.html">Peity Charts</a></li>
                  <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                  <li><a href="extra-charts.html">Extra Charts</a></li>
                </ul>
              </li>
              <li class="col-sm-12 m-t-40 demo-box">
                 <div class="row">
                    <div class="col-sm-2"><div class="white-box text-center bg-purple"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-inverse/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 1</a></div></div>
                    <div class="col-sm-2"><div class="white-box text-center bg-success"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 2</a></div></div>
                    <div class="col-sm-2"><div class="white-box text-center bg-info"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-ecommerce/index.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 3</a></div></div>
                    <div class="col-sm-2"><div class="white-box text-center bg-inverse"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-horizontal-navbar/index3.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 4</a></div></div>
                    <div class="col-sm-2"><div class="white-box text-center bg-warning"><a href="http://eliteadmin.themedesigner.in/demos/eliteadmin-iconbar/index4.html" target="_blank" class="text-white"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i><br/>Demo 5</a></div></div>
                    <div class="col-sm-2"><div class="white-box text-center bg-danger"><a href="https://themeforest.net/item/elite-admin-responsive-web-app-kit-/16750820" target="_blank" class="text-white"><i class="linea-icon linea-ecommerce fa-fw" data-icon="d"></i><br/>Buy Now</a></div></div>
                 </div>
              </li>
            </ul>
          </li>
          <!-- /.Megamenu -->

          <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
          <!-- /.dropdown -->
        </ul>
      </div>
      <!-- /.navbar-header -->
      <!-- /.navbar-top-links -->
      <!-- /.navbar-static-side -->
    </nav>
    <!-- Left navbar-header -->
    <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
          <div class="dropdown user-pro-body">
            <div><img src="{{url('plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"></div>
            <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Steave Gection <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                  <li><a href="{{ route('show.profile') }}"><i class="ti-user"></i> My Profile</a></li>
                  <li><a href="/passwordupdate"><i class="fas fa-eye"></i> password Change</a></li>
                  <li><a id="logout" href="{{ route('logout.perform') }}"><i id="logout" class="fa fa-power-off"></i> Logout</a></li>
                </ul>
          </div>
        </div>
        <ul class="nav" id="side-menu">
          <li class="sidebar-search hidden-sm hidden-md hidden-lg">
            <!-- input-group -->
            <div class="input-group custom-search-form">
              <input type="text" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
              <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
              </span> </div>
            <!-- /input-group -->
          </li>

          <li class="nav-small-cap m-t-10">--- Main Menu</li>
          <li> <a href="index.html" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-custom pull-right">4</span></span></a>
            <ul class="nav nav-second-level">
              <li> <a href="index.html">Minimalistic</a> </li>
              <li> <a href="index2.html">Demographical</a> </li>
              <li> <a href="index3.html">Analitical</a> </li>
              <li> <a href="index4.html">Simpler</a> </li>
            </ul>
          </li>
          <li><a href="inbox.html" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">New</span></span></a>
            <ul class="nav nav-second-level">
              <li><a href="chat.html">Chat-message</a></li>
              <li><a href="javascript:void(0)" class="waves-effect">Inbox<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li> <a href="inbox.html">Mail box</a></li>
                  <li> <a href="inbox-detail.html">Inbox detail</a></li>
                  <li> <a href="compose.html">Compose mail</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)" class="waves-effect">Contacts<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li> <a href="contact.html">Contact1</a></li>
                  <li> <a href="contact2.html">Contact2</a></li>
                  <li> <a href="contact-detail.html">Contact Detail</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">UI Elements<span class="fa arrow"></span> <span class="label label-rouded label-info pull-right">13</span> </span></a>
            <ul class="nav nav-second-level">
              <li><a href="panels-wells.html">Panels and Wells</a></li>
              <li><a href="buttons.html">Buttons</a></li>
              <li><a href="sweatalert.html">Sweat alert</a></li>
              <li><a href="typography.html">Typography</a></li>
              <li><a href="grid.html">Grid</a></li>
              <li><a href="tabs.html">Tabs</a></li>
              <li><a href="tab-stylish.html">Stylish Tabs</a></li>
              <li><a href="modals.html">Modals</a></li>
              <li><a href="progressbars.html">Progress Bars</a></li>
              <li><a href="notification.html">Notifications</a></li>
              <li><a href="carousel.html">Carousel</a></li>
              <li><a href="list-style.html">List & Media object</a></li>
              <li><a href="user-cards.html">User Cards</a></li>
              <li><a href="timeline.html">Timeline</a></li>
              <li><a href="timeline-horizontal.html">Horizontal Timeline</a></li>
              <li><a href="nestable.html">Nesteble</a></li>
              <li><a href="range-slider.html">Range Slider</a></li>
              <li><a href="tooltip-stylish.html">Stylish Tooltip</a></li>
              <li><a href="bootstrap.html">Bootstrap UI</a></li>
            </ul>
          </li>
          <li> <a href="forms.html" class="waves-effect"><i data-icon="&#xe00b;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Forms<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level">
              <li><a href="form-basic.html">Basic Forms</a></li>
              <li><a href="form-layout.html">Form Layout</a></li>
              <li><a href="form-advanced.html">Form Addons</a></li>
              <li><a href="form-material-elements.html">Form Material</a></li>
              <li><a href="form-upload.html">File Upload</a></li>
              <li><a href="form-mask.html">Form Mask</a></li>
              <li><a href="form-img-cropper.html">Image Cropping</a></li>
              <li><a href="form-validation.html">Form Validation</a></li>
              <li><a href="form-dropzone.html">File Dropzone</a></li>
              <li><a href="form-pickers.html">Form-pickers</a></li>
              <li><a href="form-wizard.html">Form-wizards</a></li>
              <li><a href="form-typehead.html">Typehead</a></li>
              <li><a href="form-xeditable.html">X-editable</a></li>
              <li><a href="form-summernote.html">Summernote</a></li>
              <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
              <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
            </ul>
          </li>
          <li class="nav-small-cap">--- Proffessional</li>
          <li> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Sample Pages<span class="fa arrow"></span><span class="label label-rouded label-purple pull-right">30</span></span></a>
            <ul class="nav nav-second-level">
              <li><a href="starter-page.html">Starter Page</a></li>
                          <li><a href="blank.html">Blank Page</a></li>
              <li><a href="javascript:void(0)" class="waves-effect">Email Templates<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                  <li> <a href="../email-templates/basic.html">Basic</a></li>
                  <li> <a href="../email-templates/alert.html">Alert</a></li>
                  <li> <a href="../email-templates/billing.html">Billing</a></li>
                  <li> <a href="../email-templates/password-reset.html">Reset Pwd</a></li>
                </ul>
              </li>
              <li><a href="lightbox.html">Lightbox Popup</a></li>
              <li><a href="treeview.html">Treeview</a></li>
              <li><a href="search-result.html">Search Result</a></li>
              <li><a href="utility-classes.html">Utility Classes</a></li>
              <li><a href="custom-scroll.html">Custom Scrolls</a></li>
              <li><a href="login.html">Login Page</a></li>
              <li><a href="login2.html">Login v2</a></li>
              <li><a href="animation.html">Animations</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="pricing.html">Pricing</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="register2.html">Register v2</a></li>
              <li><a href="recoverpw.html">Recover Password</a></li>
              <li><a href="lock-screen.html">Lock Screen</a></li>
              <li><a href="400.html">Error 400</a></li>
              <li><a href="403.html">Error 403</a></li>
              <li><a href="404.html">Error 404</a></li>
              <li><a href="500.html">Error 500</a></li>
              <li><a href="503.html">Error 503</a></li>
            </ul>
          </li>
          <li> <a href="#" class="waves-effect"><i data-icon="&#xe006;" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Charts<span class="fa arrow"></span></span></a>
            <ul class="nav nav-second-level">
              <li> <a href="flot.html">Flot Charts</a> </li>
              <li><a href="morris-chart.html">Morris Chart</a></li>
              <li><a href="chart-js.html">Chart-js</a></li>
              <li><a href="peity-chart.html">Peity Charts</a></li>
              <li><a href="sparkline-chart.html">Sparkline charts</a></li>
              <li><a href="extra-charts.html">Extra Charts</a></li>
            </ul>
          </li>
          <li> <a href="tables.html" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">7</span></span></a>
            <ul class="nav nav-second-level">
              <li><a href="basic-table.html">Basic Tables</a></li>
              <li><a href="admin/userdata">Data Table</a></li>
              <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
              <li><a href="responsive-tables.html">Responsive Tables</a></li>
              <li><a href="editable-tables.html">Editable Tables</a></li>
              <li><a href="foo-tables.html">FooTables</a></li>
              <li><a href="jsgrid.html">JsGrid Tables</a></li>
            </ul>
          </li>

          </li>

        </ul>
      </div>
    </div>
  <!-- Left navbar-header end -->
  <!-- Page Content -->
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="page-title">Holiday</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
          <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Holiday</a></li>
          </ol>
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /row -->
      <div class="container">
        <h1> Wappnet Systems Holiday List</h1>
        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Holiday</a>
        <br>
        <br>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Holiday Name</th>
                    <th>Holiday Date</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                       <input type="hidden" name="product_id" id="product_id">
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" required="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Date : </label>
                            <div class="col-sm-6">
                                <input type="date" id="date" name="date" required="" placeholder="Enter date" class="form-control">
                            </div>
                            <br> <br> <br>
                            <br>
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save
                                </button>
                               </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>




<!-- jQuery -->
<script src="{{url('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{url('js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<script src="{{url('js/waves.js')}}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('js/custom.min.js')}}"></script>
<script src="{{url('plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
{{-- popup js --}}

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>


<!--Style Switcher -->
<script src="{{url('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
<script type="text/javascript">
  $(function () {

    /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.holiday') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name_holiday', name: 'name' , searchable: true},
            {
            data: 'date_holiday',
            name: 'detail',
            searchable: true ,
            render: function(data, type, full, meta) {
                var date = new Date(data);
                var day = date.getDate();
                var month = date.getMonth() + 1;
                var year = date.getFullYear();
                return (day < 10 ? '0' : '') + day + '/' + (month < 10 ? '0' : '') + month + '/' + year;
            }
        },
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#product_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Holiday");
        $('#ajaxModel').modal('show');
    });

    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '#editProduct', function () {
      var product_id = $(this).data('id');
      $.get("{{ route('admin.holiday') }}" +'/' + product_id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#product_id').val(data.id);
          $('#name').val(data.name_holiday);
          $('#date').val(data.date_holiday);
      })
    });

    /*------------------------------------------
    --------------------------------------------
    Create Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');

        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('add.holiday') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });

    /*------------------------------------------
    --------------------------------------------
    Delete Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteProduct', function () {

        var product_id = $(this).data("id");
        confirm("Are You sure want to delete !");

        $.ajax({
            type: "DELETE",
            url: "{{ route('add.holiday') }}"+'/'+product_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

  });
</script>
</body>
</html>
@endsection
