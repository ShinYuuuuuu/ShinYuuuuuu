<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Handling - Villababas Funeral Homes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>

<?php include 'adminheader.php'; ?>

<main class="container py-5">
    <h1 class="mb-4">Client Handling - Funeral Services</h1>

    <div class="row mb-4">
        <div class="col">
            <h2>Recent Clients</h2>
            <!-- Placeholder for displaying recent clients -->
            <ul id="recentClients" class="list-group"></ul>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <button id="addClientBtn" class="btn btn-primary">Add New Client</button>
        </div>
    </div>

    <!-- Add New Client Form (Hidden by Default) -->
    <div id="newClientForm" class="row mb-4" style="display: none;">
        <div class="col">
            <h2>Add New Client</h2>
            <form>
                <div class="mb-3">
                    <label for="clientName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="clientName" required>
                </div>
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="clientEmail">
                </div>
                <div class="mb-3">
                    <label for="clientPhone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="clientPhone">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

    <!-- Client Details Modal -->
    <div class="modal fade" id="clientDetailsModal" tabindex="-1" aria-labelledby="clientDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="clientDetailsModalLabel">Client Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Placeholder for displaying client details -->
                    <ul id="clientDetailsList" class="list-group"></ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'adminfooter.php'; ?>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to display recent clients
    function displayRecentClients(clients) {
        const recentClientsList = document.getElementById('recentClients');
        recentClientsList.innerHTML = '';
        clients.forEach(client => {
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = client.name;
            listItem.style.cursor = 'pointer';
            listItem.addEventListener('click', () => displayClientDetails(client));
            recentClientsList.appendChild(listItem);
        });
    }

    // Function to display client details in a modal
    function displayClientDetails(client) {
        const clientDetailsList = document.getElementById('clientDetailsList');
        clientDetailsList.innerHTML = '';
        for (const [key, value] of Object.entries(client)) {
            const listItem = document.createElement('li');
            listItem.classList.add('list-group-item');
            listItem.textContent = `${key}: ${value}`;
            clientDetailsList.appendChild(listItem);
        }
        const modal = new bootstrap.Modal(document.getElementById('clientDetailsModal'));
        modal.show();
    }

    // Function to show/hide the add new client form
    function toggleNewClientForm() {
        const newClientForm = document.getElementById('newClientForm');
        const addClientBtn = document.getElementById('addClientBtn');
        if (newClientForm.style.display === 'none') {
            newClientForm.style.display = 'block';
            addClientBtn.textContent = 'Cancel';
        } else {
            newClientForm.style.display = 'none';
            addClientBtn.textContent = 'Add New Client';
        }
    }

    // Dummy data for recent clients (replace with actual data)
    const recentClients = [
        { name: 'John Doe', email: 'john@example.com', phone: '555-123-4567' },
        { name: 'Jane Smith', email: 'jane@example.com', phone: '555-987-6543' },
        { name: 'Michael Johnson', email: 'michael@example.com', phone: '555-111-2222' }
    ];

    // Display recent clients on page load
    displayRecentClients(recentClients);

    // Event listener for the add client button
    document.getElementById('addClientBtn').addEventListener('click', toggleNewClientForm);
</script>
</body>
</html>
