{{-- <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                <svg class="bi" width="30" height="24">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <span class="text-muted">© 2021 Company, Inc</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#twitter"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#instagram"></use>
                    </svg></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                        <use xlink:href="#facebook"></use>
                    </svg></a></li>
        </ul>
    </footer>
</div> --}}

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="{{ Storage::url('img/logo.png') }}" alt="">
        <h4>Contact</h4>
        <p><strong>Adress: </strong>564Wellington Road, street 32 , san Francisco</p>
        <p><strong>Phone: </strong>+01 2222 365 /(+91) 01 2345 6789</p>
        <p><strong>Hours: </strong>10:00 - 18:00 , Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact Us</a>
    </div>
    <div class="col">
        <h4>my Account</h4>
        <a href="#">Sign In</a>
        <a href="#">View Cart</a>
        <a href="#">My wishlist</a>
        <a href="#">Track & Order</a>
        <a href="#">Help</a>
    </div>
    <div class="col install">
        <h4>Install App</h4>
        <p>From App Store or Google Play</p>
        <div class="line row">
            <img class="col-6" src="{{ Storage::url('images/pay/app.jpg') }}" alt="">
            <img class="col-6" src="{{ Storage::url('images/pay/play.jpg') }}" alt="">
        </div>
        <p>Secured Payment Gateways</p>
        <img src="{{ Storage::url('images/pay/pay.png') }}" alt="">
    </div>

    <div class="copyright">
        <p>© 2021, Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
</footer>