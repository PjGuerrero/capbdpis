</div>
      <!-- End of Main Content -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  
  <!-- Footer -->
  <footer class="sticky-footer">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; BDPIS 2021</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->
  
  <!-- Scroll to Top Button-->
  <a class="back-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  

<!-- Bootstrap core JavaScript-->
  <script src="/adminassets/vendor/jquery/jquery4.1.min.js"></script>
  <script src="/adminassets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  
  <script src="<?php echo base_url(); ?>//adminassets/js/main.js"></script>
  
  <!-- Core plugin JavaScript-->
  <script src="/adminassets/vendor/jquery-easing/jquery.easing.min.js"></script>
  
  <!-- Custom scripts for all pages-->
  <script src="/adminassets/js/sb-admin-2.min.js"></script>
  <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script src="/adminassets/vendor/sweetalert2/sweetalert2.all.min.js"></script> -->
  <script>
    $(document).ready(function ()
    {
    <?php if(session()->getFlashdata('status')) { ?>
      Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?= session("status") ?>',
  showConfirmButton: false,
  timer: 1500
})
    <?php }?>
    });
  </script>

<script>
    $(document).ready(function ()
    {
    <?php if(session()->getFlashdata('status-error')) { ?>
      Swal.fire({
  position: 'center',
  icon: 'error',
  title: '<?= session("status-error") ?>',
  showConfirmButton: false,
  timer: 1500
})
    <?php }?>
    });
  </script>
  

</body>

</html>
