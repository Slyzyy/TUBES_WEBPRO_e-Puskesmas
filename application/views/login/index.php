<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url('./assets/css/style_login.css') ?>" />
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <?php if($this->session->flashdata('failed') == TRUE){?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('failed')?>
        </div>
        <?php }
        if($this->session->flashdata('success') == TRUE){?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('success')?>
        </div>
      <?php }?>
      <form method="post" action="<?= base_url('login/login') ?>">
        <div class="txt_field">
          <input type="text" required name="email" id="email" value="<?= set_value('email') ?>">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password" id="password" value="<?= set_value('password') ?>">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Lupa Password?</div>
        <button type="submit" class="btn btn-primary text-center">
          Submit
        </button>
        <div class="signup_link">
          Belum mendaftar? <a href="<?= base_url('register/index') ?>">Daftarkan diri sekarang!</a>
        </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <script
      src="https://code.jquery.com/jquery-3.6.1.slim.js"
      integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk="
      crossorigin="anonymous"
    ></script>
  </body>
</html>