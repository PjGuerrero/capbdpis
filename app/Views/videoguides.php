<section id="hero">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"><span>Video Guides</span></h2>
              <p class="animate__animated animate__fadeInUp">No one can prevent natural disasters. </p>
                <p class="animate__animated animate__fadeInUp">But you can prepare for them.</p>
                <p class="animate__animated animate__fadeInUp">This guide was prepared to help planning and improve response on the disaster.</p>

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
        <?php foreach ($vidflood as $row): ?>
          <div class="col-lg-4 col-md-6 portfolio-item flood">
            <div class="portfolio-wrap">
            
            <video class="video-fluid" height="200px" width="200px" controls> <source src="<?= $row['video'] ?>" type="video/mp4"></source> </video>
              <div class="portfolio-info">
                <h4><?= $row['type'] ?></h4>
                <p><?= $row['description'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= $row['video'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row['type'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($vidlandslide as $row1): ?>
          <div class="col-lg-4 col-md-6 portfolio-item landslide">
            <div class="portfolio-wrap">  
            <video height="200px" width="200px" controls> <source src="<?= $row1['video'] ?>" type="video/mp4"></source> </video>
              <div class="portfolio-info">
                <h4><?= $row1['type'] ?></h4>
                <p><?= $row1['description'] ?></p>
                <div class="portfolio-links">
                  <a href="<?= $row1['video'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $row1['description'] ?>"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <?php foreach ($vidtyphoon as $row2): ?>
          <div class="col-lg-4 col-md-6 portfolio-item typhoon">
            <div class="portfolio-wrap">
            <video height="200px" width="200px" controls> <source src="<?= $row2['video'] ?>" type="video/mp4"></source> </video>
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          
        </div>

      </div>
    </section><!-- End Portfolio Section -->