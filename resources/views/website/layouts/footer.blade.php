<!-- Start of Footer -->
<footer class="footer-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <div class="footer-logo">
                        <img src="{{ asset('website/img/footer-logo.png') }}" alt="logo" class="img-fluid">
                    </div>
                    <ul class="social-links-footer list-inline">
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-rss"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="fa fa-vimeo"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End of Footer -->

<!-- Start of Subfooter -->
<footer class="subfooter">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="copyright-text">
                    <p><a href="#">{{ config('custom.websiteName') }}</a> &#169; {{ \Carbon\Carbon::now()->format('Y') }} All Right Reserved</p>
                </div>
            </div>
            <div class="col-md-6">
                <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End of Subfooter -->
