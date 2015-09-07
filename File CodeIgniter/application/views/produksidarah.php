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
    <title>Produksi Komponen Darah</title>

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
                                        <h2><span class="profile"><span>Produksi</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>Produksi</a></li>
                                    
                                    
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
              $this->load->view('navbarproduksi');
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
                            <a href="#">Produksi Komponen Darah</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Produksi Komponen Darah
                            
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
                      <strong>Sukses</strong> Data Berhasil Dimasukkan.
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Data Gagal Dimasukkan.
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
                                            <form id="registrationForm" method="post" class="form-horizontal" action="<?php echo base_url(); ?>produksi/tambahproduksi" 
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi Form di bawah ini
                                                </div>
                                                

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Kantung Darah</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                                <input type="text" class="form-control" name="nokantung" id="nokantung">
                                                                
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button" onclick="ceknomor()">Cek Nomor Kantung</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Kantung Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jenis" id="jenis"  disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Golongan Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="goldar" id="goldar" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Rhesus Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="rhesus" id="rhesus" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tgl AFTAP</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tanggal" id="tanggal" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Pendonor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kode" id="kode" disabled="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nama Pendonor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nama" id="nama" disabled="true" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Lokasi</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="lokasi" value="Surabaya" disabled="true" />
                                                    </div>
                                                </div>
                                                <br>
                                                <br>

                                                <div class="form-title" align="center">
                                                    Detail Produksi
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Unit Produksi</label>
                                                    <div class="col-lg-2">
                                                        <select id="jenisdarah" name="jenisdarah" onchange="ambilvalue()">
                                                          <option value="Whole Blood">Whole Blood</option>
                                                          <option value="Packed Red Cells">Packed Red Cells</option>
                                                          <option value="Plasma">Plasma</option>
                                                          <option value="Fresh Plasma">Fresh Plasma</option>
                                                          <option value="Trombocyte Coencentrate">Trombocyte</option>
                                                          <option value="Washed Red Cells">Washed Red Cells</option>
                                                          <option value="Anti Haemopholic Factor Concentrate">Anti Haemopholic</option>
                                                        </select>
                                                            
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Volume</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="volume" id="volume" 
                                                            data-bv-message="Volume tidak valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Volume harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="Isilah dengan angka"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-message="Volume harus diisi dengan benar"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Umur Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="umur" id="umur"
                                                            data-bv-message="Umur tidak valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Umur harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="Isilah dengan angka"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-message="Umur harus diisi dengan benar"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Waktu</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="waktu" id="waktu" disabled="true" />
                                                        <input type="hidden" class="form-control" name="waktu1" id="waktu1" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Kadaluarsa</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="expired" id="expired" disabled="true" />
                                                        <input type="hidden" class="form-control" name="expired1" id="expired1" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Petugas</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="petugas"
                                                            data-bv-message="Petugas tidak valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Petugas harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Petugas hanya bisa diisi dengan huruf"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="2"
                                                               data-bv-stringlength-max="50"
                                                               data-bv-stringlength-message="Petugas minimal 2 karakter"
                                                               data-bv-different="true"
                                                               data-bv-different-field="password"
                                                               data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Barcode Produksi</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                                <input type="text" class="form-control" id="barcode" name="barcode" disabled="true">
                                                                <input type="text" class="form-control" id="barcode1" name="barcode1">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button" onclick="generateBarcode()" >Generate Barcode</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>
                                                

                                                
                                                <div class="form-group">
                                                    <div class="col-lg-offset-5 col-lg-6">
                                                    <input class="btn btn-blue" type="button" value="Print" onclick="javascript:alert('Maaf Fitur ini belum tersedia')" />
                                                        <input class="btn btn-darkorange" type="reset" value="Clear" />
                                                        <input class="btn btn-palegreen" type="submit" value="Save" />
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

        function autoFill(){
            var tanggal = getTanggal();
            document.getElementById('waktu').value = tanggal;
            document.getElementById('waktu1').value = tanggal;
        }

        function tanggalkadaluarsa(umur, nilai){
           
            var d = new Date();
            d.setDate(d.getDate() + umur[nilai]);
            var tgl_kadaluarsa = d.getDate();
            var bulan_kadaluarsa = parseInt(d.getMonth()) + 1;
            var tahun_kadaluarsa = d.getFullYear();
            
            if (tgl_kadaluarsa < 10 ) {
                var tgl_kadaluarsa = '0'+tgl_kadaluarsa;
            }
            if (bulan_kadaluarsa < 10) {
                var bulan_kadaluarsa = '0'+bulan_kadaluarsa;
            }

            var tahun = tahun_kadaluarsa +'-'+ bulan_kadaluarsa+'-'+tgl_kadaluarsa;
            document.getElementById('expired').value = tahun;
            document.getElementById('expired1').value = tahun;
        }

        function ambilvalue(){
            var umur = [35,30,21,1,5,4,365];
            var volume = [350, 200, 100, 150, 50, 100, 30];
            var nilai = document.getElementById('jenisdarah').selectedIndex;
            
            document.getElementById('umur').value = umur[nilai];
            document.getElementById('volume').value = volume[nilai];
            
            tanggalkadaluarsa(umur, nilai);        
        }

        function ceknomor(){
            var nilai = document.getElementById('nokantung').value;

            $.getJSON('<?php echo base_url(); ?>ajax/tambahdetail/' + nilai,
              function (data) {             
                var kodedonor = data[0]["nomor_donor"];
                var tanggaldaftar = data[0]["tanggal_aftap"];
                var jenis = data[0]["jenis"];
                $('#kode').val(kodedonor);
                $('#tanggal').val(tanggaldaftar);
                $('#jenis').val(jenis);

                $.getJSON('<?php echo base_url(); ?>ajax/ambilriwayat/' + kodedonor,
                  function (data) {             
                    var goldardonor = data[0]["golongan_darah"];
                    var rhesus = data[0]["rhesus"];
                    var nama = data[0]["nama"];
                    
                    $('#goldar').val(goldardonor);
                    $('#rhesus').val(rhesus);
                    $('#nama').val(nama);
                  }
                ).fail(function() {console.log('error fak')});


              }
            ).fail(function() {console.log('error fak')});
        }

        function generateBarcode(){
            if (document.getElementById('nokantung').value == '') {
                alert('Nomor Kantung Harus Diisi !');
            }
            else{
                var nilai = document.getElementById('nokantung').value;
                var jenisdarah = document.getElementById('jenisdarah').selectedIndex +1;
                document.getElementById('barcode').value = '103'+ nilai + '00'+ jenisdarah;
                document.getElementById('barcode1').value = '103'+ nilai + '00'+ jenisdarah;
            }
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
