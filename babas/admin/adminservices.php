<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'adminheader.php' ?>
<div class="container mt-5">
    <h1>Edit Service Details</h1>
    <form>
        <div class="mb-3">
            <label for="serviceName" class="form-label">Service Name</label>
            <input type="text" class="form-control" id="serviceName">
        </div>
        <div class="mb-3">
            <label for="serviceDescription" class="form-label">Service Description</label>
            <textarea class="form-control" id="serviceDescription" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="servicePrice" class="form-label">Service Price</label>
            <input type="text" class="form-control" id="servicePrice">
        </div>
        <div class="mb-3">
            <label for="serviceDuration" class="form-label">Service Duration</label>
            <input type="text" class="form-control" id="serviceDuration">
        </div>
        <div class="mb-3">
            <label for="serviceCategory" class="form-label">Service Category</label>
            <select class="form-select" id="serviceCategory">
                <option selected>Select category...</option>
                <option value="category1">Category 1</option>
                <option value="category2">Category 2</option>
                <option value="category3">Category 3</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php include 'adminfooter.php' ?>
</body>
</html>
