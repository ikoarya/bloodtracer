<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 1.4.1
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:52 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Pemeriksaan Darah</title>

    <meta name="description" content="form validation" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon">
    <meta name="description" content="Form Elements Data Pickers" />

    <!--Basic Styles-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="<?php echo base_url(); ?>assets/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/typicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="<?php echo base_url(); ?>assets/css/skins/darkred.min.css" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->
<body bgcolor="#AC193D" onload="autoFill()">
    <!-- Loading Container -->
    <div class="loading-container">
        <div class="loader"></div>
    </div>
    <!--  /Loading Container -->
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-inner">
            <div class="navbar-container">
                <!-- Navbar Barnd -->
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <img src="<?php echo base_url(); ?>assets/img/logopmi.png" alt="" />
                        </small>
                    </a>
                </div>
                <!-- /Navbar Barnd -->
                <!-- Sidebar Collapse -->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="collapse-icon fa fa-bars"></i>
                </div>
                
                <div class="navbar-header pull-right">
                    <div class="navbar-account">
                        <ul class="account-area">
                           
                            <li>
                                <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                    <div class="avatar" title="View your public profile">
                                        <img src="<?php echo base_url(); ?>assets/img/avatars/adam-jansen.jpg">
                                    </div>
                                    <section>
                                        <h2><span class="profile"><span>Petugas IMLTD</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>Petugas IMLTD</a></li>
                                    
                                    
                                    <!--/Theme Selector Area-->
                                    <li class="dropdown-footer">
                                        <a href="<?php echo base_url(); ?>home/do_logout">
                                            Sign out
                                        </a>
                                    </li>
                                </ul>
                                <!--/Login Area Dropdown-->
                            </li>
                            <!-- /Account Area -->
                            <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                            <!-- Settings -->
                        </ul>

                        <!-- Settings -->
                    </div>
                </div>
                <!-- /Account Area and Settings -->
            </div>
        </div>
    </div>
    <!-- /Navbar -->
    <!-- Main Container -->
    <div class="main-container container-fluid">
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <?php      
              $this->load->view('navbarimltd');
            ?>
            <!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">Pengujian Sampel Darah</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Pengujian Sampel Darah
                            
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="formaftap.html">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->

                <?php
                  if($hasil == 'sukses') { ?>
                    <br>
                    <div class="alert alert-success fade in" align="center">
                      <button class="close" data-dismiss="alert">
                          ×
                      </button>
                      <i class="fa-fw fa fa-check"></i>
                      <strong>Sukses</strong> Pengujian Sampel Darah Berhasil.
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Pengujian Sampel Darah Gagal.
                    </div>
                  <?php }
                ?>

                <div class="page-body" >
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                    <div class="widget radius-bordered">
                                        <div class="widget-header">
                                            <span class="widget-caption">Registration Form</span>
                                        </div>
                                        <div class="widget-body">
                                            <form id="registrationForm" method="post" class="form-horizontal" action="<?php echo base_url(); ?>imltd/submitinfeksi" 
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi Form di bawah ini
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Sampel</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                                <input type="text" class="form-control" name="kodesampel">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button">Scan Barcode</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Petugas IMLTD</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="petugas"
                                                            data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nama Petugas harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Nama hanya bisa diisi dengan huruf"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="2"
                                                               data-bv-stringlength-max="50"
                                                               data-bv-stringlength-message="Nama minimal 2 karakter"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal / Waktu Pemeriksaan</label>
                                                    

                                                    <div class="col-lg-3">
                                                    <div class="input-group">
                                                            <input class="form-control date-picker" name="tanggal" id="tanggal" type="text" disabled="true" />
                                                            <input class="form-control date-picker" name="tanggal1" id="tanggal1" type="hidden" />
                                                        </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" class="form-control" name="waktu" id="waktu" disabled="true" />
                                                            <input type="hidden" class="form-control" name="waktu1" id="waktu1" />
                                                        </div>
                                                    
                                                </div>

                                                <br>
                                                <br>

                                                <div class="form-title" align="center">
                                                    Infeksi Menular Lewat Transfusi Darah
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">HIV</label>
                                                    <div class="col-lg-8">
                                                        
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="hiv" value="Positif">
                                                                <span class="text">Positif</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="hiv" value="Negatif">
                                                                <span class="text">Negatif</span>
                                                            </label>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Sifilis</label>
                                                    <div class="col-lg-8">
                                                        
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="sifilis" value="Positif">
                                                                <span class="text">Positif</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="sifilis" value="Negatif">
                                                                <span class="text">Negatif</span>
                                                            </label>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Hepatitis AG</label>
                                                    <div class="col-lg-8">
                                                        
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="hepatitis" value="Positif">
                                                                <span class="text">Positif</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="hepatitis" value="Negatif">
                                                                <span class="text">Negatif</span>
                                                            </label>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">HCV</label>
                                                    <div class="col-lg-8">
                                                        
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="hcv" value="Positif">
                                                                <span class="text">Positif</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" name="hcv" value="Negatif">
                                                                <span class="text">Negatif</span>
                                                            </label>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                </div>

                                               

                                                
                                                <div class="form-group">
                                                    <div class="col-lg-offset-5 col-lg-6">
                                                        <input class="btn btn-darkorange" type="reset" value="Clear" />
                                                        <input class="btn btn-palegreen" type="submit" value="Submit" />
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
        <!-- /Page Container -->
        <!-- Main Container -->

    </div>
    <script type="text/javascript">
        function getTanggal(){
            var d = new Date();
            var tanggal = d.getDate();
            var bulan = parseInt(d.getMonth()+1);


            if (d.getDate() < 10) {
                var tanggal = '0'+d.getDate();
            }

            if (bulan < 10) {
                var bulan = '0' + bulan;
            }
            var waktudaftar = parseInt(d.getFullYear())+'-'+bulan +'-'+ tanggal;
            return waktudaftar;
        }

        function getWaktu(){
            var d = new Date();
            var jam = d.getHours();
            var menit = d.getMinutes();

            if (d.getHours() < 10) {
                jam = '0'+d.getHours();
            }
            if (d.getMinutes() < 10) {
                menit = '0'+d.getMinutes();
            };
            var waktu = jam+':'+ menit;
            return waktu;
        }

        function autoFill(){
            var tanggal = getTanggal();
            var waktu = getWaktu();

            document.getElementById('tanggal').value = tanggal;
            document.getElementById('waktu').value = waktu;

            document.getElementById('tanggal1').value = tanggal;
            document.getElementById('waktu1').value = waktu;
        }
    </script>
    <!--Basic Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/beyond.min.js"></script>

    <!--Page Related Scripts-->
    <script src="<?php echo base_url(); ?>assets/js/validation/bootstrapValidator.js"></script>

    <script>
        $(document).ready(function () {

            $("#registrationForm").bootstrapValidator();

            $('#togglingForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    firstName: {
                        validators: {
                            notEmpty: {
                                message: 'The first name is required'
                            }
                        }
                    },
                    lastName: {
                        validators: {
                            notEmpty: {
                                message: 'The last name is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    job: {
                        validators: {
                            notEmpty: {
                                message: 'The job title is required'
                            }
                        }
                    },
                    department: {
                        validators: {
                            notEmpty: {
                                message: 'The department name is required'
                            }
                        }
                    },
                    mobilePhone: {
                        validators: {
                            notEmpty: {
                                message: 'The mobile phone number is required'
                            },
                            digits: {
                                message: 'The mobile phone number is not valid'
                            }
                        }
                    },
                    // These fields will be validated when being visible
                    homePhone: {
                        validators: {
                            digits: {
                                message: 'The home phone number is not valid'
                            }
                        }
                    },
                    officePhone: {
                        validators: {
                            digits: {
                                message: 'The office phone number is not valid'
                            }
                        }
                    }
                }
            })
            .find('button[data-toggle]')
            .on('click', function () {
                var $target = $($(this).attr('data-toggle'));
                // Show or hide the additional fields
                // They will or will not be validated based on their visibilities
                $target.toggle();
                if (!$target.is(':visible')) {
                    // Enable the submit buttons in case additional fields are not valid
                    $('#togglingForm').data('bootstrapValidator').disableSubmitButtons(false);
                }
            });


            $('#accountForm').bootstrapValidator({
                // Only disabled elements are excluded
                // The invisible elements belonging to inactive tabs must be validated
                excluded: [':disabled'],
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                submitHandler: function (validator, form, submitButton) {
                    // Do nothing
                },
                fields: {
                    fullName: {
                        validators: {
                            notEmpty: {
                                message: 'The full name is required'
                            }
                        }
                    },
                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The company name is required'
                            }
                        }
                    },
                    address: {
                        validators: {
                            notEmpty: {
                                message: 'The address is required'
                            }
                        }
                    },
                    city: {
                        validators: {
                            notEmpty: {
                                message: 'The city is required'
                            }
                        }
                    }
                }
            });

            $('#html5Form').bootstrapValidator();
        });
    </script>
    <!--Google Analytics::Demo Only-->
    </body>
<!--  /Body -->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:53 GMT -->
</html>
