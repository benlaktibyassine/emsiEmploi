<!-- Js Link -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/fancybox.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/scrollCue.min.js"></script>
<script src="assets/js/subscribe-custom.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script>
    const toggle = document.getElementById("header-toggle")
    const nav = document.getElementById("nav-bar")
    const bodypd = document.getElementById("body-pd")
    const headerpd = document.getElementById("header")

    // Validate that all variables exist
    toggle.addEventListener('click', () => {
        // show navbar
        console.log("sabir");
        nav.classList.toggle('showSideBar')
        // // change icon
        toggle.classList.toggle('bx-x')
        // // add padding to body
        bodypd.classList.toggle('body-pd')
        // // add padding to header
        headerpd.classList.toggle('body-pd')
    })
    
</script>
</body>

</html>
