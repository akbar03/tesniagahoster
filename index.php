<?php
$sumber = 'http://localhost/niagahoster/mybiz/config/get.php';
$konten = file_get_contents($sumber);
$data   = json_decode($konten, true);

?>
   <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Web Hosting Indonesia Terbaik, Murah & Unlimited - Niagahoster (TES 2)</title>

        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="prices/master.css">
        <!--link rel="stylesheet" href="prices/reset.css"-->
        <link rel="shortcut icon" href="images/niagahoster.ico" type="image/png">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body id="top" data-spy="scroll">
        <header id="home">

            <section class="top-nav">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-left">
                                <p><i class="fa fa-bookmark" style="color:blue" aria-hidden="true"></i> Gratis Ebook 9 Cara Cerdas Menggunakan Domain [X]</p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="top-right">
                                <ul>
                                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0274-5305505</a></li>
                                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</a></li>
                                    <li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> Member Area</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <div id="main-nav">

                <nav class="navbar">
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="images/niagahoster.png"></a>
                        </div>

                        <div class="navbar-collapse collapse" id="ftheme">

                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#hosting">Hosting</a></li>
                                <li><a href="#package">Domain</a></li>
                                <li><a href="#powerful">Server</a></li>
                                <li><a href="#like">Website</a></li>
                                <li><a href="#framework">Afiliasi</a></li>
                                <li><a href="#pakethosting">Promo</a></li>
                                <li><a href="#fh5co-footer">Pembayaran</a></li>
                                <li><a href="#modul">Review</a></li>
                                <li><a href="#fh5co-footer">Kontak</a></li>
                                <li><a href="#bottom-footer">Blog</a></li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>

        </header>

        <div id="hosting">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-md-5">

                        <div class="hosting-left">
                            <div class="font-m-bold">PHP Hosting</div>
                            <p class="font-m-light">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</p>

                            <ul>
                                <li class="checked-box">Solusi PHP performa query yang lebih cepat.</li>
                                <li class="checked-box">Konsumsi memori yang cukup rendah.</li>
                                <li class="checked-box">Support PHP 5.3, PHP 5.4, 5.5, PHP 5.6, PHP 7. </li>
                                <li class="checked-box">Fitur enkripsi lonCube dan Zend Guard Loaders. </li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-xs-12 col-md-7">
                        <div class="hosting-right">
                            <img src="svg/illustration banner PHP hosting-01.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!----hosting-->
        <div id="hosting">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">

                        <div class="boxi">
                            <img src="svg/icon PHP Hosting_zendguard.svg" alt=""> </div>
                        <center>
                            <h4>PHP Zend Guard Loader</h4></center>

                    </div>

                    <div class="col-md-4">
                        <div class="boxi">
                            <img src="svg/icon PHP Hosting_composer.svg" alt="">
                        </div>
                        <center>
                            <h4>PHP Composer</h4></center>

                    </div>

                    <div class="col-md-4">
                        <div class="boxi">
                            <img src="svg/icon PHP Hosting_ioncube.svg" alt="">
                        </div>
                        <center>
                            <h4>PHP ionCube Loader</h4></center>
                    </div>
                </div>
            </div>
        </div>

        <!--package-->
        <div id="package">
            <div class="container">
                <div class="row">

                    <div class="package-heading">
                        <p>Paket Hosting Singapura yang tepat</p>
                    </div>
                    <div class="package_description">
                        Dsikon 40% + Domain dan SSL Gratis untuk Anda
                    </div>
                    <div id="pageContainer">

                        <div id="tableContainer">

                            <?php
