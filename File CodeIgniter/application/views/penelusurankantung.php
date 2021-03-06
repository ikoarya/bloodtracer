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
    <title>Penelusuran Kantung Darah</title>

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
<body bgcolor="#AC193D">
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
            <?php      
              $this->load->view('navbarproduksi');
            ?>
            
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
                            Penelusuran Kantung Darah
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
                                            <form id="registrationForm" method="post" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi Nomor Kantung Darah di bawah ini
                                                </div>
                                                

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Produksi</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                                <input type="text" class="form-control" name="nomorproduksi" id="nomorproduksi">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button" onclick="cekkode()">Cek</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="form-title" align="center">
                                                    Donor
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Donor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kodedonor" id="kodedonor" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nama Pendonor</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nama" id="nama" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Lahir</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tgl" id="tgl" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Golongan Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="goldar" id="goldar" disabled="true" />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Rhesus</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="rhesus" id="rhesus" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Kantung</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jenis" id="jenis" disabled="true" />
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="form-title" align="center">
                                                    Infeksi Menular
                                                </div> 

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">HIV</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="hiv" id="hiv" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Hepatitis</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="hepatitis" id="hepatitis" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">HCV</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="hcv" id="hcv" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Sifilis</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="sifilis" id="sifilis" disabled="true" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-title" align="center">
                                                    Produksi
                                                </div> 

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Produksi</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tglprod" id="tglprod" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal AFTAP</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tglaftap" id="tglaftap" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Kadaluarsa</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="expired" id="expired" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Komponen</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="komponen" id="komponen" disabled="true" />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-title" align="center">
                                                    Shipping
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tujuan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tujuan" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tglkirim" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jam Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jam" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Suhu Kirim</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="suhu" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Penerimaan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tglterima" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jam Penerimaan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jamterima" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Suhu Terima</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="suhuterima" disabled="true" />
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="form-title" align="center">
                                                    Proses Transfusi
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nama Pasien</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="namapasien" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Lahir</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tglpasien" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis Kelamin</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="jenkelpasien" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Golongan Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="goldarpasien" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Rumah Sakit</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="rumahsakit" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal Transfusi</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tgltransfusi" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Mulai Transfusi</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="mulaitransfusi" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Selesai Transfusi</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="selesaitransfusi" disabled="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kualitas Darah</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kualitas" disabled="true" />
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
        function cekkode(){
            var nilai = document.getElementById('nomorproduksi').value;
            
            $.getJSON('<?php echo base_url(); ?>ajax/ambilproduksi/' + nilai,
              function (data) {             
                //console.log(data);
                var tglprod = data[0]["waktu_produksi"];
                var expired = data[0]["waktu_kadaluarsa"];
                var jenis = data[0]["jenis_komponen"];
                var nokantung = data[0]["id_kantung"];
                $('#tglprod').val(tglprod);
                $('#expired').val(expired);
                $('#komponen').val(jenis);

                $.getJSON('<?php echo base_url(); ?>ajax/tambahdetail/' + nokantung,
                  function (data) {             
                    var jenis = data[0]["jenis"];
                    var hiv = data[0]["hiv"];
                    var sifilis = data[0]["sifilis"];
                    var hepatitis = data[0]["hepatitis"];
                    var hcv = data[0]["hcv"];
                    var nomor_donor = data[0]["nomor_donor"];
                    
                    $('#jenis').val(jenis);
                    $('#hiv').val(hiv);
                    $('#sifilis').val(sifilis);
                    $('#hepatitis').val(hepatitis);
                    $('#hcv').val(hcv);
                    $('#kodedonor').val(nomor_donor);

                    $.getJSON('<?php echo base_url(); ?>ajax/ambilriwayat/' + nomor_donor,
                      function (data) {             
                        var nama = data[0]["nama"];
                        var tanggal_lahir = data[0]["tanggal_lahir"];
                        var golongan_darah = data[0]["golongan_darah"];
                        var rhesus = data[0]["rhesus"];
                                                
                        $('#nama').val(nama);
                        $('#tgl').val(tanggal_lahir);
                        $('#goldar').val(golongan_darah);
                        $('#rhesus').val(rhesus);
                        
                      }
                    ).fail(function() {console.log('error fak')});

                  }
                ).fail(function() {console.log('error fak')});

                $.getJSON('<?php echo base_url(); ?>ajax/ambilaftap/' + nokantung,
                  function (data) {             
                    var tglaftap = data[0]["tanggal_aftap"];
                    
                    $('#tglaftap').val(tglaftap);
                  }
                ).fail(function() {console.log('error fak')});

              }
            ).fail(function() {console.log('error fak')});


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
