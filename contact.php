
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

    <?php include('includes/header.php'); ?>

  <!-- main -->

    <main>
        <article>
               <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

        

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/image2-modified.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">FACULTE DES SCIENCES</p>

            <h1 class="display-1 hero-title slider-reveal">
             CONTACTEZ NOUS<br>
              
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Ici votre page de contact & notre position
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">View Our Home</span>

              <span class="text text-2" aria-hidden="true">View Our Home</span>
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
      

      <!-- 
        - #TESTIMONIALS
      -->

      <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/l4.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">
            La Faculté des Sciences : 30 ans de parcours vers l’excellence académique, l’innovation scientifique et
            la professionnalisation
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/rect.jfif" width="100" height="100" loading="lazy" alt="Sam Jhonson"
              class="img">

            <p class="label-2 profile-name">MARIE JOSEPH NTAMAK NIDA</p>
          </div>

        </div>
      </section>

      <!-- 
        - #CONTACT
      -->

      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="" class="form-left">

              <h2 class="headline-1 text-center">Contactez Nous</h2>

              <p class="form-text text-center">
                Booking request <a href="tel:(+237) 681 56 49 47" class="link">(+237) 681 56 49 47</a>
                or fill out the order form
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your FirstName" autocomplete="off" class="input-field">
                <input type="text" name="name" placeholder="Your LastName" autocomplete="off" class="input-field">
                <input type="mail" name="name" placeholder="Your Email" autocomplete="off" class="input-field">
                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1-person">1 Person</option>
                    <option value="2-person">2 Person</option>
                    <option value="3-person">3 Person</option>
                    <option value="4-person">4 Person</option>
                    <option value="5-person">5 Person</option>
                    <option value="6-person">6 Person</option>
                    <option value="7-person">7 Person</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="08:00am">08 : 00 am</option>
                    <option value="09:00am">09 : 00 am</option>
                    <option value="010:00am">10 : 00 am</option>
                    <option value="011:00am">11 : 00 am</option>
                    <option value="012:00am">12 : 00 am</option>
                    <option value="01:00pm">01 : 00 pm</option>
                    <option value="02:00pm">02 : 00 pm</option>
                    <option value="03:00pm">03 : 00 pm</option>
                    <option value="04:00pm">04 : 00 pm</option>
                    <option value="05:00pm">05 : 00 pm</option>
                    <option value="06:00pm">06 : 00 pm</option>
                    <option value="07:00pm">07 : 00 pm</option>
                    <option value="08:00pm">08 : 00 pm</option>
                    <option value="09:00pm">09 : 00 pm</option>
                    <option value="10:00pm">10 : 00 pm</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary">
                <span class="text text-1">Envoyer</span>

                <span class="text text-2" aria-hidden="true">Envoyer</span>
              </button>

            </form>

            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Booking Request</p>

              <a href="tel:(+237) 681 56 49 47" class="body-1 contact-number hover-underline">(+237) 681 56 49 47</a>

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">
                Universite de Douala, Faculte des Sciences<br>
                Douala/Pk 17, BP
              </address>

              <p class="contact-label">Disponible</p>

              <p class="body-4">
                Monday to Friday <br>
               7h30min - 15h00min
              </p>

              <p class="contact-label">Revendication</p>

              <p class="body-4">
                Monday to Friday <br>
                7h30min - 15h00min
              </p>

            </div>

          </div>

        </div>
      </section>


      <section class="frame">
          <p class="section-subtitle label-2 text-center">Nous somme situe</p>

          <h2 class="section-title headline-1 text-center">Douala /pk 17</h2>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.638935092561!2d9.801950773575834!3d4.093683146623643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610f475b7ddd77%3A0x6a4160fab3662f40!2sFacult%C3%A9%20des%20Sciences-%20campus%20pk17!5e0!3m2!1sfr!2scm!4v1721850146086!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </section>

        </article>
    </main>

  <!-- fin main -->


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