for ($a = 0; $a < count($data); $a++) {
    
    if ($data[$a]['id'] == 1) {
?>
                               <div class="tableCell">
                                    <div class="tableHeading">
                                        <h2>Bayi</h2>
                                        <hr>
                                        <div class="priceContainer">
                                            <p><strike> Rp <?php
        echo $data[$a]['harga_normal'];
?></strike></p>

                                        </div>

                                    </div>
                                </div>
                                <?php
    } else if ($data[$a]['id'] == 2) {
?>
                                   <div class="tableCell">
                                        <div class="tableHeading">
                                            <h2>Pelajar</h2>
                                            <hr>
                                            <div class="priceContainer">
                                                <p><strike> Rp <?php
        echo $data[$a]['harga_normal'];
?>></strike></p>

                                            </div>
                                        </div>
                                    </div>

                                    <?php
    } else if ($data[$a]['id'] == 3) {
?>
                                       <div class="tableCell recommended">
                                            <div class="tableHeading">
                                                <h2>Personal</h2>
                                                <div class="priceContainer">
                                                    <p><strike> Rp <?php
        echo $data[$a]['harga_normal'];
?></strike></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
    }
    if ($data[$a]['id'] == 4) {
?>
                                           <div class="tableCell noBorder">
                                                <div class="tableHeading">
                                                    <h2>Bisnis</h2>
                                                    <hr>
                                                    <div class="priceContainer">
                                                        <p><strike> Rp <?php
        echo $data[$a]['harga_normal'];
?></strike></p>

                                                    </div>

                                                </div>
                                            </div>
                                            <?php
    }
}
?>
                                               <div class="cl">

                                                </div>

                                                <table class="pricingTableContent">
                                                    <tr class="signUpRow">
                                                        <?php
