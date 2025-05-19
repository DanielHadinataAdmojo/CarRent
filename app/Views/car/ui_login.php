<!DOCTYPE html>
<html id="home" class="scrollspy">

    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="<?= base_url('css/materialize.min.css') ?>" media="screen,projection" />
        <!--custom css-->
        <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Carrent's official website</title>
    </head>

<body>
    <div class="navbar-fixed">
        <nav class=" blue darken-3">
            <div class="cotainer">
                <div class="nav-wrapper">
<a href="#home" class="brand-logo">CarRent</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#sponsors">Sponsors</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#Car Available">Car available</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        
    
                        

<a class="waves-effect waves-light btn login-btn" href="<?= session()->get('isLoggedIn') ? base_url('logout') : base_url('login') ?>">
    <?= session()->get('isLoggedIn') ? session()->get('username') : 'Login' ?>
    <i class="material-icons right">person</i>
</a>
                </div>
            </div>
        </nav>
    </div>

    <!--side nav-->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#about">About Us</a></li>
        <li><a href="#sponsors">Sponsors</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#Car Available">Car available</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="<?= site_url('login') ?>">Login</a></li>
    </ul>

    <!--slider-->
    <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="<?= base_url('img/slider/Background.jpg') ?>">
                        <div class=" caption left-align">
                            <h3>CarRent: Your Key to Mobility!</h3>
                            <h5 class="light grey-text text-lighten-3">Unlock Adventures on Wheels: Book Now!</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= base_url('img/slider/Background1.jpg') ?>">
                        <div class=" caption right-align">
                            <h3>CarRent: Your Key to Mobility!</h3>
                            <h5 class="light grey-text text-lighten-3">Unlock Adventures on Wheels: Book Now!</h5>
                        </div>
                    </li>
                    <li>
                        <img src="<?= base_url('img/slider/Background2.jpg') ?>">
                        <div class=" caption center-align">
                            <h3>CarRent: Your Key to Mobility!</h3>
                            <h5 class="light grey-text text-lighten-3">Unlock Adventures on Wheels: Book Now!</h5>
                        </div>
                    </li>
                </ul>
    </div>


    <!--about us-->
    <section id="about" class="about scrollspy">
        <div class="cotainer">
            <div class="row">
                <h3 class="center ">About Us</h3>
                <div class="center-align ">
                    <h5>We are professionals</h5>
                    <p>At CarRent, we provide comfortable and reliable transportation solutions to answer your travel needs. 
                      With a wide selection of quality cars, excellent service and competitive prices, we are committed to providing 
                      an unforgettable car rental experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!--sponsors-->
    <div class="parallax-container scrollspy" id="sponsors">
    <div class="parallax"><img src="<?= base_url('img/slider/Background3.jpg') ?>"></div>


        <div class="cotainer Sponsors ">
            <h3 class=" center white-text">Our Sponsors</h3>
                <div class="row">
                    <div class="col m4 s12 center">
                        <img src="<?= base_url('img/sponsors/gojek.png') ?>">
                    </div>
                    <div class="col m4 s12 center">
                        <img src="<?= base_url('img/sponsors/tokopedia.png') ?>">
                    </div>
                    <div class="col m4 s12 center">
                        <img src="<?= base_url('img/sponsors/traveloka.png') ?>">
                    </div>
                </div>
        </div>
    </div>

    <!--services-->
    <section id="services" class="services grey lighten-1 scrollspy">
        <div class="container">
            <div class="row">
                <h3 class="center gray-text">Our Services</h3>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="medium material-icons">directions_car</i>
                        <h5>High Quality Car</h5>
                        <p>We offer a fleet of high quality cars with a wide selection of models and brands to suit your needs.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="medium material-icons">lock</i>
                        <h5>Insurance and Protection</h5>
                        <p>We provide additional insurance and protection to provide a sense of security during the trip.</p>
                    </div>
                </div>
                <div class="col m4 s12">
                    <div class="card-panel center">
                        <i class="medium material-icons">timer</i>
                        <h5>24/7 Customer Service</h5>
                        <p>We provide responsive customer service and are available around the clock to help you</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Car Available-->
    <section id="Car Available" class="Car Available scrollspy">
        <div class="container">
            <h3 class="center gray-text">Car available</h3>
            <div class="row">
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/satu.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/dua.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/tiga.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/empat.jpg') ?>" class="responsive-img materialboxed">
                </div>
            </div>
            <div class="row">
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/lima.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/enam.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/tujuh.jpg') ?>" class="responsive-img materialboxed">
                </div>
                <div class="col m3 s12">
                    <img src="<?= base_url('img/portfolio/delapan.jpg') ?>" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>
    <!--contact-->
    <section id="contact" class="contact grey lighten-1 scrollspy">
        <div class="container">
            <h3 class="center">Contact Us</h3>
            <div class="row">
                <div class="center">
                    <div class="card-panel blue darken-1 center white-text">
                        <i class="medium material-icons ">email</i>
                        <h5>Contact</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea, a?</p>
                    </div>
                    <ul class="collection with-header">
                        <li class="collection-header">
                            <h4>Our offices</h4>
                        </li>
                        <li class="collection-item">Jl.sawo no.49,Malang</li>
                        <li class="collection-item">East Java, Indonesia</li>
                    </ul>
                </div>

                
            </div>
        </div>
    </section>
    <!--footer-->
     <footer class="page-footer blue darken-3">
        <div class="container center-align">
            <span class="white-text">CarRent &copy; <?= date('Y') ?></span>
        </div>
    </footer>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('js/materialize.min.js') ?>"></script>


    <script>
        const Sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(Sidenav);

        const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
            indicators: false,
            height: 500,
            duration: 3000

        });
        console.log('Initializing parallax effect...');
        const parallax = document.querySelectorAll('.parallax');
        if(parallax.length > 0) {
            M.Parallax.init(parallax);
            console.log('Parallax initialized on elements:', parallax);
        } else {
            console.log('No parallax elements found to initialize.');
        }

        window.addEventListener('load', () => {
            console.log('Window loaded, reinitializing parallax...');
            const parallaxReload = document.querySelectorAll('.parallax');
            if(parallaxReload.length > 0) {
                M.Parallax.init(parallaxReload);
                console.log('Parallax reinitialized on window load:', parallaxReload);
            } else {
                console.log('No parallax elements found on window load.');
            }
        });

        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);
        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
            scrollOffset: 50
        });
    </script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Show success toast if login was successful
    <?php if (session()->getFlashdata('success')): ?>
        M.toast({html: '<?= session()->getFlashdata('success') ?>', classes: 'green'});
    <?php endif; ?>

    // Update login button with username if available
    <?php if (session()->get('username')): ?>
        const loginBtn = document.querySelector('.login-btn');
        if (loginBtn) {
            loginBtn.innerHTML = '<?= session()->get("username") ?> <i class="material-icons right">person</i>';
        }
    <?php endif; ?>
});
</script>
</body>

</html>