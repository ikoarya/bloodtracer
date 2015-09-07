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
    <title>Permintaan Darah</title>

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
                                        <h2><span class="profile"><span>Bank Darah UTD</span></span></h2>
                                    </section>
                                </a>
                                <!--Login Area Dropdown-->
                                <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                    <li class="username"><a>Bank Darah UTD</a></li>
                                    
                                    
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
              $this->load->view('navbarmenu');
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
                            <a href="#">Permintaan Darah</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Permintaan Darah
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
                      <strong>Sukses</strong> Permintaan Darah Berhasil.
                    </div>
                  <?php } 
                  elseif ($hasil == 'gagal') { ?>
                    <br>
                    <div class="alert alert-danger fade in radius-bordered alert-shadowed">
                        <button class="close" data-dismiss="alert">
                            ×
                        </button>
                        <i class="fa-fw fa fa-times"></i>
                        <strong>Gagal!</strong> Permintaan Darah Gagal.
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
                                            <form action="<?php echo base_url(); ?>bloodrequest/permintaan" id="form" name="form" method="post" role="form" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi Form di bawah ini
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Nomor Form Permintaan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="nomor" placeholder="Nomor Form"
                                                               data-bv-message="Nomor tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nomor harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="Nomor Form hanya terdiri dari angka"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Nomor Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tanggal1" id="tanggal1" disabled="true" />
                                                        <input type="hidden" class="form-control" name="tanggal" id="tanggal" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Tujuan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kode" placeholder="Kode RS"
                                                               data-bv-message="Kode tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Kode harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="Kode hanya terdiri dari angka"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="2"
                                                               data-bv-stringlength-max="10"
                                                               data-bv-stringlength-message="Kode Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tujuan</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tujuan" placeholder="Tujuan"
                                                               data-bv-message="Nama Tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Nama harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Nama Rumah Sakit hanya terdiri dari huruf"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Nama Harus Diisi"
                                                                />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Petugas</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="petugas" placeholder="Petugas RS"
                                                               data-bv-message="Petugas Tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Petugas harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z]"
                                                               data-bv-regexp-message="Petugas Rumah Sakit hanya terdiri dari huruf"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Petugas Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-title" align="center">
                                                    Form Permintaan Darah
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Jenis dan Jumlah</label>
                                                    
                                                    <div class="col-lg-2">
                                                        <select id="jenis" name="jenisdarah">
                                                          <option value="Whole Blood">Whole Blood</option>
                                                          <option value="Packed Red Cells">Packed Red Cells</option>
                                                          <option value="Plasma">Plasma</option>
                                                          <option value="Fresh Plasma">Fresh Plasma</option>
                                                          <option value="Trombocyte Coencentrate">Trombocyte</option>
                                                          <option value="Washed Red Cells">Washed Red Cells</option>
                                                          <option value="Anti Haemopholic Factor Concentrate">Anti Haemopholic</option>
                                                        </select>
                                                            
                                                    </div>

                                                    <div class="col-lg-1">
                                                        <select name="golongandarah" id="goldar">
                                                              <option value="A">A</option>
                                                              <option value="B">B</option>
                                                              <option value="AB">AB</option>
                                                              <option value="O">O</option>
                                                            </select>
                                                    </div>

                                                    <div class="col-lg-2">
                                                            <input type="number" class="form-control" id="jml" name="jumlah" placeholder="Jumlah"/>
                                                    </div>
                                                    <div class="col-lg-1">
                                                            <input class="btn btn-blue" value="Tambah" onclick="tambahdetail()" />
                                                    </div>
                                                    
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-2 control-label"></label>
                                                    <div class="col-lg-7">
                                                        <table class="table table-hover" >
                                                            <thead class="bordered-darkorange">
                                                                <tr>
                                                                    <th>
                                                                       Jenis Darah
                                                                    </th>
                                                                    <th>
                                                                        Golongan
                                                                    </th>
                                                                    <th>
                                                                        Jumlah
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="detail">
                                                                
                                                                
                                                            </tbody>
                                                        </table>
                                                        <input id="daftarBarang" type="hidden" name="daftarBarang" />
                                                    </div>
                                                </div>
                                                

                                                <br>
                                                <br>
                                                 <div class="form-group">
                                                    <div class="col-lg-offset-5 col-lg-6">
                                                        <input class="btn btn-darkorange" type="reset" value="Reset" />
                                                        <input class="btn btn-palegreen" type="submit" value="Simpan" onclick="submitdetail()" />
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
            
            var d = new Date();

            var tahunkode = d.getFullYear();
            tahunkode = tahunkode % 100;
            var tanggalkode = d.getDate();
            var bulankode = parseInt(d.getMonth()+1);

            if (d.getDate() < 10) {
                tanggalkode = '0'+tanggalkode;
            }

            if (bulankode < 10) {
                bulankode = '0' + bulankode;
            }

            document.getElementById('tanggal').value = tanggal;
            document.getElementById('tanggal1').value = tanggal;
            
        }

        function tambahdetail(){
          var rows = $('tr');
          var mylist = document.getElementById("detail");
          var row = document.createElement("tr");

          var jenis = document.getElementById('jenis').value;
          var goldar = document.getElementById('goldar').value;
          var jumlah = document.getElementById('jml').value;
          
          if (jumlah == '' || jumlah < '1') {
            alert("Periksa Kembali Detail Permintaan");
          }
          else{
            var cell = document.createElement("td");
            var cellText = document.createTextNode(jenis);
            cell.appendChild(cellText);

            var cell2 = document.createElement("td");
            var cellText2 = document.createTextNode(goldar);
            cell2.appendChild(cellText2);

            var cell3 = document.createElement("td");
            var cellText3 = document.createTextNode(jumlah);
            cell3.appendChild(cellText3);

            row.appendChild(cell);
            row.appendChild(cell2);
            row.appendChild(cell3);
            mylist.appendChild(row);
          }
          
          //alert(rows.length);
          
        }
        

        function submitdetail(){
          var rows = $('tr');
          var daftarBarang = [];

          for (var i=1; i<rows.length; i++) {
            var barang = {};
            var children = $(rows[i]).children();
            barang.jenis = children[0].innerHTML;
            barang.goldar = children[1].innerHTML;
            barang.jumlah = parseInt(children[2].innerHTML);
           
            daftarBarang.push(barang);
            
          }
          alert(JSON.stringify(daftarBarang));

          $('#daftarBarang').val(JSON.stringify(daftarBarang));

         $('#form').submit();

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