for ($a = 0; $a < count($data); $a++) {
    
    if ($data[$a]['id'] == 1) {
        $pisah = explode(".", $data[$a]['harga_diskon']);
?>
                                                           <td>
                                                                <p class="package-heading"><sup>Rp</sup>
                                                                    <?php
        echo $pisah[0];
?><sup>.<?php
        echo $pisah[1];
?>/ bln</sup></p>
                                                                <hr>
                                                            </td>
                                                            <?php
    } else if ($data[$a]['id'] == 2) {
        $pisah = explode(".", $data[$a]['harga_diskon']);
?>
                                                               <td>
                                                                    <p class="package-heading"><sup>Rp</sup>
                                                                        <?php
        echo $pisah[0];
?><sup>.<?php
        echo $pisah[1];
?>/ bln</sup></p>
                                                                    <hr>
                                                                </td>
                                                                <?php
    } else if ($data[$a]['id'] == 3) {
        $pisah = explode(".", $data[$a]['harga_diskon']);
?>
                                                                   <td div class="recommended">
                                                                        <p class="package-heading"><sup>Rp</sup>
                                                                            <?php
        echo $pisah[0];
?><sup>.<?php
        echo $pisah[1];
?>/ bln</sup></p>

                                                                    </td>
                                                                    <?php
    }
    if ($data[$a]['id'] == 4) {
        $pisah = explode(".", $data[$a]['harga_diskon']);
?>
                                                                       <td class="noBorder">
                                                                            <p class="package-heading"><sup>Rp</sup>
                                                                                <?php
        echo $pisah[0];
?><sup>.<?php
        echo $pisah[1];
?>/ bln</sup></p>
                                                                            <hr>
                                                                        </td>
                                                                        <?php
    }
}
?>
                                                   </tr>
                                                    <tr>
                                                        <td><strong>938</strong> Pengguna Terdaftar
                                                            <hr>
                                                        </td>
                                                        <td><strong>4.168</strong> Pengguna Terdaftar
                                                            <hr>
                                                        </td>
                                                        <td div class="recommended"><strong>10.017</strong> Pengguna Terdaftar</td>
                                                        <td class="noBorder"><strong>3.552</strong> Pengguna Terdaftar
                                                            <hr>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>0.5X RESOURCE POWER</strong></td>
                                                        <td><strong>1X RESOURCE POWER</strong></td>
                                                        <td><strong>2X RESOURCE POWER</strong></td>
                                                        <td class="noBorder"><strong>3X RESOURCE POWER</strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>500 MB</strong> Disk Space</td>
                                                        <td><strong>Unlimited</strong> Disk Space</td>
                                                        <td><strong>Unlimited</strong> Disk Space</td>
                                                        <td class="noBorder"><strong>Unlimited</strong> Disk Space</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Unlimited</strong> Bandwidth</td>
                                                        <td><strong>Unlimited</strong> Bandwidth</td>
                                                        <td><strong>Unlimited</strong> Bandwidth</td>
                                                        <td class="noBorder"><strong>Unlimited</strong> Bandwidth</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Unlimited</strong> Database</td>
                                                        <td><strong>Unlimited</strong> Database</td>
                                                        <td><strong>Unlimited</strong> Databases</td>
                                                        <td class="noBorder"><strong>Unlimited</strong> Databases</td>
                                                    </tr>

                                                    <tr>
                                                        <td> <strong>1</strong> Domain</br>
                                                        </td>
                                                        <td><strong>Unlimited</strong> POP3 Email</td>
                                                        <td><strong>Unlimited</strong> POP3 Email</td>
                                                        <td class="noBorder"><strong>Unlimited</strong> POP3 Email</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Instant</strong> Backup</td>
                                                        <td><strong>10</strong> Addon Domains</td>
                                                        <td><strong>Unlimited</strong> Addon Domains</td>
                                                        <td class="noBorder"><strong>Unlimited</strong> Addon Domains</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Unlimited SSL</strong> Gratis Selamanya</td>
                                                        <td><strong>Instant</strong> Backup</td>
                                                        <td><strong>Instant</strong> Backup</td>
                                                        <td class="noBorder"><strong>Magic Auto</strong> Backuo & Restore</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td><strong>Domain Gratis</strong> Selamanya</td>
                                                        <td><strong>Domain Gratis</strong> Selamanya</td>
                                                        <td class="noBorder"><strong>Domain Gratis</strong> Selamanya</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td><strong>Unlimited SSL</strong> Gratis Selamanya</td>
                                                        <td><strong>Unlimited SSL</strong> Gratis Selamany</td>
                                                        <td class="noBorder"><strong>Unlimited SSL</strong> Gratis Selamanya</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><strong>Private</strong> Name Server</td>
                                                        <td class="noBorder"><strong>Private</strong> Name Server</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><strong>SpamAssasin Mail</strong> Protection</td>
                                                        <td class="noBorder"><strong>Prioritas</strong> Layanan Support</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td class="noBorder">
                                                            <i class="fa fa-star" style="color:blue" aria-hidden="true"></i>
                                                            <i class="fa fa-star" style="color:blue" aria-hidden="true"></i>
                                                            <i class="fa fa-star" style="color:blue" aria-hidden="true"></i>
                                                            <i class="fa fa-star" style="color:blue" aria-hidden="true"></i>
                                                            <i class="fa fa-star" style="color:blue" aria-hidden="true"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td class="noBorder"><strong>SpamAssasin</strong> Mail Protection</td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <a href="#" class="pesan">Pilih Sekarang</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="pesan">Pilih Sekarang</a>
                                                        </td>

                                                        <td>
                                                            <a href="#" class="pesan button3">Pilih Sekarang</a>
                                                        </td>

                                                        <td class="noBorder">
                                                            <a href="#" class="pesan">Dison 40%</a>
                                                        </td>
                                                    </tr>
                                                </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- powerfull-->
        <div id="powerful">
            <div class="container">
                <div class="row">
                    <div class="package-heading">
                        <p>Powerful dengan Limit PHP yang Lebih Besar</p>
                    </div>

                    <div class="col-md-6">
                        <table class="pricingTableContent1">
                            <tr>
                                <td class="checked-box">max execution time 300s</td>
                            </tr>
                            <tr div class="altRow2">
                                <td class="checked-box">max execution time 300s</td>
                            </tr>
                            <tr>
                                <td class="checked-box">php memory limit 1024 MB</td>
                            </tr>
                        </table>

                    </div>

                    <div class="col-md-6 clearfix">
                        <table class="pricingTableContent1">
                            <tr>
                                <td class="checked-box">post max size 128 MB</td>
                            </tr>
                            <tr div class="altRow2">
                                <td class="checked-box">upload max filesize 128 MB</td>
                            </tr>
                            <tr>
                                <td class="checked-box">max input vars 2500</td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- pakethosting-->
        <div id="pakethosting">
            <div class="container">
                <div class="row">
                    <div class="package-heading">
                        <p>Semua Paket Hosting Sudah Termasuk</p>
                    </div>

                    <div class="col-md-4 col-sm-10 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_PHP Semua Versi.svg" alt=""></h3>
                            <h2>PHP Semua Versi</h2>
                            <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7.</br>Ubah sesuka Anda!</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_My SQL.svg" alt=""></h3>
                            <h2>MySQL Versi 5.6</h2>
                            <p>Nikmati MySQL versi terbaru , tercepat dan kaya akan fitur.</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_CPanel.svg" alt=""></h3>
                            <h2>Panel Hosting cPanel</h2>
                            <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-10 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_garansi uptime.svg" alt=""></h3>
                            <h2>Garansi Uptime 99.9%</h2>
                            <p>Data center yang mendukung kelangsungan website Anda 24/7</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_InnoDB.svg" alt=""></h3>
                            <h2>Database InnoDB Unlimited</h2>
                            <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda</p>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 text-center">
                        <div class="services">
                            <h3><img src="svg/icon PHP Hosting_My SQL remote.svg" alt=""></h3>
                            <h2>Wildcard Remote MySQL</h2>
                            <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--framwork-->
        <div id="framwork">
            <div class="container">

                <div class="row">
                    <div class="package-heading">
                        <p>Mendukung Penuh Framework Laravel</p>
                    </div>
                    <div class="col-xs-12 col-md-5">

                        <div class="hosting-left">
                            <p class="font-m-light">Tak perlu menggunakan dedicated server atau VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda.
                            </p>

                            <ul>
                                <li class="checked-box">Install Laravel 1 <strong>klik</strong> dengan Softaculous Installer.</li>
                                <li class="checked-box">Mendukung ektensi
                                    <Strong>PHP MCrypt, phar, mbstring, json, dan fileinfo.</Strong>.</li>
                                <li class="checked-box">Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda. </li>
                                <li><small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis.</small> </li>
                                <li>&nbsp; </li>
                                <li><a href="#" class="pesan button3">Pilih Hosting Anda</a> </li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-xs-12 col-md-7">
                        <div class="hosting-right">
                            <img src="svg/illustration banner support laravel hosting.svg" alt="">
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>

        <!-- modul-->
        <div id="modul">
            <div class="container">
                <div class="row">
                    <div class="package-heading">
                        <p>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</p>
                    </div>

                    <div class="col-md-3">
                        <table class="pricingTableContent2">

                            <tr>
                                <td class="noBorder2">
                                    <ul>
                                        <li>IcePHP</li>
                                        <li>apc</li>
                                        <li>apcu</li>
                                        <li>apm</li>
                                        <li>ares</li>
                                        <li>bcmath</li>
                                        <li>bcompiler</li>
                                        <li>big_int</li>
                                        <li>bitset</li>
                                        <li>bloomy</li>
                                        <li>bz2_filter</li>
                                        <li>clamav</li>
                                        <li>coin_acceptor</li>
                                        <li>crack</li>
                                        <li>dba</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-md-3">
                        <table class="pricingTableContent2">

                            <tr>
                                <td class="noBorder2">
                                    <ul>
                                        <li>http</li>
                                        <li>huffman</li>
                                        <li>idn</li>
                                        <li>igbinary</li>
                                        <li>iamgick</li>
                                        <li>imap</li>
                                        <li>includ</li>
                                        <li>inotify</li>
                                        <li>interbase</li>
                                        <li>intl</li>
                                        <li>ioncub_loader</li>
                                        <li>ioncub_loader_4</li>
                                        <li>jsmin</li>
                                        <li>json</li>
                                        <li>ldap</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-md-3">
                        <table class="pricingTableContent2">

                            <tr>
                                <td class="noBorder2">
                                    <ul>
                                        <li>nd_pdo_mysql</li>
                                        <li>oauth</li>
                                        <li>oci8</li>
                                        <li>odbc</li>
                                        <li>opcache</li>
                                        <li>pdf</li>
                                        <li>pdo</li>
                                        <li>pdo_dblib</li>
                                        <li>pdo_firebird</li>
                                        <li>pdo_mysql</li>
                                        <li>pdo_odbc</li>
                                        <li>pdo+pgsql</li>
                                        <li>pdo_sqlite</li>
                                        <li>pgsql</li>
                                        <li>palcon</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="col-md-3">
                        <table class="pricingTableContent noBorder">

                            <tr>
                                <td class="noBorder2">
                                    <ul>
                                        <li>stats</li>
                                        <li>stem</li>
                                        <li>oci8</li>
                                        <li>stom</li>
                                        <li>suhosin</li>
                                        <li>sybase_ct</li>
                                        <li>sysvmsg</li>
                                        <li>sysvsem</li>
                                        <li>sysvshm</li>
                                        <li>tidy</li>
                                        <li>timezonedb</li>
                                        <li>trader</li>
                                        <li>translit</li>
                                        <li>uri_template</li>
                                        <li>uuid</li>
                                    </ul>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <center><a href="#" class="pesan">Selengkapnya</a></center>
                </div>
            </div>
        </div>

        <!--linux-->
        <div id="hosstab">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12 col-md-5">

                        <div class="hosting-left">
                            <p class="font-m-light">Linux Hosting yang Stabil dengan Teknologi LVE</p>

                            <ul>
                                <li>SuperMicro <strong>Intel Xeon 24-cores</strong> server dengan ram
                                    <strong>128 GB</strong> dan teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Anda. Dilengkapi dengan <strong>SSD</strong> untuk kececpetan <strong>MySQl</strong> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security,<strong> Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda. </li>
                                <li>&nbsp; </li>
                                <li><a href="#" class="pesan button3">Pilih Hosting Anda</a> </li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-xs-12 col-md-7">
                        <div class="hosting-right">
                            <img src="images/Image support.png" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--like-->
        <div id="like">
            <div class="like-footer ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="like-footer-left">

                                <p>Bagikan jika Anda menyukai halaman ini.</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="like-footer-right">
                                <i class="fa fa-facebook-square" style="font-size:48px;color:#3b5998"></i>
                                <img style="font-size:48px;" src="images/80k.png">
                                <i class="fa fa-twitter-square" style="font-size:48px;color:#2bc4ff"></i>
                                <img style="font-size:48px;" src="images/450.png">
                                <i class="fa fa-google-plus-square" style="font-size:48px;color:red"></i>
                                <img style="font-size:48px;" src="images/19.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="like-footer2 ">
                <div class="container">
                    <div class="row">

                        <div class="col-md-11">
                            <div class="like-footer-left2">

                                <p>Perlu <strong>BANTUAN?</strong> Hubungi Kami : 0274-5305505</p>
                            </div>
                        </div>

                        <div class="col-md-1">
                            <div class="like-footer-right">
                                <button class="btn"><i class="fa fa-comments" aria-hidden="true"></i> Live Chat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--footer-->

        <footer id="fh5co-footer" role="contentinfo" style="background-color: #303030;">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                        <h5>HUBUNGI KAMI</h5>
                        <ul class="fh5co-footer-links">
                            <li>
                                <p>Telp: <a href="tel:+62742885822">0274-2885822</a>
                                    <br>WA: <a href="https://api.whatsapp.com/send?phone=62895395186038">085943258274</a>
                                    <br>Senin - Minggu
                                    <br>24 Jam Non Stop</p>
                                <p>Jl. Palagan Tentara Pelajar
                                    <br>No 81 Jongkang, Sariharjo,
                                    <br>Ngaglik, Sleman
                                    <br>Daerah Istimewa Yogyakarta
                                    <br>55581</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                        <h5>LAYANAN</h5>
                        <ul class="fh5co-footer-links">
                            <li><a href="https://www.niagahoster.co.id/domain-murah">Domain</a></li>
                            <li><a href="https://www.niagahoster.co.id/hosting-indonesia">Shared Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/cloud-hosting">Cloud Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/cloud-vps-hosting">Cloud VPS Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/promosi-transfer">Transfer Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/membuat-blog-weebly">Web Builder</a></li>
                            <li><a href="https://www.niagahoster.co.id/ssl-murah">Keamanan SSL/HTTPS</a></li>
                            <li><a href="https://www.niagaweb.co.id/">Jasa Pembuatan Website</a></li>
                            <li><a href="https://www.niagahoster.co.id/afiliasi">Program Afiliasi</a></li>
                            <li><a href="https://www.niagahoster.co.id/whois">Whois</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                        <h5>SERVICE HOSTING</h5>
                        <ul class="fh5co-footer-links">
                            <li><a href="https://www.niagahoster.co.id/hosting-murah">Hosting Murah</a></li>
                            <li><a href="https://www.niagahoster.co.id/hosting-indonesia">Hosting Indonesia</a></li>
                            <li><a href="https://www.niagahoster.co.id/hosting-singapore">Hosting Singapore SG</a></li>
                            <li><a href="https://www.niagahoster.co.id/wordpress-hosting">Hosting Wordpress</a></li>
                            <li><a href="https://www.niagahoster.co.id/email-hosting">Email Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/reseller-hosting">Reseller Hosting</a></li>
                            <li><a href="https://www.niagahoster.co.id/web-hosting-unlimited">Web Hosting Unlimited</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                        <h5>KENAPA PILIH NIAGAHOSTER?</h5>
                        <ul class="fh5co-footer-links">
                            <li><a href="https://www.niagahoster.co.id/hosting-terbaik">Hosting Terbaik</a></li>
                            <li><a href="https://www.niagahoster.co.id/datacenter-hosting">Datacenter Hosting Terbaik</a></li>
                            <li><a href="https://www.niagahoster.co.id/hosting-indonesia#hosting-price">Domain Gratis</a></li>
                            <li><a href="https://www.niagahoster.co.id/domain-gratis">Bagi-bagi Domain Gratis</a></li>
                            <li><a href="https://www.niagahoster.co.id/hosting-gratis">Bagi-bagi Hosting Gratis</a></li>
                            <li><a href="https://www.niagahoster.co.id/review">Review Pelanggan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <h5>TUTORIAL</h5>
                        <ul class="fh5co-footer-links">
                            <li><a href="https://www.niagahoster.co.id/ebook">Ebook Gratis</a></li>
                            <li><a href="https://www.niagahoster.co.id/kb">Knowledgebase</a></li>
                            <li><a href="https://www.niagahoster.co.id/blog">Blog</a></li>
                            <li><a href="https://www.niagahoster.co.id/pembayaran">Cara Pembayaran</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-sm-0">
                        <h5>TENTANG KAMI</h5>
                        <ul class="fh5co-footer-links">
                            <li><a href="https://www.niagahoster.co.id/promosi">Penawaran & Promo Spesial</a></li>
                            <li><a href="https://www.niagahoster.co.id/niagapoin">Niaga Poin</a></li>
                            <li><a href="https://www.niagahoster.co.id/karir">Karir</a></li>
                            <li><a href="https://www.niagahoster.co.id/kontak">Kontak Kami</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                        <h5>NEWSLETTER</h5>
                        <form id="newsletter">
                            <div class="input-group">
                                <input type="text" id="ip2" class="form-control">
                                <span class="input-group-btn">
                              <button class="btn btn-round-lg btn-default" type="button">Berlangganan</button>
                            </span>
                            </div>
                            <p>Dapatkan promo dan konten menarik dari penyedia hosting Anda.</p>
                        </form>

                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">

                        <ul class='demopadding'>
                            <li>
                                <a class='icon social fb' href="https://www.facebook.com/niagahoster">
                                    <i class="fa fa-facebook" alt="facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a class='icon social tw' href="https://twitter.com/niagahoster">
                                    <i class="fa fa-twitter" alt="twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a class='icon social gp' href="https://www.linkedin.com/company/niagahoster">
                                    <i class="fa fa-google-plus" alt="google plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="footer-left">
                                <h5>Pembayaran</h5>
                                <img src="images/bank.png">
                                <div class="credits">
                                    Aktivasi instan dengan e-payment. Hosting dan domain langsung aktif.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bottom-footer">
                <div class="container">
                    <div class="row">
                        <hr>
                        <div class="col-md-9">
                            <div class="footer-left">
                                Copyright &copy; 2016 Niagahoster | Hosting powered by PHP7 CloudLinux, CloudFlare, BitNinja, and DC Biznet Technovillage Jakarta
                                <div class="credits">
                                    Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-right">
                                <ul class="list-unstyled list-inline pull-right">
                                    <li>Syarat dan Ketentuan | Kebijakan Privasi</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/jquery.inview.js"></script>
        <script src="js/script.js"></script>
        <script src="contactform/contactform.js"></script>

    </body>

    </html>