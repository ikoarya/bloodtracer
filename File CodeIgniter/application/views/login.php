<!DOCTYPE html>
<!--
Beyond Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 1.4.1
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:02 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link id="beyond-link" href="<?php echo base_url(); ?>assets/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="<?php echo base_url(); ?>assets/css/skins/darkred.min.css" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="<?php echo base_url(); ?>assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body bgcolor="#AC193D">
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white" align="center">
            <img src="assets/img/logopmi.png" width="30%" height="30%">
            <div class="loginbox-title">LOG IN</div>
            <div class="loginbox-social">

                <div class="social-title ">Silahkan Log In untuk Melanjutkan</div>
            </div>
            
            <form action="<?php echo base_url(); ?>basecon/do_login" method="post">
                <div class="loginbox-textbox">
                    <input type="text" id="username" name="username" class="form-control" placeholder="username" />
                </div>
                <div class="loginbox-textbox">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                </div>
                <div class="loginbox-submit">
                    <input type="submit" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>
        </div>
        <div class="logobox">
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="assets/js/beyond.js"></script>

    <!--Google Analytics::Demo Only-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-60412744-1', 'auto');
        ga('send', 'pageview');

    </script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRXCgcW0TV1ae3O8iHc%2fF4RS6WIeKHzTEvwUwbTCa1X8XqGyPFoCSaq1MCf8xM%2fBf8DpNSVW5ObDKJrbhfEgdebfUTuprR8V4OG6rnFuiMrMU1g%2bHAl1VH7bI8fjO2eXMDn0bHDp1Cmi%2fXSOdAo7yyuxa770auqS4ZMjnaGu4Y0hzQIwcJ2U2qh3FPYGR2s6OpQu%2fnL0iR%2fs%2fChOONfoBBi0wtKr8MD6Y8QEgAoNaqPIixtd32HadJVCD9QgaAQPBPLfMh8F5BHJ44%2bqGPsl9728FCm%2b0Hm2tphSapx58aozuZ6%2ft%2bYFjyeZ3%2frVJhdym8Phf3zy89HVj3BFI6iUmz2uf5hJdB%2bTy5yGcGtvLob2ZxbxcWnx34f%2fglxV1jsXEmb2idfWU7aV27z%2fAGk00ezxiX6kJW37Ny660yfqmZrgXyTWOHPfqBe0HtyEU7f46FgdMrun9nRrODaxTPPjuGbFD%2bSI7f8c3J3FKmdBeb75jM78XK9kULEKL9uqC5UgStv9%2fiGqVldLc%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<!--Body Ends-->

<!-- Mirrored from beyondadmin-v1.4.1.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Aug 2015 01:26:02 GMT -->
</html>
