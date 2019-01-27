<!DOCTYPE html>
<html>

<head>
    <title>My Blog</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form>
    <form action="<?php echo base_url(); ?>index.php/welcome/pesan" method="POST">
    <div id="kanan">
        <a href="#">WELCOME TO MY BLOG<br>
			Elisa Dwi Oktaviani
	</a>
    </div>

    <div id="menu">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">PORTFOLIO</a></li>
            <div class="dropdown">
                <li><a href="foto.html" class="dropdown-menu">GALERI</a></li>
                <li><a href="bukutamu.html">KOMENTAR</a></li>
        </ul>
        </div>

        <div id="tampilan">
            <dd>
                <h2>Komentar</h2>
            </dd><br>
            <dd><label for="nama">Nama :</label>
                <input type="text" name="nama" /><br><br>
                <label for="komen">Komentar:</label>
                <textarea name="komentar" cols="25" rows="2"></textarea>
                <br><br><br><br>
                <input type=submit value=SUBMIT>
        </div>
    </form>
    <br>
            <?php if(isset($nama)){?>
            <div>Komentar</div>
            <h5><?php echo $nama; ?></h5>
            <p><?php echo $komentar; ?></p>
            <div></div>
            <?php }?>
        <div id="bottom">
            <h3 href="#">
                @Copyright 2019<br> Elisa Dwi Oktaviani<br> elisaoktavia22@gmail.com<br> 085641052298
            </h3>
        </div>
        
</body>

</html>