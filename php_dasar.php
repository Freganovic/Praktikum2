<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <!--awal Card form -->
    <div class="card mt-3 ">
        <div class="card-header bg-primary text-white">
            Form Input
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan nama" required>

                </div>
                <div class="form-group">
                    <label for="birthdate">Tanggal Lahir:</label>
                    <input type="date" id="birthdate" name="ttl">

                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <select class="form-control" name="bagian">
                        <option value="manager">Manager
                            <?php
                            $gaji = 2000000;
                            ?>
                        </option>
                        <option value="administration">Administration
                            <?php
                            $gaji = 1800000;
                            ?>
                        </option>
                        <option value="cleaning service" <?php $gaji = 1000000 ?>>Cleaning Services
                        </option>
                        <option value="security" <?php $gaji = 1200000 ?>>Security
                        </option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success" name="submit">Simpan</button>
                <button type="reset" class="btn btn-danger" name="reset">Reset</button>

            </form>
        </div>
        <div class="card mt-3 ">
            <div class="card-header bg-primary text-white">
                Data
            </div>
            <?php
            if (isset($_POST["submit"])) {
                $name = $_POST["nama"];
                $pajak = 0.1;
                $thp = $gaji - ($gaji*$pajak);
                $birthdate = $_POST["ttl"];
                $age = date_diff(date_create($birthdate), date_create('today'))->y;
                $pekerjaan = $_POST["bagian"];
                echo "<p>Nama: $name </p>";
                echo "<p>Umur Anda: $age tahun</p>";
                echo "Pekerjaan : $pekerjaan </p>";
                echo "Gaji : Rp, $gaji</p>";
            }
            if (isset($_POST["reset"])) {
                // reset formulir
                unset($_POST);
            }
            ?>


        </div>
    </div>
    <!-- akhir card form -->
</body>

</html>