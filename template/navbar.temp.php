<!--START OF NAVBAR-->
<?php $currentPage = $_SERVER['REQUEST_URI']; ?>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-dark bg-body-tertiary navbar-expand-lg sticky-top py-3" id="mainNav">
        <div class="container d-flex align-items-center justify-content-between">

            <!-- Logo & Title -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand d-flex align-items-center" href="https://www.facebook.com/groups/7061129270619986">
                    <img src="/images/AVC-Logo.svg" alt="AVC Logo" width="64" height="64" class="me-2">
                    <span>Alliance Volleyball Club</span>
                </a>
            </div>

            <!-- Burger Menu -->
            <button class="navbar-toggler ms-auto d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navcol-menu" aria-controls="navcol-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Items -->
            <div class="collapse navbar-collapse text-center" id="navcol-menu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/') ? 'active fw-bold' : ''; ?>" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/fixture-results') ? 'active fw-bold' : ''; ?>" href="/fixture-results">Fixtures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/gallery') ? 'active fw-bold' : ''; ?>" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/teams') ? 'active fw-bold' : ''; ?>" href="/teams">Our Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/committee') ? 'active fw-bold' : ''; ?>" href="/committee">Committee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentPage == '/about-us') ? 'active fw-bold' : ''; ?>" href="/about-us">About Us</a>
                    </li>
                </ul>
                <a class="btn btn-primary shadow mb-3 mt-3" role="button" href="/open-gyms">Come Play!</a>
            </div>
        </div>
    </nav>

    <!--END OF NAVBAR-->

    <main class="flex-grow-1 container text-center">
        <div class="container-md mt-4 pt-2 pb-2">