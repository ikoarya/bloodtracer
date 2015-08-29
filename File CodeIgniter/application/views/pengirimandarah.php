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
    <title>Pengiriman Darah</title>

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
                            <a href="#">Pengiriman Darah</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <div class="header-title">
                        <h1>
                            Pengiriman Darah
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
                                            <form id="registrationForm" method="post" class="form-horizontal" action="<?php echo base_url(); ?>bloodshipping/pengiriman" 
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-title" align="center">
                                                    Silahkan isi Form di bawah ini
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tanggal</label>
                                                    <div class="col-lg-6">
                                                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"
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
                                                    <label class="col-lg-3 control-label">Waktu Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="time" class="form-control" name="waktu" placeholder="Waktu Pengiriman"
                                                               data-bv-message="Waktu tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Waktu harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]:"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="5"
                                                               data-bv-stringlength-max="5"
                                                               data-bv-stringlength-message="Waktu Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode Tujuan Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="kode" placeholder="Kode Tujuan"
                                                               data-bv-message="kode tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Kode harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="10"
                                                               data-bv-stringlength-message="Kode Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Tujuan Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Pengiriman"
                                                               data-bv-message="Tujuan Tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Tujuan harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\/.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Tujuan Harus Diisi"
                                                                />
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Serial Shipping</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="serial" placeholder="Serial Shipping"
                                                               data-bv-message="Serial tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Serial harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="20"
                                                               data-bv-stringlength-message="Serial Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Suhu Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="suhu" placeholder="Suhu Pengiriman"
                                                               data-bv-message="Suhu tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Suhu harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[0-9]"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="10"
                                                               data-bv-stringlength-message="Suhu Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Petugas Pengiriman</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" name="petugas" placeholder="Petugas Pengiriman"
                                                               data-bv-message="Petugas Tidak Valid"
                                                               data-bv-notempty="true"
                                                               data-bv-notempty-message="Petugas harus diisi"
                                                               data-bv-regexp="true"
                                                               data-bv-regexp-regexp="[a-zA-Z0-9_\/.]+"
                                                               data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true"
                                                               data-bv-stringlength-min="1"
                                                               data-bv-stringlength-max="100"
                                                               data-bv-stringlength-message="Petugas Harus Diisi"
                                                                />
                                                    </div>
                                                </div>

                                                <br>
                                                <div class="form-title" align="center">
                                                    Detail Pengiriman
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Kode SSCC</label>
                                                    <div class="col-lg-6">
                                                        <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukkan SSCC" id="kodesscc" name="kodesscc">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default shiny" type="button" onclick="cekkode()">Cek</button>
                                                                </span>
                                                            </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-lg-1 control-label"></label>
                                                    <div class="col-lg-9">
                                                        <table class="table table-hover">
                                                            <thead class="bordered-darkorange">
                                                                <tr>
                                                                    <th>
                                                                       ID Produksi
                                                                    </th>
                                                                    <th>
                                                                        ID Kantung
                                                                    </th>
                                                                    <th>
                                                                        Jenis Komponen
                                                                    </th>
                                                                    <th>
                                                                        Waktu Produksi
                                                                    </th>
                                                                    <th>
                                                                        Waktu Kadaluarsa
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="detail">
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                 <div class="form-group">
                                                    <div class="col-lg-offset-5 col-lg-6">
                                                        <input class="btn btn-darkorange" type="reset" value="Cetak Form" onclick="javascript:alert('Maaf Fitur ini belum tersedia')" />
                                                        <input class="btn btn-palegreen" type="submit" value="Simpan" />
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
        var nilai = document.getElementById('kodesscc').value;
        
        document.getElementById('detail').innerHTML = '';
        <?php foreach ($list->result() as $row) { 
            $prod = $row->id_produksi;
            $kantung = $row->id_kantung;
            $komponen = $row->jenis_komponen;
            $waktuprod = $row->waktu_produksi;
            $waktukadal = $row->waktu_kadaluarsa;
            $sscc = $row->sscc;
         ?>

        var mylist = document.getElementById("detail");
        var row = document.createElement("tr");

        var prod = "<?php echo $prod;?>";
        var kantung = "<?php echo $kantung;?>";
        var komponen = "<?php echo $komponen;?>";
        var waktuprod = "<?php echo $waktuprod;?>";
        var waktukadal = "<?php echo $waktukadal;?>";

        var sscc = "<?php echo $sscc;?>";

        //alert(sscc);
        var cell = document.createElement("td");
        var cellText = document.createTextNode(prod);
        cell.appendChild(cellText);

        var cell2 = document.createElement("td");
        var cellText2 = document.createTextNode(kantung);
        cell2.appendChild(cellText2);

        var cell3 = document.createElement("td");
        var cellText3 = document.createTextNode(komponen);
        cell3.appendChild(cellText3);

        var cell4 = document.createElement("td");
        var cellText4 = document.createTextNode(waktuprod);
        cell4.appendChild(cellText4);

        var cell5 = document.createElement("td");
        var cellText5 = document.createTextNode(waktukadal);
        cell5.appendChild(cellText5);

        if (nilai == sscc) {
            
            row.appendChild(cell);
            row.appendChild(cell2);
            row.appendChild(cell3);
            row.appendChild(cell4);
            row.appendChild(cell5);
            mylist.appendChild(row);
           
        }
        //else{
          //document.getElementById('detail').innerHTML = '<tr><td colspan="5" align="center">Maaf Data Tidak Ditemukan</td><tr>';
        //}
      
      <?php } ?>
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
