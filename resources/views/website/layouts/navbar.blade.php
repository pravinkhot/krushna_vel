<!-- Navigation Section -->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
    <div class="container-fluid p-0">
        <!-- logo -->
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('website/img/logo.png') }}" alt="Krushna Vel">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.home') }}">Home<span>/</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.aboutUs') }}">About Us<span>/</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('website.contactUs') }}">Contact</a>
                </li>
            </ul>
        </div>
  </div>
</nav>
<!-- End of Navigation Section -->