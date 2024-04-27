<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<style>
    /* Add your custom CSS styles here */
    .mb-4 {
        margin-top: 0; /* Add this line to remove the top margin */
    }
    .mt-5 {
        background-color: #f0f0f0;
        padding: 20px;
        border-radius: 10px;
        padding-top: 0;
    }
    .py-5 {
        padding-top: 0 !important;
        padding-bottom: 3rem !important;
    }
</style>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container py-5">        
    <h2 class="mb-4">Suggested Questions</h2>
    <div class="accordion" id="suggestedQuestionsAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="questionHeadingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Contact Info
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="questionHeadingOne" data-bs-parent="#suggestedQuestionsAccordion">
                <div class="accordion-body">
                    Our contact info: 123 Main Street, City, State ZIP<br>Phone: (555) 123-4567<br>Email: info@villababasfuneralhomes.com
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="questionHeadingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Office Hours
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="questionHeadingTwo" data-bs-parent="#suggestedQuestionsAccordion">
                <div class="accordion-body">
                    Our office hours are Monday to Friday, 9:00 AM to 5:00 PM.
                </div>
            </div>
        </div>
        <!-- Add more suggested questions -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="questionHeadingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Do you offer any special services?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="questionHeadingThree" data-bs-parent="#suggestedQuestionsAccordion">
                <div class="accordion-body">
                    Yes, we offer special services such as [describe special services].
                </div>
            </div>
        </div>
        <!-- Add more suggested questions -->
        <!-- Repeat the structure for each additional question -->
    </div>
    <br>
    <br>
    <section>
        <h2 class="mb-4">Contact Us</h2>
        <div id="chat-container" class="mb-4"></div>
        <form id="chat-form">
            <div class="input-group">
                <input type="text" id="chat-input" class="form-control" placeholder="Type your message...">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </section>
    <section class="mt-5">
        <h2 class="mb-4">Contact Information</h2>
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </section>

</main>
<br>
<br>




<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Chatbot Script -->
<script>
    const chatContainer = document.getElementById('chat-container');
    const chatForm = document.getElementById('chat-form');
    const chatInput = document.getElementById('chat-input');

    chatForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const message = chatInput.value.trim();
        if (message !== '') {
            displayMessage(message, true);
            // Handle other message responses here
            chatInput.value = '';
        }
    });

    function displayMessage(message, user) {
        const messageElement = document.createElement('div');
        messageElement.classList.add(user ? 'text-end' : 'text-start');
        messageElement.innerHTML = `<div class="alert ${user ? 'alert-primary' : 'alert-secondary'}" role="alert">${message}</div>`;
        chatContainer.appendChild(messageElement);
        chatContainer.scrollTop = chatContainer.scrollHeight; // Scroll to bottom
    }

    // Initial greeting from the chatbot
    displayMessage("Hello! How can we assist you?", false);
</script>
<?php include 'footer.php'; ?>
</body>
</html>
