<!-- resources/views/partials/navbar.blade.php -->

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Res<span class="text-secondary">cueF</span>ood</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/reservations') }}" class="nav-item nav-link active">Reservations</a>
                <a href="{{ url('/demandes') }}" class="nav-item nav-link">Demandes</a>
                <a href="{{ url('/posts') }}" class="nav-item nav-link">Publications</a>
                <a href="{{ url('/notifications') }}" class="nav-item nav-link">Notifications</a>
                <a href="{{ url('/events') }}" class="nav-item nav-link">Events</a>
                <a href="{{ url('/produitAlimentaire') }}" class="nav-item nav-link">Produits</a>
                <a href="{{ url('/recommendations') }}" class="nav-item nav-link">Recommendations</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact Us</a>
            </div>
           
        </div>
    </nav>
</div>
<!-- Navbar End -->
