<?php
include 'layout/head.php';
?>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>Call : 063 - 814 - 8621</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Mon - Fri : 13:00AM - 20:00PM</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <?php
  include 'layout/header.php';
  ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <br><span>Hat Yai Fried Chicken Shop</span></h1>
          <h2>Best Chicken in the Nonthaburi</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
          </div>
        </div>


      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/chicken -bg.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h2 style="color: goldenrod;">เกี่ยวกับเรา</h2>
            <p>
              สำหรับวันนี้เราจะมานำเสนอ อาหารไทย เมนูอาหารยอดนิยมของไทย<br>
              เมนูไก่ทอด หากกล่าวถึงไก่ทอด ทุกคนก็ต้องนึกถึง ไก่ทอดหาดใหญ่
              <br>ซึ่งเป็นเมนูที่มีต้นตำหรับมาจากทางภาคใต้ของประเทศไทย
              <br>ไก่ทอดสูตรหาดใหญ่ มีเคล็ดลับความอร่อย อยู่ที่วัตถุดิบที่มีคุณภาพ
              <br>การหมักเนื้อไก่ แป้งที่ใช้ในการทอด การทอดหอมเจียว การทำไก่ทอดสูตรหาดใหญ่นั้นเป็นเรื่องที่ง่ายกว่าที่หลายคนคิด

            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Recommended menu of the shop</h2>
          <p>เมนูแนะนำของร้าน</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>Menu 01</span>
              <h4>น่องไก่ทอด</h4>
              <b>
                <p>ราคา 40 บาท</p>
              </b>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>Menu 02</span>
              <h4>อกไก่ทอด</h4>
              <b>
                <p>ราคา 70 บาท</p>
              </b>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>Menu 03</span>
              <h4>สะโพกไก่ทอด</h4>
              <b>
                <p>ราคา 40 บาท</p>
              </b>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Our Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Chicken</li>
              <li data-filter=".filter-salads">Side Dishes</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/น่องไก่ทอดหาดใหญ่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">น่องไก่ทอด</a><span>40 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/คอไก่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">คอไก่ทอด</a><span>30 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/โครงไก่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">โครงไก่ทอด</a><span>30 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ตีนไก่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ตีนไก่ทอด</a><span>30 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ตูดไก่ทอด.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ตูดไก่ทอด</a><span>30 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ปีกไก่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ปีกไก่ทอด</a><span>70 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ปีกบนน่องเล็ก.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ปีกบนน่องเล็กทอด</a><span>40 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/สะโพกเล็ก.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">สะโพกไก่ทอด</a><span>40 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/อกไก่เสียบไม้.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">อกไก่เสียบไม้</a><span>30 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/อกไก่ชิ้นใหญ่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">อกไก่ทอด</a><span>40 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>



          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/img/menu/ข้าวเหนียว.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ข้าวเหนียว</a><span>10 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>



          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/ตับไก่.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">ตับไก่ทอด</a><span>40 Baht</span>
            </div>
            <div class="menu-ingredients">
              อร่อยมาก
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>bit of knowledge</h2>
          <p>เกร็ดความรู้</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/chickenoregg.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>ไก่กับไข่อะไรเกิดก่อนกัน</h3>
                  <p>
                    คำตอบคือไก่เกิดก่อน โดยทีมวิจัยจาก<br>มหาวิทยาลัย Sheffield และ Warwick ในประเทศอังกฤษ ได้ค้นพบโปรตีน Ovocledidin-17 (OC-17) ซึ่งจำเป็นในการเริ่มต้นและเร่งกระบวนการตกผลึกของเปลือกไข่ให้แข็ง ทำให้ไก่สามารถออกไข่ได้ภายใน 24 ชั่วโมง (เป็นเหตุผลว่าทำไมแม่ไก่ถึงสามารถออกไข่ฟองใหญ่ ๆ ให้เรากินได้ทุกวัน) ซึ่งเป็นโปรตีนที่มีเฉพาะในรังไข่ของไก่เท่านั้น จึงสรุปได้ว่าไก่เกิดก่อนไข่ เพราะไก่ต้องมีโปรตีนตัวนี้ก่อนถึงจะออกไข่ได้
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/body -bg.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>ควบคุมน้ำหนักให้อยู่ในเกณฑ์</h3>
                  <p>
                    น้ำหนักที่เหมาะสมขึ้นอยู่กับปัจจัยหลายอย่าง เช่น เพศ ส่วนสูง อายุ และพันธุกรรม การมีน้ำหนักเกินมีผลในการเพิ่มความเสี่ยงต่อการเกิดโรคต่าง ๆ เช่น โรคหัวใจและโรคมะเร็ง ไขมันส่วนเกินในร่างกายมาจากการทานอาหารที่มีปริมาณแคลอรีมากกว่าที่ร่างกายต้องการ ซึ่งอาจได้มาจากอาหารหลายแหล่ง เช่น โปรตีน ไขมัน คาร์โบไฮเดรต หรือแอลกอฮอล์ แต่ไขมันเป็นแหล่งแคลอรีที่สำคัญที่สุด การออกกำลังกายเป็นหนึ่งวิธีที่จะช่วยลดปริมาณแคลอรีที่เราได้รับเข้าไปในร่างกายในแต่ละวัน และยังช่วยให้ร่างกายรู้สึกสดชื่นได้อีกด้วย
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/muscle -bg.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>แค่ขยับเท่ากับออกกำลังกาย</h3>
                  <p>
                    เป็นที่ทราบกันดีว่าการทานอาหารที่มีแคลอรีมากและออกกำลังกายไม่เพียงพอจะทำให้เกิดการสะสมไขมันส่วนเกิน ทำให้ร่างกายมีน้ำหนักเพิ่มมากขึ้น การออกกำลังกายจะช่วยเผาผลาญแคลอรีที่เกิน ทำให้หัวใจและระบบไหลเวียนโลหิตทำงานอย่างมีประสิทธิภาพ อาจเดินขึ้น-ลงบันไดแทนการใช้ลิฟท์ หรือในระยะทางใกล้ ๆ ใช้การเดินแทนการใช้รถ จำไว้ว่าไม่จำเป็นต้องเป็นนักกีฬาเท่านั้นที่ต้องออกกำลังกาย ทุกคนสามารถออกกำลังกายเพื่อสุขภาพที่ดีได้
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Events Section -->



    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Menu</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3">
            <div class="gallery-item">
              <a href="assets/img/gallery/6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>






        </div>

      </div>
    </section>
    <!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Project Members</h2>
          <p>Teams</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/dordeer.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nattakant Kansophon</h4>
                  <span>Competency adivisor</span>
                </div>
                <div class="social">

                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/rit.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Chavapol Tosuk</h4>
                  <span>Front - end</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/chavapol.tosuk"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/ritzcvp/?hl=th"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/pluk.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Warakron khueanmueang</h4>
                  <span>Back - end</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/profile.php?id=100011578398190"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.instagram.com/imyourplukkkkkk/?hl=th"><i class="bi bi-instagram"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/tae.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tanakit Mahamat</h4>
                  <span>Tester</span>
                </div>
                <div class="social">

                  <a href="https://www.facebook.com/Tanakit.0610320970"><i class="bi bi-facebook"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:3; width: 100%; height: 400px;" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.3651609881304!2d100.40920555065436!3d13.877100711836059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29b2e266b2e45%3A0xafa399a6f2dd3b80!2z4Lit4Li04LiZ4LmA4LiU4LmH4LiB4LiL4LmMIOC4peC4tOC4n-C4p-C4tOC5iOC4h-C4oeC4reC4peC4peC5jCDguKrguLLguILguLLguJrguLLguIfguYPguKvguI3guYggKEluZGV4IExpdmluZyBNYWxsKQ!5e0!3m2!1sth!2sth!4v1628564682596!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="container" .data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-3">
            <div class="address">

              <h4>Location :</h4>
              <p>Hat Yai Style Fried Chicken Shop <br>at index livingmall <br>Central Westgate Nonthaburi</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="open-hours">

              <h4>Open Hours :</h4>
              <p>Monday - Friday :<br>13:00 AM - 20:00 PM</p>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="phone">

              <h4>Call :</h4>
              <p>คุณบุญมา มหามาตย์ <br>โทร. 063 - 814 -8621</p>
            </div>
          </div>
          

          <div class="col-lg-3">
            <div class="footer-info">
              <h3>Hat Yai Fried Chicken Shop</h3>
              <p>
                Hat Yai Style Fried Chicken Shop <br>at index livingmall <br>Central Westgate Nonthaburi<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>


    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include 'layout/footer.php';
  ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>