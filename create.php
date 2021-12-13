<!DOCTYPE html>
<html>
<script src="https://extension-files.twitch.tv/helper/v1/twitch-ext.min.js"></script>

<head>
    <title>Pacman GO</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <?php
    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";
    
    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['submit'] == "cheer") {
            $cheer="1";
            $jeer="0";
        } else if ($_POST['submit'] == "jeer") {
            $cheer="0";
            $jeer="1";
        }
        $nickname=input($_POST["nickname"]);
        

        //Query input menginput data kedalam tabel anggota
        $sql="insert into polling_table (nickname,cheer,jeer) values
		('$nickname','$cheer','$jeer')";

        //Mengeksekusi/menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:create.php");
        }
        else {
            echo "<div class='alert alert-danger'> Failed.</div>";

        }

    }
    ?>
        <br>
        <h2>Pacman Go</h2>
<script src= "https://player.twitch.tv/js/embed/v1.js"></script>
<div id="<player div ID>"></div>
<script type="text/javascript">
  var options = {
    width: 1080,
    height: 720,
    channel: "kartikalfc",
    //video: "<video ID>",
    //collection: "<collection ID>",
    // only needed if your site is also embedded on embed.example.com and othersite.example.com
    parent: ["embed.example.com", "othersite.example.com"]
  };
  var player = new Twitch.Player("<player div ID>", options);
  player.setVolume(0.5);
</script>
				<div class="row">
            <div class="col-8 col-md-6">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <div class="form-group">
                        <label>Nickname!:</label>
                        <input type="text" name="nickname" class="form-control" placeholder="Nickname" required />
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="cheer">Register</button>
                        </div>
                       
                    </div>
                </form>
            </div>
        </div>









        <div class="row">
            <div class="col-8 col-md-6">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
                    <div class="form-group">
                        <label>Give your Action</label>
                  
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="cheer">Cheer</button>
                        </div>
                        <div class="col-6 col-md-6">

                            <button type="submit" name="submit" class="btn btn-danger btn-lg btn-block" value="jeer">Jeer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</body>

</html>