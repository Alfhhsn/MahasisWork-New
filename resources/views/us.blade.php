<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/us.css">
    
    <!--<title>Card with Sliding Feature</title>-->
</head>
<body>

  <section>
    
    <div class="swiper mySwiper container">
      <div class="swiper-wrapper content">

        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="img/lava.png" alt="">
            </div>

            <!-- <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div> -->

            <div class="name-profession">
              <span class="name">Lava Ranu Kembang</span>
              <span class="profession">2100753</span>
            </div>

            <!-- <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div> -->

            <div class="button">
              <button class="aboutMe"><a href="https://www.instagram.com/lava_ranu/">Instagram</a></button>
              <!-- <button class="hireMe">Hire Me</button> -->
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="img/ai.jpg" alt="">
            </div>

            <!-- <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div> -->

            <div class="name-profession">
              <span class="name">Aisyah Husna Alifah</span>
              <span class="profession">2103676</span>
            </div>

            <!-- <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div> -->

            <div class="button">
              <button class="aboutMe"><a href="https://www.instagram.com/hsnasyah/">Instagram</a></button>
              <!-- <button class="hireMe">Hire Me</button> -->
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="img/bila.jpg" alt="">
            </div>

            <!-- <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div> -->

            <div class="name-profession">
              <span class="name">Nabila Nur Rahita</span>
              <span class="profession">2101190</span>
            </div>

            <!-- <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div> -->

            <div class="button">
              <button class="aboutMe"><a href="https://www.instagram.com/nblnrhmita_/">Instagram</a></button>
              <!-- <button class="hireMe">Hire Me</button> -->
            </div>
          </div>
        </div>
        <div class="swiper-slide card">
          <div class="card-content">
            <div class="image">
              <img src="img/ab.jpg" alt="">
            </div>

            <!-- <div class="media-icons">
              <i class="fab fa-facebook"></i>
              <i class="fab fa-twitter"></i>
              <i class="fab fa-github"></i>
            </div> -->

            <div class="name-profession">
              <span class="name">Siti Nabilah</span>
              <span class="profession">2104847</span>
            </div>

            <!-- <div class="rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
              <i class="far fa-star"></i>
            </div> -->

            <div class="button">
              <button class="aboutMe"><a href="https://www.instagram.com/na.abillle/">Instagram</a></button>
              <!-- <button class="hireMe">Hire Me</button> -->
            </div>
          </div>
        </div>
       

      </div>
    </div>

    <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</body>
</html>
