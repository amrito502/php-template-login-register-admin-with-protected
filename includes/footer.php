  <!-- ==============script====================== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"
      integrity="sha512-poSrvjfoBHxVw5Q2awEsya5daC0p00C8SKN74aVJrs7XLeZAi+3+13ahRhHm8zdAFbI2+/SUIrKYLvGBJf9H3A=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <!--===============================================================================================-->
	<script src="./assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/bootstrap/js/popper.js"></script>
	<script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="./assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="./assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="./assets/js/main.js"></script>

    <script>
    <?php if(isset($_SESSION['message'])) {?>
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('<?= $_SESSION['message']; ?>');
    <?php 
    unset($_SESSION['message']);
    }
    ?>
</script>
  </body>

  </html>