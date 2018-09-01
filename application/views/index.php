<!DOCTYPE html>
<html lang="en">

  <head>
    {meta}
    <title>Clean Blog - Start Bootstrap Theme</title>
    {css}
  </head>

  <body>
    {nav}

    {header}
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          {flash}
          <?php echo $this->session->userdata('nama'); ?>
          {konten}
        </div>
      </div>
    </div>
      <hr>

    {footer}

    {js}
  </body>

</html>
