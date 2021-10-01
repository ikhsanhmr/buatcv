<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
    <div class="container">
        <a class="navbar-brand" href="/">
            BUATCV
            <!-- <img src="assets/images/logo.png" alt="" class="img-fluid b-logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav"
            aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        CV
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                        <a class="dropdown-item" href="">
                            Template CV
                        </a>
                        <a class="dropdown-item" href="">
                            Cara Membuat CV
                        </a>
                        <a class="dropdown-item" href="">
                            Contoh CV
                        </a>
                        <a class="dropdown-item bg-dark text-white" href="{{ route('create-cv') }}">
                            Buat CV Sekarang
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarWelcome" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Surat Lamaran Kerja
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarWelcome">
                        <a class="dropdown-item" href="">
                            Template Surat Lamaran Kerja
                        </a>
                        <a class="dropdown-item" href="">
                            Cara Buat Surat Lamaran Kerja
                        </a>
                        <a class="dropdown-item" href="">
                            Contoh Surat Lamaran Kerja
                        </a>
                        <a class="dropdown-item bg-dark text-white" href="{{ route('create-cv') }}">
                            Buat Surat Lamaran Kerja
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('info.kerja') }}">Info Lowongan Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create-cv') }}">Buat CV + Lamaran</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
