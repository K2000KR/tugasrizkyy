<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>POJEK HEKER INDONSIA</title>
  </head>
  <body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-3">Kartu Indonesia Kuliah</h2>
        <form action="simpan.php" method="post">
            <div class="form-group">
                <label>Nomor Induk Kependudukan</label>
                <input type="text" name="NomorIndukKependudukan" class="form-control" placeholder="Masukan Nomor Induk Kependudukan">
            </div>
            <div class="form-group">
                <label>Nomor Induk Siswa Nasional</label>
                <input type="text" name="NomorIndukSiswaNasional" class="form-control" placeholder="Masukan Nomor Induk Siswa Nasional">
            </div>
            <div class="form-group">
                <label>Nomor Pokok Siswa Nasional</label>
                <input type="text" name="NomorPokokSiswaNasional" class="form-control" placeholder="Masukan Nomor Pokok Siswa Nasional	">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="Email" class="form-control" placeholder="Masukan Email	">
            </div>
                </div>
                </div>

                <div class="input-group mb-3">
             <table align="center"> <tr><td> <input type="submit" name="kirim" value="Daftar"> </td></tr></table>
            
</div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>