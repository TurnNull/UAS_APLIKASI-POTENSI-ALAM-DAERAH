<!DOCTYPE html>
<html lang="en">
    @include('layouts.beranda.header')
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('beranda.index') }}">Potensi Alam Daerah</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('profil.index') }}">Profil Kami</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li> --}}
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

       @yield('content')

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Potensi Alam Daerah 2024</div></footer>
        <!-- Bootstrap core JS-->
        @include('layouts.beranda.javascript')
    </body>
</html>
