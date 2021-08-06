<body>
    <header>
        <div class="container d-flex flex-row-reverse align-items-end border-bottom">
            <nav class="navbar">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> 0274-5305505</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-comments fa-fw" aria-hidden="true"></i>Live Chat</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i>Member Area</a>
                    </li>
                </ul>
        </div>
        <div class="container d-flex align-items-center border-bottom my-2">
            <!-- Uncomment below if want to use text instead of Logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Sailor</a></h1> -->
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="logo me-auto"><img src="<?= $logo_src ?>" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#">Hosting</a></li>
                    <li><a href="#">Domain</a></li>
                    <li><a href="#">Server</a></li>
                    <li><a href="#">Website</a></li>
                    <li><a href="#">Afiliasi</a></li>
                    <li><a href="#">Promo</a></li>
                    <li><a href="#">Pembayaran</a></li>
                    <li><a href="#">Review</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container border-bottom">
                <div class="row content mt-3">
                    <div class="col-lg-6">
                        <h2>PHP Hosting</h2>
                        <h3>Cepat, handal, penuh dengan </h3>
                        <h3>modul yang Anda butuhkan</h3>
                        <h4 class="mt-4">
                            <!-- using 2 fontawesome, first one is for background, second one is for icon -->
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Solusi PHP untuk performa query yang lebih cepat.
                        </h4>
                        <h4>
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Konsumsi memori yang lebih rendah.
                        </h4>
                        <h4>
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                        </h4>
                        <h4 class="mb-4">
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Fitur enkripsi IonCube dan Zend Guard Loaders
                        </h4>
                    </div>
                    <!-- Image on the second column -->
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <embed src="<?= $banner_php_hosting ?>" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Container for 3 image and their text-->
            <div class="container">
                <div class="row content mt-5">
                    <!-- separated 4 4 4 -->
                    <div class="card col-lg-4 border-0">
                        <embed src="<?= $zen_guard ?>" class="card-img-top img_center">
                        <p class="card-text">PHP Zend Guard Loader</p>
                    </div>
                    <div class="card col-lg-4 border-0">
                        <embed src="<?= $composser ?>" class="card-img-top img_center">
                        <p class="card-text">PHP Composser</p>
                    </div>
                    <div class="card col-lg-4 border-0">
                        <embed src="<?= $ion_cube ?>" class="card-img-top img_center">
                        <p class="card-text">PHP ionCube Loader</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row content mb-5">
                    <h2>Paket Hosting Singapura yang Tepat</h2>
                    <h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
                </div>
            </div>
            <div class="container">
                <div class="row content">
                    <!-- separated 4 4 4, 'tab' will separate inside div with outside div -->
                    <?php for ($a = 0; $a < (12 / $col_prc); $a++) : ?>

                        <!-- determine best seller or not -->
                        <?php if ($a == $best_seller) {
                            $class_type = "best_sell border border-primary";
                        } else $class_type = "tab border"; ?>

                        <div class="<?= $class_type ?> col-lg-3">
                            <div class="box">
                                <div class="ribbon ribbon-top-left"><span>Best Seller</span></div>
                            </div>
                            <div class="packet">
                                <h3><b><?= $price[$a]->packet ?></b></h3>
                            </div>
                            <div class="current">
                                <p><s>Rp <?= $price[$a]->old_price ?></s></p>
                                <span><sup>Rp </sup><sub><b><?= $current_a[$a] ?></b></sub><sup>.<?= $current_b[$a] ?>/ bln</sup></span>
                            </div>
                            <div class="users">
                                <p><b><?= $price[$a]->old_price ?></b> Pengguna Terdaftar</p>
                            </div>
                            <div class="mb-3">
                                <p><b><?= $price[$a]->main_f ?> RESOURCE POWER</b></p>
                                <?php foreach ($price[$a]->feature as $ar_pr) : ?>
                                    <p class="my-1"><?= $ar_pr ?></p>
                                <?php endforeach ?>
                            </div>
                            <div>
                                <button class="button"><?= $price[$a]->status ?></button>
                            </div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Feature Section ======= -->
        <section id="feature" class="feature">
            <div class="container">
                <div class="row content mt-3">
                    <h3>Powerfull dengan Limit PHP yang Lebih Besar </h3>

                    <!-- First Collumn -->
                    <div class="col-lg-6 mt-4">
                        <table class="table text-nowrap table-striped">
                            <thead style="visibility: collapse;">
                                <tr>
                                    <th style="width: 5%"></th>
                                    <th style="width: 95%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>max execution time 300s</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>max execution time 300s</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>php memory limit 1024 MB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- second column -->
                    <div class="col-lg-6 mt-4">
                        <table class="table text-nowrap table-striped">
                            <thead style="visibility: collapse;">
                                <tr>
                                    <th style="width: 5%"></th>
                                    <th style="width: 95%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>post max size 128 MB</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>upload max filesize 128 MB</td>
                                </tr>
                                <tr>
                                    <th scope="row"><span class="fa-stack fa-fw">
                                            <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                            <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                                        </span></th>
                                    <td>max input vars 2500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Container for 6 image and their text-->
            <div class="container">
                <div class="row content mt-5">
                    <h3 class="mb-4">Semua Paket Hosting Sudah Termasuk</h3>
                    <h3 class="mb-4"></h3>
                    <!-- separated 4 4 4 -->
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $php_all ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>PHP Semua Versi</h4>
                            <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $hosting_my_sql ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>MySQL Versi 5.6</h4>
                            <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $cpanel ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>Panel Hosting cPanel</h4>
                            <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="row content">
                    <!-- separated 4 4 4 -->
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $uptime ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>Garansi Uptime 99.9%</h4>
                            <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $innodb ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>Database InnoDB Unlimited</h4>
                            <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                        </div>
                    </div>
                    <div class="card col-lg-4 border-0 my-4">
                        <embed src="<?= $sqlremote ?>" class="card-img-top img_center">
                        <div class="card-text">
                            <h4>Wildcard Remote MySQL</h4>
                            <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Feature Section -->

        <!-- ======= Feature2 Section ======= -->
        <section id="feature2" class="feature2">
            <!-- laravel -->
            <div class="container border-bottom">
                <div class="row content">
                    <h3>Mendukung Penuh Framework Laravel </h3>
                    <div class="col-lg-6 mt-4">
                        <h4>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda </h4>
                        <p class="mt-4">
                            <!-- using 2 fontawesome, first one is for background, second one is for icon -->
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Install Laravel <b>1 klik</b> dengan Softaculous Installer.
                        </p>
                        <p>
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Mendukung exstensi <b>PHP MCrypt, phar, mbstring, json, </b> dan <b>fileinfo</b>.
                        </p>
                        <p>
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan Anda.
                        </p>
                        <p class="mb-4">
                            <span class="fa-stack fa-fw">
                                <i class="fa fa-circle fa-stack-2x icon-background"></i>
                                <i class="fa fa-check fa-stack-1x icon-foreground" aria-hidden="true"></i>
                            </span>
                            Fitur enkripsi IonCube dan Zend Guard Loaders
                        </p>
                        <p class="mb-4">
                            <sub> Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis </sub>
                        </p>
                        <div>
                            <button class="button_blue">Pilih Hosting Anda</button>
                        </div>
                    </div>
                    <!-- Image on the second column -->
                    <div class="col-lg-6 pt-4 pt-lg-0 mt-4">
                        <embed src="<?= $hosting_laravel ?>" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- list of modul -->
            <div class="container">
                <div class="row content mt-5 mx-4">
                    <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda. </h3>

                    <!-- 4 collumn -->
                    <div class="col-lg-3 my-4">
                        <p>IcePHP <br> apc <br>apcu<br>apm<br>ares<br>bcmath<br>bcompiler<br>big_int<br>bitset<br>bloomy<br>bz2_filter<br>clamav<br>coin_acceptor<br>crack<br>dba</p>
                    </div>
                    <div class="col-lg-3 my-4">
                        <p>http<br>huffman<br>idn<br>igbinary<br>imagick<br>imap<br>inclued<br>inotify<br>interbase<br>intl<br>ioncube_loader<br>ioncube_loader_4<br>jsmin<br>json<br>ldap</p>
                    </div>
                    <div class="col-lg-3 my-4">
                        <p>nd_pdo_mysql<br>oauth<br>oci8<br>odbc<br>opcache<br>pdf<br>pdfo<br>pdfo_dblib<br>pdo_firebird<br>pdo_mysql<br>pdo_odbc<br>pdo_pgsql<br>pdo_sqlite<br>pgsql<br>phalcon</p>
                    </div>
                    <div class="col-lg-3 my-4">
                        <p>stats<br>stem<br>stomp<br>suhosin<br>sybase_ct<br>sysvmsg<br>sysvsem<br>sysvshm<br>tidy<br>timezonedb<br>trader<br>translit<br>uploadprogress<br>uri_template<br>uuid</p>
                    </div>
                    <div>
                        <button class="button my-4">Selengkapnya</button>
                    </div>
                </div>
            </div>

            <!-- linux -->
            <div class="container border-bottom">
                <div class="row content">
                    <div class="col-lg-6 mt-5 linux">
                        <h3>Linux Hosting yang Stabil dengan Teknologi LVE </h3>
                        <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE Cloud Linux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeedTechnologies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk kemanan website PHP Anda. </p>
                        <div>
                            <button class="button_blue mt-4">Pilih Hosting Anda</button>
                        </div>
                    </div>
                    <!-- Image on the second column -->
                    <div class="col-lg-6 pt-4 pt-lg-0 mt-5">
                        <embed src="<?= $foto_pegawai ?>" class="img-fluid">
                    </div>
                </div>
            </div>

        </section><!-- End Feature2 Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-6">
                        <p>Bagikan jika anda menyukai halaman ini</p>
                    </div>
                    <!-- Image on the second column -->
                    <div class="col-lg-6">
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
                        <!-- <a href="#" class="fa fa-facebook"></a> -->
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="fa fa-twitter" data-size="large" data-text="Test only" data-url="https://www.niagahoster.co.id/" data-via="developer_imga" data-hashtags="niagahoster" data-lang="id" data-show-count="false"></a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <a href="#" class="fa fa-google"></a>
                    </div>
                </div>
            </div>

        </section><!-- End Clients Section -->

        <!-- ======== Contact Section ============ -->
        <section id="contact" class="contact contact_bg">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-8">
                        <h3>Perlu <b>Bantuan</b>? Hubungi Kami: 0274-5305505</h3>
                    </div>
                    <!-- Image on the second column -->
                    <div class="col-lg-4">
                        <button class="button"><i class="fa fa-comments fa-fw" aria-hidden="true"></i>Live Chat</button>
                    </div>
                </div>
            </div>

        </section><!-- End contact Section -->

    </main><!-- End #main -->

</body>

</html>