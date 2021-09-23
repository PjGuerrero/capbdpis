<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>FAQs</h2>
      <ol>
        <li><a href="/">Home</a></li>
        <li>FAQs</li>
      </ol>
    </div>

  </div>
</section><!-- End Breadcrumbs -->

<!-- ======= FAQs Section ======= -->

<section class="faq-section">
  <div class="container">
    <div class="row">
      <!-- ***** FAQ Start ***** -->
      <div class="col-md-6 offset-md-3">

        <div class="faq-title text-center pb-3">
          <h2>FAQ</h2>
        </div>
      </div>
      <?php foreach ($tbl_faqgen as $row): ?>
        <details>
   <summary><?= $row['question'] ?></summary>
      </br>
   <p><?= $row['answer'] ?></p>	 
 </details>
  <?php endforeach; ?>

   
</div>
  </div>
</section>
</main><!-- End #main -->