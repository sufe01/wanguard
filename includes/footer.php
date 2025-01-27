<?php
if (isset($_SESSION['user_id'])) {
?>
    <section class="section-wrapper w-100 py-5 login-section">
        <div class="container">
            <div class="card bg-black text-white">
                <div class="card-body text-center">
                    <img src="assets/images/logo3.png" class="img-fluid px-4">
                    <h2 class="fw-light mt-3">VANGUARD WEALTH BUILDERS</h2>
                    <div>
                        <p>Logged in as: <span class="text-primary"><?= $_SESSION['email'] ?></span></p>
                        <a href="logout" class="text-danger btn btn-link">Logout? </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>

<footer class="bg-black">
    <div class="container">
        <div class="pt-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 footer-content text-center text-lg-start text-md-center py-5 py-lg-0 ">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/Logo.png" style="max-width: 150px; height: 150px;">
                    </a>
                    <p>"You Don’t Have To Be Great To Start,<br> But You Have To Start To Be Great."</p>
                    <p> -- Zig Ziglar</p>
                </div>

                <div class="col-lg-3 col-md-6 col-4 footer-content">
                    <h5 class="pb-3">Activity</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">New Appointment</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">New Client</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">New Recruitment</a></li>
                        <li class="nav-item mb-2"><a href="FNF" class="nav-link p-0">New FNA</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 col-4 footer-content">
                    <h5 class="pb-3">Product</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Life Insurance</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Annuities</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Debt Management</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Estate Plaining</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 col-4 footer-content">
                    <h5 class="pb-3">Contact</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Home Office</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Operating Teams</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0">Licensing Team</a></li>
                    </ul>
                </div>
            </div>

            <div class="py-4 border-top footer-content text-center">
                <p class="">Copyright © <?= date('Y') ?> <strong>VANGUARD Wealth Builder</strong></p>
            </div>
        </div>
    </div>
</footer>

<script src="js/jquery-3.6.3.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/multi-select.js"></script>
<script src="customjs/myjs.js?v=1890"></script>
<script src="js/sweetalert.js"></script>
<script src="js/slick.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>

<!--DataTables-->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<!--FancyBox-->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>
    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function(now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
</script>
</body>

</html>