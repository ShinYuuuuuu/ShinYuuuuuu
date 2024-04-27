<?php include 'header.php'; ?>

<main class="container py-5 position-relative">
    <div class="row">
        <div class="col">
            <div class="position-relative">
                <div class="overlay-container">
                    <img src="img1.jpg" class="img-fluid rounded object-fit-cover" alt="Funeral Home" style="width: 100%; margin-top: 0;" />
                    <div class="overlay-content position-absolute top-50 start-50 translate-middle text-center text-white">
                        <h2 class="display-4" style="color: white; text-shadow: 2px black; border: 2px;"><b>Welcome to Villa Babas Funeral Homes</b></h2>
                        <p class="lead">Providing compassionate and professional funeral services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<div class="container mb-4">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title">Additional Details</h2>
            <div class="accordion" id="additionalDetailsAccordion">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Additional Detail 1
                        </button>
                    </h3>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#additionalDetailsAccordion">
                        <div class="accordion-body">
                            Additional detail 1
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Additional Detail 2
                        </button>
                    </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#additionalDetailsAccordion">
                        <div class="accordion-body">
                            Additional detail 2
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Additional Detail 3
                        </button>
                    </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#additionalDetailsAccordion">
                        <div class="accordion-body">
                            Additional detail 3
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="container py-5 mb-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h2 class="card-title">About Us</h2>
                    <p class="card-text">We are dedicated to providing compassionate and professional funeral services to families in their time of need. Our experienced staff is here to guide you through every step of the funeral planning process, ensuring that your loved one is honored with dignity and respect.</p>
                    <p class="card-text">At Villababas Funeral Homes, we offer a range of services, including traditional funeral services, cremation services, memorial services, and pre-planning options. Whatever your needs may be, we are committed to helping you create a meaningful and personalized tribute to your loved one.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Contact Us</h5>
                    <p class="card-text"><strong>Villababas Funeral Homes</strong><br>
                    123 Main Street<br>
                    City, State ZIP<br>
                    Phone: (555) 123-4567<br>
                    Email: info@villababasfuneralhomes.com</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php' ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
