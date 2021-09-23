<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Barangay Officials</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Barangay Officials</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="row">
        <?php foreach ($tbl_officials as $row): ?>
          <div class="col-lg-6  mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="<?= $row['image'] ?>" height="120px" width="150px" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4><?= $row['name'] ?></h4>
                <h5><?= $row['position'] ?></h5>
                <span><?= $row['chairmanship'] ?></span>
                <p><?= $row['contact'] ?></p>
                <div class="social">
                  <a href="<?= $row['contact'] ?>"><i class="ri-twitter-fill"></i></a>
                  <a href=""><i class="ri-facebook-fill"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          
          

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->