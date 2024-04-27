<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villababas Funeral Homes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-brand {
            color: #fff !important;
            padding-left: 10px; /* Add space before the text */
        }
        .navbar-nav .nav-link:hover {
            color: #fff !important;
        }
        .navbar-nav .active {
            font-weight: bold;
            color: #fff !important;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="OLC.png" alt="" width="50" height="50"> <!-- Add your photo here -->
            Welcome to Villa Babas Funeral Homes
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'home.php') echo 'active'; ?>">
                    <a class="nav-link" href="admindashboard.php">Dashboard</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'services.php') echo 'active'; ?>">
                    <a class="nav-link" href="adminservices.php">Services</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'active'; ?>">
                    <a class="nav-link" href="adminclients.php">Clients</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'ratings.php') echo 'active'; ?>">
                    <a class="nav-link" href="ratings.php">Settings</a>
                </li>
                <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == 'ratings.php') echo 'active'; ?>">
    <a class="nav-link logout-btn" href="#">Logout</a>
</li>

                <!-- Admin-specific options -->
                
                <!-- End of admin-specific options -->
            </ul>
        </div>
    </div>
</nav>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Function to handle logout action
    document.querySelector('.logout-btn').addEventListener('click', function() {
        // Perform logout actions here if needed
        
        // Redirect to the desired location
        window.location.href = '/babas/index.php';

    });
</script>

</body>
</html>
