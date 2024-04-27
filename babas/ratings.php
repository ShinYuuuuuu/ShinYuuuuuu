<?php include 'header.php'; ?>

<main class="container py-5">
    <section>
        <h2 class="mb-4">Ratings</h2>
        <div id="ratingCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#ratingCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#ratingCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#ratingCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="card shadow text-center">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img src="profile.png" class="rounded-circle mb-3" alt="John Doe" width="100">
                            <h6 class="card-subtitle mb-2 text-muted">John Doe</h6>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow text-center">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img src="profile.png" class="rounded-circle mb-3" alt="Jane Smith" width="100">
                            <h6 class="card-subtitle mb-2 text-muted">Jane Smith</h6>
                            <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card shadow text-center">
                        <div class="card-body d-flex flex-column align-items-center">
                            <img src="profile.png" class="rounded-circle mb-3" alt="Emily Brown" width="100">
                            <h6 class="card-subtitle mb-2 text-muted">Emily Brown</h6>
                            <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#ratingCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#ratingCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
