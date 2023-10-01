<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
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
      <h1>Register</h1>
      <?php if($this->session->flashdata('failed') == TRUE){?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?= $this->session->flashdata('failed')?>
        </div>
      <?php }?>
      <form method="post" action="<?= base_url('register/register') ?>">
        <div class="txt_field">
          <input type="text" required name="nama" id="nama" value="<?= set_value('nama') ?>">
          <span></span>
          <label>Nama Lengkap</label>
          <?= form_error('nama'); ?>
        </div>
        <div class="txt_field">
          <input type="text" required name="no_telp" id="no_telp" value="<?= set_value('no_telp') ?>">
          <span></span>
          <label>No. Telepon</label>
          <?= form_error('no_telp'); ?>
        </div>
        <div class="txt_field">
          <input type="text" required name="email" id="email" value="<?= set_value('email') ?>">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password1" id="password"1 value="<?= set_value('password1') ?>">
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password2" id="password2" value="<?= set_value('password2') ?>">
          <span></span>
          <label>Confirm Password</label>
        </div>
        <div class="form-check form-check-inline">
          <ul>
            <input class="form-check-input" type="radio" name="role" id="pasien" value="pasien" required>
            <label class="form-check-label" for="pasien">
              Pasien
            </label>

            <input class="form-check-input" type="radio" name="role" id="dokter" value="dokter" required>
            <label class="form-check-label" for="dokter">
              Dokter
            </label>

            <input class="form-check-input" type="radio" name="role" id="apoteker" value="apoteker" disabled>
            <label class="form-check-label" for="apoteker">
              Apoteker
            </label>
          </ul>
        </div>
        <button type="submit" class="btn btn-primary text-center">
          Submit
        </button>
        <div class="signup_link">
          Sudah punya akun? <a href="<?= base_url('login/index') ?>">Login disini</a>
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
