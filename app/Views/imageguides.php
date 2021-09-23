<section id="hero">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>Image Guides</span></h2>
              <p class="animate__animated animate__fadeInUp">Here are some images in learning the general preparedness tips and best practices from any kind of disasters that may occur.</p>
            </div>
          </div>
        </div>
  </section><!-- End Hero -->
    
   <!-- ======= Portfolio Section ======= -->
   <section id="portfolio" class="portfolio">
      <div class="container">
     
        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".flood" >Flood</li>
              <li data-filter=".landslide">Landslide</li>
              <li data-filter=".typhoon">Typhoon</li>
            </ul>
          </div>
        </div>
       
        <div class="row portfolio-container">
        <?php foreach ($imgflood as $row): ?>
          <div class="col-lg-4 col-md-6 portfolio-item flood">
            <div class="portfolio-wrap">
            
              <img src="<?= $row['image'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $row['type'] ?></h4>
                <p><?= $row['description'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= $row['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row['type'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($imglandslide as $row1): ?>
          <div class="col-lg-4 col-md-6 portfolio-item landslide">
            <div class="portfolio-wrap">  
              <img src="<?= $row1['image'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $row1['type'] ?></h4>
                <p><?= $row1['description'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= $row1['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row1['type'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($imgtyphoon as $row2): ?>
          <div class="col-lg-4 col-md-6 portfolio-item typhoon">
            <div class="portfolio-wrap">
              <img src="<?= $row2['image'] ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $row2['type'] ?></h4>
                <p><?= $row2['description'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= $row2['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row2['type'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->