<footer class="bg-dark text-white py-4 fixed-bottom" id="footer" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0">&copy; 2024 Villababas Funeral Homes. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <nav>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="text-white">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Terms of Service</a></li>
                        <li class="list-inline-item"><a href="#" class="text-white">Sitemap</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<script>
    window.addEventListener('scroll', function() {
        var footer = document.getElementById('footer');
        var scrollPosition = window.scrollY + window.innerHeight;
        var documentHeight = document.body.offsetHeight;

        if (scrollPosition >= documentHeight) {
            footer.style.display = 'block';
        } else {
            footer.style.display = 'none';
        }
    });
</script>
