<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Suwa Sahana</title>

    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/sub.css" />
    <!--swiper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!--svg icons-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none" aria-hidden="true">
        <symbol id="lock_icon" viewBox="0 0 24 24">
            <path
                d="M20.9098 11.1203V6.73031C20.9098 5.91031 20.2898 4.98031 19.5198 4.67031L13.9498 2.39031C12.6998 1.88031 11.2898 1.88031 10.0398 2.39031L4.46984 4.67031C3.70984 4.98031 3.08984 5.91031 3.08984 6.73031V11.1203C3.08984 16.0103 6.63984 20.5903 11.4898 21.9303C11.8198 22.0203 12.1798 22.0203 12.5098 21.9303C17.3598 20.5903 20.9098 16.0103 20.9098 11.1203ZM12.7498 12.8703V15.5003C12.7498 15.9103 12.4098 16.2503 11.9998 16.2503C11.5898 16.2503 11.2498 15.9103 11.2498 15.5003V12.8703C10.2398 12.5503 9.49984 11.6103 9.49984 10.5003C9.49984 9.12031 10.6198 8.00031 11.9998 8.00031C13.3798 8.00031 14.4998 9.12031 14.4998 10.5003C14.4998 11.6203 13.7598 12.5503 12.7498 12.8703Z" />
        </symbol>

        <symbol id="qr_icon" viewBox="0 0 24 24">
            <path
                d="M21,2H15a1,1,0,0,0-1,1V9a1,1,0,0,0,1,1h1v2h2V10h2v2h2V3A1,1,0,0,0,21,2ZM18,8H16V4h4V8ZM3,10H9a1,1,0,0,0,1-1V3A1,1,0,0,0,9,2H3A1,1,0,0,0,2,3V9A1,1,0,0,0,3,10ZM4,4H8V8H4ZM5,16v2H3V16ZM3,20H5v2H3Zm4-2v2H5V18Zm0-2H5V14H7V12H9v4ZM5,12v2H3V12Zm9,3v1H13V14H11v4h3v3a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V15a1,1,0,0,0-1-1H16V12H14Zm6,1v4H16V16ZM9,18h2v2h1v2H7V20H9ZM13,6H11V4h2ZM11,8h2v4H11ZM5,5H7V7H5ZM17,5h2V7H17Zm2,14H17V17h2Z" />
        </symbol>

        <symbol id="hospital_icon" viewBox="0 0 32 32">
            <path d="M11.483 2.333v9.548h-9.508v8.823h9.508v9.508h8.823v-9.508h9.548v-8.823h-9.548v-9.548h-8.823z">
            </path>
        </symbol>
        <symbol id="star_icon" viewBox="0 0 24 24">
            <path
                d="M11.245 4.174C11.4765 3.50808 11.5922 3.17513 11.7634 3.08285C11.9115 3.00298 12.0898 3.00298 12.238 3.08285C12.4091 3.17513 12.5248 3.50808 12.7563 4.174L14.2866 8.57639C14.3525 8.76592 14.3854 8.86068 14.4448 8.93125C14.4972 8.99359 14.5641 9.04218 14.6396 9.07278C14.725 9.10743 14.8253 9.10947 15.0259 9.11356L19.6857 9.20852C20.3906 9.22288 20.743 9.23007 20.8837 9.36432C21.0054 9.48051 21.0605 9.65014 21.0303 9.81569C20.9955 10.007 20.7146 10.2199 20.1528 10.6459L16.4387 13.4616C16.2788 13.5829 16.1989 13.6435 16.1501 13.7217C16.107 13.7909 16.0815 13.8695 16.0757 13.9507C16.0692 14.0427 16.0982 14.1387 16.1563 14.3308L17.506 18.7919C17.7101 19.4667 17.8122 19.8041 17.728 19.9793C17.6551 20.131 17.5108 20.2358 17.344 20.2583C17.1513 20.2842 16.862 20.0829 16.2833 19.6802L12.4576 17.0181C12.2929 16.9035 12.2106 16.8462 12.1211 16.8239C12.042 16.8043 11.9593 16.8043 11.8803 16.8239C11.7908 16.8462 11.7084 16.9035 11.5437 17.0181L7.71805 19.6802C7.13937 20.0829 6.85003 20.2842 6.65733 20.2583C6.49056 20.2358 6.34626 20.131 6.27337 19.9793C6.18915 19.8041 6.29123 19.4667 6.49538 18.7919L7.84503 14.3308C7.90313 14.1387 7.93218 14.0427 7.92564 13.9507C7.91986 13.8695 7.89432 13.7909 7.85123 13.7217C7.80246 13.6435 7.72251 13.5829 7.56262 13.4616L3.84858 10.6459C3.28678 10.2199 3.00588 10.007 2.97101 9.81569C2.94082 9.65014 2.99594 9.48051 3.11767 9.36432C3.25831 9.23007 3.61074 9.22289 4.31559 9.20852L8.9754 9.11356C9.176 9.10947 9.27631 9.10743 9.36177 9.07278C9.43726 9.04218 9.50414 8.99359 9.55657 8.93125C9.61593 8.86068 9.64887 8.76592 9.71475 8.57639L11.245 4.174Z"
                stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </symbol>
        <symbol id="fb_icon" viewBox="0 0 50 50">
            <path
                d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z" />
        </symbol>
        <symbol id="github_icon" viewBox="0 0 50 50">
            <path
                d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25C2,35.164,8.63,43.804,17.791,46.836z" />
        </symbol>
        <symbol id="insta_icon" viewBox="0 0 24 24">
            <path
                d="M16,3H8C5.243,3,3,5.243,3,8v8c0,2.757,2.243,5,5,5h8c2.757,0,5-2.243,5-5V8C21,5.243,18.757,3,16,3z M19,16c0,1.654-1.346,3-3,3H8c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3h8c1.654,0,3,1.346,3,3V16z" />
            <path
                d="M12,7c-2.757,0-5,2.243-5,5s2.243,5,5,5s5-2.243,5-5S14.757,7,12,7z M12,15c-1.654,0-3-1.346-3-3s1.346-3,3-3s3,1.346,3,3S13.654,15,12,15z" />
            <circle cx="17" cy="7" r="1" />
        </symbol>
        <symbol id="linkedin_icon" viewBox="0 0 50 50">
            <path
                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M17,20v19h-6V20H17z M11,14.47c0-1.4,1.2-2.47,3-2.47s2.93,1.07,3,2.47c0,1.4-1.12,2.53-3,2.53C12.2,17,11,15.87,11,14.47z M39,39h-6c0,0,0-9.26,0-10c0-2-1-4-3.5-4.04h-0.08C27,24.96,26,27.02,26,29c0,0.91,0,10,0,10h-6V20h6v2.56c0,0,1.93-2.56,5.81-2.56c3.97,0,7.19,2.73,7.19,8.26V39z" />
        </symbol>
        <symbol id="youtube_icon" viewBox="0 0 50 50">
            <path
                d="M44.9,14.5c-0.4-2.2-2.3-3.8-4.5-4.3C37.1,9.5,31,9,24.4,9c-6.6,0-12.8,0.5-16.1,1.2c-2.2,0.5-4.1,2-4.5,4.3C3.4,17,3,20.5,3,25s0.4,8,0.9,10.5c0.4,2.2,2.3,3.8,4.5,4.3c3.5,0.7,9.5,1.2,16.1,1.2s12.6-0.5,16.1-1.2c2.2-0.5,4.1-2,4.5-4.3c0.4-2.5,0.9-6.1,1-10.5C45.9,20.5,45.4,17,44.9,14.5z M19,32V18l12.2,7L19,32z" />
        </symbol>
    </svg>

    <!-- header -->
    <?php
      include_once "site_parts/main_header.php";
      ?>
    <header class="header bg-green">

        <div class="header-inner text-white text-center">
            <div class="container grid">
                <div class="header-inner-left">
                    <h1>
                        Sri Lanka's Number 1<br />
                        <span>Health Care Partner</span>
                    </h1>
                    <p class="text text-md">
                        " We seamlessly connect you with providers through innovative
                        technology, ensuring a caring and healthier future for you... "
                    </p>
                    <div class="btn-group">
                        <a href="" class="btn btn-white">Learn More</a>
                        <a href="#" class="btn btn-light-blue">User Portal</a>
                    </div>
                </div>
                <div class="header-inner-right">
                    <img src="images/home.png" />
                </div>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <main>
        <!-- about section -->
        <section id="about" class="about py">
            <div class="about-inner">
                <div class="container grid">
                    <div class="about-left text-center">
                        <div class="section-head">
                            <h2>Who We Are & What We are Do</h2>
                            <div class="border-line"></div>
                        </div>
                        <p class="text text-lg">
                            Welcome to Suwa Sahana, where we're transforming healthcare with
                            our innovative QR code-based Medical Information Management
                            System. Our mission is to streamline patient data, enhance
                            healthcare access, and revolutionize the healthcare experience.
                            With QR code cards, we're making registration seamless,
                            providing quick access to vital information for healthcare
                            providers. Suwa Sahana is not just a project; it's our
                            commitment to a healthier, more connected future. Join us on
                            this journey!
                        </p>
                        <a href="#" class="btn btn-white">Learn More</a>
                    </div>
                    <div class="about-right flex">
                        <div class="img">
                            <img src="images/about.png" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- banner two section -->
        <section id="banner-two" class="banner-two text-center">
            <div class="container grid">
                <div class="banner-two-left">
                    <img src="images/Picture6.png" />
                </div>
                <div class="banner-two-right">
                    <p class="lead text-white">Stick with our website.</p>
                    <p class="lead1 text-white">
                        your personalized Quick response health card. With us, your
                        patient details are securely stored for swift access when you need
                        them the most.
                    </p>
                </div>
            </div>
        </section>
        <section id="banner-three" class="banner-three text-center">
            <div class="container grid">
                <div class="banner-three-left">
                    <p class="lead2 text-black">
                        Revolutionizing healthcare across Sri Lanka, <br /><br />our
                        initiative covers the entire island. With a state of the art
                        Medical Information Management System and quick response
                        identification,<br /><br />
                        we streamline and enhance healthcare experiences for immediate
                        access to vital medical data.
                    </p>
                </div>
                <div class="banner-three-right">
                    <img src="images/sl.png" />
                </div>
            </div>
        </section>
        <!-- end of banner two section -->

        <!-- services section -->
        <section id="package-service" class="package-service py text-center">
            <div class="container">
                <div class="package-service-head text-white">
                    <h2>Explore Our services</h2>
                    <p class="text text-lg">
                        Empowering Your Health Journey With QR Code technology
                    </p>
                </div>
                <div class="package-service-inner grid">
                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <svg>
                                <use xlink:href="#lock_icon"></use>
                            </svg>
                        </div>
                        <h3>Security & Privacy</h3>
                        <p class="text text-sm">
                            Our QR code card uses a super-strong lock called encryption to
                            make sure only the right people, like your healthcare providers,
                            can open and read your medical info.
                        </p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <svg>
                                <use xlink:href="#qr_icon"></use>
                            </svg>
                        </div>
                        <h3>Probability & Accessibility</h3>
                        <p class="text text-sm">
                            Our QR code card is designed to be small and light, just like
                            your regular ID card. You can carry it in your wallet or even on
                            your phone – it's that simple!
                        </p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>

                    <div class="package-service-item bg-white">
                        <div class="icon flex">
                            <svg>
                                <use xlink:href="#hospital_icon"></use>
                            </svg>
                        </div>
                        <h3>Convenience in Access</h3>
                        <p class="text text-sm">
                            Your QR code card is not just a card , it's a handy tool. Use it
                            at government hospital clinics or pharmacies to get quick access
                            to your medical records.
                        </p>
                        <a href="#" class="btn btn-blue">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- contact section -->
        <section class="testimonials">
            <div class="container">
                <div class="section-header">
                    <h2 class="title">Thoughts of Our Users</h2>
                </div>
                <div class="testimonials-content">
                    <div class="swiper testimonials-slider js-testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Vihanga Kumarathunga</h3>
                                        <span class="job">Marketing Executive</span>
                                    </div>
                                </div>
                                <p>
                                    "As a busy professional, the QR code card system is a
                                    lifesaver! It's like having my entire health profile in my
                                    pocket. So easy to use, and the website makes managing
                                    appointments a breeze."
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Dr.Ridmika De Silva</h3>
                                        <span class="job">Neurologists Surgeon</span>
                                    </div>
                                </div>
                                <p>
                                    "The QR code system is a game-changer of government
                                    hospitals in Sri Lanka. Doctors can quick access to patient
                                    records means I can provide better and faster care. It's
                                    efficient, secure, and a step into the future of healthcare.
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Kasuni Gamage</h3>
                                        <span class="job">Retired Teacher</span>
                                    </div>
                                </div>
                                <p>
                                    "I was hesitant at first, but this QR code card is
                                    surprisingly simple! Even at my age, it's easy to carry, and
                                    the website is straightforward. A much-needed upgrade to
                                    healthcare systems."
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Vidumini Perera</h3>
                                        <span class="job">Travel Enthusiast</span>
                                    </div>
                                </div>
                                <p>
                                    "As someone constantly on the move, the QR code system is a
                                    lifesaver for my health management. The lightweight QR code
                                    card is like my health passport, fitting right into my
                                    travel essentials. Having access to my medical records
                                    wherever I am provides peace of mind, especially during
                                    unexpected adventures. It's the perfect companion for a
                                    globetrotter like me, ensuring that my health is well taken
                                    care of, no matter where my travels take me."
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Dinishi Samaranayake</h3>
                                        <span class="job">Professional Swimmer</span>
                                    </div>
                                </div>
                                <p>
                                    "As a professional swimmer, quick and secure access to my
                                    medical records is vital. The QR code system is like my
                                    personal health passport, always ready. It simplifies
                                    healthcare management, giving me the confidence to focus on
                                    my performance in the pool."
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper-slide testimonials-item">
                                <div class="info">
                                    <div class="text-box">
                                        <h3 class="name">Kusal Mendis</h3>
                                        <span class="job">Professional Cricketer</span>
                                    </div>
                                </div>
                                <p>
                                    "In the world of cricket, Fitness is everything. The QR code
                                    system brings that same precision to my healthcare. It's
                                    like having the perfect strategy for managing my medical
                                    records. The website's simplicity ensures a smooth
                                    experience, just like a well-executed cover drive."
                                </p>
                                <div class="rating">
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                    <svg>
                                        <use xlink:href="#star_icon"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination js-testimonial-pagination"></div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->
    </main>

    <!-- footer  -->
    <footer class="mt-5">
        <div class="footer">
            <div class="column-2-footer">
                <h3>PAGES</h3>
                <a href="./index.php">HOME</a>
                <a href="">About Us</a>
                <a href="">Our Process</a>
                <a href="">Help & Support</a>
                <a href="">Reviews</a>
            </div>
        </div>
        <section class="mt-3">
            <div class="social">
                <table>
                    <tr>
                        <th class="social-table-th">
                            <a href="">
                                <svg>
                                    <use xlink:href="#fb_icon"></use>
                                </svg>
                            </a>
                        </th>
                        <th class="social-table-th">
                            <a href="">
                                <svg>
                                    <use xlink:href="#github_icon"></use>
                                </svg>
                            </a>
                        </th>
                        <th class="social-table-th">
                            <a href="">
                                <svg>
                                    <use xlink:href="#insta_icon"></use>
                                </svg>
                            </a>
                        </th>
                        <th class="social-table-th">
                            <a style="
                    display: flex;
                    justify-content: center;
                    align-items: center;
                  " href="">
                                <svg>
                                    <use xlink:href="#linkedin_icon"></use>
                                </svg>
                            </a>
                        </th>
                        <th class="social-table-th">
                            <a href="">
                                <svg>
                                    <use xlink:href="#youtube_icon"></use>
                                </svg>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>
        </section>
        <div class="">
            <p class="text-white mt-3" style="font-family: Arial, Helvetica, sans-serif; text-align: center">
                Developed by Group 223 @ NSBM Green University
            </p>
            <p class="text-white" style="font-family: Arial, Helvetica, sans-serif; text-align: center">
                © Copyright 2024 | All Rights Reserved.
            </p>
        </div>
    </footer>
    <!-- end of footer  -->

    <!-- custom js -->
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
    const swiper = new Swiper(".js-testimonials-slider", {
        grabCursor: true,
        spaceBetween: 30,
        pagination: {
            el: ".js-testimonial-pagination",
            clickable: true,
        },
        breakpoints: {
            767: {
                slidesPerView: 1,
            },
        },
    });
    </script>
</body>

</html>