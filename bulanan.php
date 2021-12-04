<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BULANAN</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-tp">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paket.php">Paket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="bulanan.php">Bulanan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="harian.php">Harian</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="input">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="input-card">
                    <div class="nama">
                        <label class="form-label">Nama </label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="alamat">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="tanggal">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="nominal">
                        <label class="form-label">Nominal</label>
                        <input type="text" class="form-control" name="nominal" required>
                    </div>
                    <h4 class="warning">*Pembayaran Lunas, apabila bayar Rp 150.000.</h4>
                    <a href="#" class="btn btn-primary me-2 ">
                        Input Masuk
                    </a>                   
                </div>
            </div>
        </div>
    </div>
</section>




<footer class="foot text-center">
    <div class="container">
        <h3 class="copyright">Copyright @fiqri2021</h3>
    </div>
</footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>