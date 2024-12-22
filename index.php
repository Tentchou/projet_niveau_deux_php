<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>UD - Faculte des Sciences</title>
    <meta name="title" content="Grilli - Amazing & Delicious Food">
    <meta name="description" content="This is a Restaurant html template made by codewithsadee">

 <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/l5.jfif.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>
<body id="top">

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">Faculte des Sciences</p>
    </div>

    

  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Universite de Douala, Faculte des Sciences, Douala/Pk 17, BP
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Daily : 8.00 am to 10.00 pm</span>
      </div>

      <a href="tel:(+237) 681 56 49 47" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">(+237) 681 56 49 47</span>
      </a>

      <div class="separator"></div>

      <a href="facsciences@univ-douala.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">facsciences@univ-douala.com</span>
      </a>

    </div>
  </div>

    <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/l5.jfif.png" width="100" height="100" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/l5.jfif.png" width="70" height="70" alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="faculte.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">La Faculte</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="guide.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Guide Etudiant</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="about.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="recherche.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Recherche</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="contact.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
            Universite de Douala, Faculte des Sciences<br>
            Douala/pk17 ,BP
          </address>

          <p class="body-4 navbar-text">Open:7h30min - 15h30min</p>

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">facsciences@univ-douala.com</a>

          <div class="separator"></div>

          <p class="contact-label">Booking Request</p>

          <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
          (+237) 681 56 49 47
          </a>
        </div>

      </nav>

      <a href="./Form/index.php" class="btn btn-secondary">
        <span class="text text-1">Se connecter</span>

        <span class="text text-2" aria-hidden="true">Se connecter</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <main>
    <article>
        <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

        <li class="slider-item" data-hero-slider-item>

        
            <div class="slider-bg"><img src="./assets/images/image2-modified.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Faculte Sciences & campus 1</p>

            <h1 class="display-1 hero-title slider-reveal">
                Travail et prosperite<br>
                   Integrite
  
            </h1>

               <p class="body-2 hero-text slider-reveal">
                         come to the Faculty of Sciences and feel the joy of living
                </p>

                      <a href="#" class="btn btn-primary slider-reveal">
                  <span class="text text-1">View Our Article</span>

                  <span class="text text-2" aria-hidden="true">View Our Aarticle</span>
                  </a>
      

        </li>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/l.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Travailleur & asidu</p>

            <h1 class="display-1 hero-title slider-reveal">
              For the love of <br>
              the work
            </h1>

            <p class="body-2 hero-text slider-reveal">
                 Venez et vivrez la recherche la plus satisfesante
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Article</span>

              <span class="text text-2" aria-hidden="true">View Our Article</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/l1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal"></p>

            <h1 class="display-1 hero-title slider-reveal">
               Des recherches Inspirez par <br>
                  saisons
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venez et travaillez avec success
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Article</span>

              <span class="text text-2" aria-hidden="true">View Our Article</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/doyen-modified.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Organisations & Fetes</p>

            <h1 class="display-1 hero-title slider-reveal">
               OU chaque Faculte Raconte <br>
               Une  Histoire
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venez pour decouvrir l'expereience de la vie en societe
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Article</span>

              <span class="text text-2" aria-hidden="true">View Our Article</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/l4.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Batiments & Services</p>

            <h1 class="display-1 hero-title slider-reveal">
              Ou NOus retrouver pour parler <br>
                Services
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Venez nous retrouver pour plus d'explication
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Article</span>

              <span class="text text-2" aria-hidden="true">View Our Aarticle</span>
            </a>

          </li>

          

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/l2.jfif.png" width="100" height="100" alt="booking icon">

          <span class="label-2 text-center span">UD - FSC</span>
        </a>

      </section>

      
      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Story</p>

            <h2 class="headline-1 section-title">each faculty tells a story</h2>

            <p class="section-text">
              La Faculté des Sciences (FS) de l’Université de Douala (UD) est située au CAMPUS de PK17. Ce campus abrite le Décanat et les salles de cours, cours, les laboratoires et un amphithéâtre de 100 places.
            </p>

            <div class="contact-label">contact us by call</div>

            <a href="tel:+237 233 405 862" class="body-1 contact-number hover-underline">(+237) 681 56 49 47</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true">Read More</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/image2.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/scientists-hold-beakers-with-green-red-chemicals-stressed-faces.jpg" width="300" height="300" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/since.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./assets/images/shape-.png" width="" height="" loading="lazy" alt="" class="shape">

        </div>
      </section>

      <!-- 
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Dernières nouvelles</h2>

          <ul class="grid-list">

            <a href=""><li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/labo.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">15/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Machin Learning</p>

                  <h3 class="card-title title-2 text-center">
                   you inform us, our priority. stay informed
                  </h3>
                </div>

              </div>
            </li></a>

            <a href=""><li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/labo3.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">08/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Formation Java</p>

                  <h3 class="card-title title-2 text-center">
                    you inform us, our priority. stay informed
                  </h3>
                </div>

              </div>
            </li></a>

            <a href=""><li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/photoshop.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">photoShop</p>

                  <h3 class="card-title title-2 text-center">
                    you inform us, our priority. stay informed
                  </h3>
                </div>

              </div>
            </li></a>

            <a href=""><li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/labo2.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/09/2022</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Dev Web Full Stack</p>

                  <h3 class="card-title title-2 text-center">
                    you inform us, our priority. stay informed
                  </h3>
                </div>

              </div>
            </li></a>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>
    
    <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Nos Inscriptions</p>

          <h2 class="headline-1 section-title">Inscriptions en ligne</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">SYSTHAG</h3>

                <p class="label-1 card-text">PreInscription</p>
                <a href="#menu" class="navbar-link hover-underline">
                  <div class="separator"></div>
    
                  <span class="span">S'INSCRIRE</span>
                </a>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">FACSCIENCES</h3>

                <p class="label-1 card-text">Inscriptions administratives</p>
                <a href="#menu" class="navbar-link hover-underline">
                  <div class="separator"></div>
    
                  <span class="span">S'INSCRIRE</span>
                </a>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">INSCRIPTIONS ACA</h3>

                <p class="label-1 card-text">Choix de vos UE optionnelles.</p>
                <a href="#menu" class="navbar-link hover-underline">
                  <div class="separator"></div>
    
                  <span class="span">S'INSCRIRE</span>
                </a>
                

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">FACSCIENCES-ENT</h3>

                <p class="label-1 card-text">Espace numérique de travail.</p>
               
                  <a href="#menu" class="navbar-link hover-underline">
                    <div class="separator"></div>
      
                    <span class="span">En Savoir plus</span>
                  </a>
                

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-7.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>

    </article>
  </main>


  <?php include('includes/footer.php');?>
    <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>


  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>