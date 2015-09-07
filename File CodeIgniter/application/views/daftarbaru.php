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
    <title>Form Pendonor</title>

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
<body bgcolor="#AC193D" onload="kodependonor()">
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
                            <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" />
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
                                        <h2><span class="profile"><span>Petugas Administrasi</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>Petugas Administrasi</a></li>
                                    
                                    
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
              $this->load->view('navbaradministrasi');
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
                            <a href="#">Pendaftaran Donor</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Form Pendaftaran Pendonor
                            
                        </h1>
                    </div>
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="daftarbaru.html">
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
                      <strong>Sukses</strong> Pendaftaran Pendonor Berhasil.
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Pendaftaran Pendonor Gagal.
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
                                            <form id="registrationForm" method="post" action="<?php echo base_url(); ?>datapendonor/tambahbaru" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi data di bawah ini
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Pendonor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" placeholder="Kode Pendonor" id="kodependonor" disabled/>
                                                        <input type="hidden" name="kodependonor" id="kodependonor1" >
                                                        <input type="hidden" name="idpendonor" id="idpendonor" value="<?php echo $id;?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nama Pendonor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="namapendonor" placeholder="Nama Pendonor"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nama tidak boleh kosong"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Nama Pendonor harap diisi dengan benar"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="50"
                                                               data-bv-stringlength-message="Nama Pendonor harap diisi dengan benar"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other"  />
                                                    </div>

                                                    <!--<div class="col-lg-2">
                                                        <input type="text" class="form-control" name="firstName" placeholder="First name"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The first name is required and cannot be empty" />
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <input type="text" class="form-control" name="lastName" placeholder="Last name"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The last name is required and cannot be empty" />
                                                    </div>
                                                    <input class="form-control date-picker" id="id-date-picker-1" type="text" data-date-format="dd-mm-yyyy">-->
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal / Tempat Lahir</label>
                                                    

                                                    <div class="col-lg-3">
                                                    <div class="input-group">
                                                            <input class="form-control date-picker" id="tanggallahir" name="tanggallahir" type="date" data-date-format="dd-mm-yyyy" >
                                                        </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir"
                                                                   data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Tempat lahir tidak boleh kosong"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Tempat lahir harap diisi dengan benar"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="2"
                                                               data-bv-stringlength-max="50"
                                                               data-bv-stringlength-message="Tempat lahir harap diisi dengan benar"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                        </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Kelamin</label>
                                                    <div class="col-lg-8">
                                                        
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" value="Laki-laki" name="jeniskelamin">
                                                                <span class="text">Laki-laki</span>
                                                            </label>
                                                            <label>
                                                                <input type="radio" value="Perempuan" name="jeniskelamin">
                                                                <span class="text">Perempuan</span>
                                                            </label>
                                                        </div>
                                                    
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Agama</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="agama" placeholder="Agama"
                                                               data-bv-message="Agama tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Agama harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="Agama terdiri dari huruf tidak boleh disingkat"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="5"
                                                               data-bv-stringlength-max="50"
                                                               data-bv-stringlength-message="Minimal 5 karakter"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Pekerjaan</label>
                                                    <div class="col-lg-2">
                                                        <select id="jenis" name="pekerjaan">
                                                          <option value="Pegawai">Pegawai</option>
                                                          <option value="Pelajar">Pelajar</option>
                                                        </select>
                                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Golongan Darah</label>
                                                    <div class="col-lg-2">
                                                        <select id="jenis" name="golongandarah">
                                                          <option value="A">A</option>
                                                          <option value="B">B</option>
                                                          <option value="AB">AB</option>
                                                          <option value="O">O</option>
                                                        </select>
                                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Alamat</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Pendonor"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Alamat harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Alamat Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Pos</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kodepos" placeholder="Kode Pos"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Kodepos harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="5"
                                                               data-bv-stringlength-max="5"
                                                               data-bv-stringlength-message="Kodepos harap diisi dengan benar"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Wilayah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="wilayah" placeholder="wilayah"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Wilayah harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="2"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Wilayah harap diisi dengan benar"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Identitas</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="noid" placeholder="Nomor identitas Pendonor"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nomor Identitas harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Nomor Identitas Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Identitas</label>
                                                    <div class="col-lg-2">
                                                        <select id="jenis" name="jenisidentitas">
                                                          <option value="KTP">KTP</option>
                                                          <option value="SIM">SIM</option>
                                                        </select>
                                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Password</label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" name="password" placeholder="Password Akun"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The password is required and cannot be empty"
                                                               data-bv-identical="true"
                                                               data-bv-identical-field="confirmPassword"
                                                               data-bv-identical-message="The password and its confirm are not the same"
                                                               data-bv-different="true"
                                                               data-bv-different-field="username"
                                                               data-bv-different-message="The password cannot be the same as username" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Ketik Ulang password</label>
                                                    <div class="col-lg-6">
                                                        <input type="password" class="form-control" name="confirmPassword" placeholder="Ketik Ulang Password"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="The confirm password is required and cannot be empty"
                                                               data-bv-identical="true"
                                                               data-bv-identical-field="password"
                                                               data-bv-identical-message="The password and its confirm are not the same"
                                                               data-bv-different="true"
                                                               data-bv-different-field="username"
                                                               data-bv-different-message="The password cannot be the same as username" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Telepon</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="notelp" placeholder="Nomor Telepon Pendonor"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nomor telepon harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="6"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Nomor telepon Harus Diisi"
                                                                />
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
      function isikode(){
          var nilai = document.getElementById('tanggallahir').value;
          var panjang = nilai.length;
          //var aku = $('#tanggallahir').datepicker( "getDate" );
          var tgl = nilai[8]+nilai[9]+nilai[5]+nilai[6]+nilai[0]+nilai[1]+nilai[2]+nilai[3];
          document.getElementById('kodependonor').setAttribute("value",kode);
          alert(kode);
      }
      function kodependonor(){
        var iden;
        var d  = new Date();
        var tahun = d.getFullYear();
        tahun = tahun % 100;
        var nilai = '103' + tahun + '<?php echo $id; ?>';
        document.getElementById('kodependonor').value = nilai;
        document.getElementById('kodependonor1').value = nilai;
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
