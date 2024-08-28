<!-- Footer Start -->
<div class="container-fluid  footer mt-5 pt-5 wow fadeIn" style="background-color: black;" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <h1 class="text-white mb-4">Notes Jila</h1>
                <span>At Notes Jila, we believe that education is the key to a successful future. We are passionate
                    about helping students achieve their academic goals and aspirations by providing high-quality study
                    materials at affordable prices.

                    Our team of experienced educators carefully curates and creates notes on a wide range of subjects
                    and topics, ensuring that our customers have access to comprehensive and accurate study materials.
                    We strive to provide the best possible service to our customers, offering a user-friendly website
                    and excellent customer support.

                    Whether you're a high school student preparing for exams, a college student looking to deepen your
                    understanding of a subject, or a lifelong learner seeking to expand your knowledge, Notes Jila has
                    something for you. We are committed to making quality education accessible to everyone.

                    Thank you for choosing Notes Jila for your educational needs.</span>
            </div>

            <div class="col-md-6">
                <h1 class="text-white mb-4"><a href="<?php echo $hostname ?>"><img class="w-100" src="img/notes_jila.jpg" alt="Image"></a></h1>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>RAJAJIPURAM </p>
                <p><i class="fa fa-phone-alt me-3"></i>+91 8756841096</p>
                <p><i class="fa fa-envelope me-3"></i>notesjila@gmail.com</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Accses</h5>
                <a class="btn btn-link" href="#Python">Python</a>
                <a class="btn btn-link" href="#DSA">DSA</a>
                <a class="btn btn-link" href="#Java">Java</a>
                <a class="btn btn-link" href="#C">C & C++</a>
                <a class="btn btn-link" href="#Hacking">Hacking</a>


            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Follow Us</h5>
                <div class="d-flex">
                    <a class="btn btn-square rounded-circle me-1" href="https://instagram.com/notesjila"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://instagram.com/notesjila"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://instagram.com/notesjila"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="https://instagram.com/notesjila"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="<?php echo $hostname ?>">Notes Jila</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



<!-- Javascript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="js/main.js"></script>
<script>
// Smooth scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<script>
$(' #catg.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    dots: false,
    slideBy: 5,
    autoplay: false,
    responsive: {
        0: {
            items: 5
        },
        600: {
            items: 8
        },
        1000: {
            items: 10
        }
    }
})
</script>

</body>

</html>