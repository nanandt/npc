<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Navbar Area -->
    <div class="mag-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="magNav">

                <!-- Nav brand -->
                <a href="{{ route('home') }}" class="nav-brand"><img src="{{ url('frontend/img/core-img/logo.png') }}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Nav Content -->
                <div class="nav-content d-flex align-items-center">
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="nav-item {{ request()->is('/') ? ' active' : '' }}">
                                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>
                                <li><a href="#">Cabang Olahraga</a>
                                    <ul class="dropdown">
                                        <li><a href="#">ATLETIK</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_atletik.html">PEMAIN</a></li>
                                            <li><a href="pelatih_atletik.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">CATUR</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_catur.html">PEMAIN</a></li>
                                            <li><a href="pelatih_catur.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BULU TANGKIS</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_bulutangkis.html">PEMAIN</a></li>
                                            <li><a href="pelatih_bulutangkis.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">TENIS MEJA</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_tenismeja.html">PEMAIN</a></li>
                                            <li><a href="pelatih_tenismeja.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">RENANG</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_renang.html">PEMAIN</a></li>
                                            <li><a href="pelatih_renang.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PANAHAN</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_panahan.html">PEMAIN</a></li>
                                            <li><a href="pelatih_panahan.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">JUDO</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_judo.html">PEMAIN</a></li>
                                            <li><a href="pelatih_judo.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">MENEMBAK</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_menembak.html">PEMAIN</a></li>
                                            <li><a href="pelatih_menembak.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">GOALBALL</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_goalball.html">PEMAIN</a></li>
                                            <li><a href="pelatih_goalball.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">TENIS LAPANG</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_tenislapang.html">PEMAIN</a></li>
                                            <li><a href="pelatih_tenislapang.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">VOLI DUDUK</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_voliduduk.html">PEMAIN</a></li>
                                            <li><a href="pelatih_voliduduk.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BALAP SEPEDA</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_balapsepeda.html">PEMAIN</a></li>
                                            <li><a href="pelatih_balapsepeda.html">PELATIH</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">ANGKAT BERAT</a>
                                            <ul class="dropdown">
                                            <li><a href="pemain_angkatberat.tml">PEMAIN</a></li>
                                            <li><a href="pelatih_angkatberat.tml">PELATIH</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Galeri</a>
                                    <ul class="dropdown">
                                        <li><a href="foto.html">FOTO</a></li>
                                        <li><a href="video.html">VIDEO</a></li>
                                    </ul>
                                </li>
                                <li><a href="berita.html">Berita</a></li>
                                <li><a href="jadwal.html">Jadwal Latihan</a></li>
                                <li><a href="about.html">About</a></li>
                                <li class="nav-item {{ request()->is('contact') ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav End -->
                    </div>

                    <div class="top-meta-data d-flex align-items-center">
                        <!-- Login -->
                        <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->