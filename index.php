<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web\css\all.css">
    <link rel="stylesheet" href="style.css">
    <title>Web Udin</title>
</head>
<body>
    <header>
        <input type ="checkbox" name ="" id ="chk1">
        <div class="logo"><h1>Udin Web</h1></div>
            <div class="search-box">
                <form>
                    <input type ="text" name ="search" id ="srch" placeholder="Search">
                    <button type ="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <ul>
                <li><a href="index.php?modul=home">Home</a></li>
                <li><a href="index.php?modul=product">Product</a></li>
                <li><a href="index.php?modul=blog">Blog</a></li>
                <li><a href="index.php?modul=contact">Contact</a></li>
                <li>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
    </header>
    <div id="main-content">
    <?php
    if(isset($_GET['modul'])){
        $pages = $_GET['modul'];
    }else{
        $pages = "home";
    }
    if(!isset($_GET['modul']) || $pages=="home"){
    ?>
    <div id="Content-home">
    <h1>
        Home
    </h1>
    <p>iko tadi malam keparapat bersama hilal<br>
    iko malming sama adel<br>
    tadi kami belajar b.inggris<br>
    tadi aku sarapan lontong sebelum berangkat sekolah<br>
   </p>
</div>
<?php
    }
    if($pages == "product"){
        ?>
    <div id="Content-product">
        <h1>
            Product
        </h1>
        <p>iko tadi malam keparapat bersama hilal<br>
        iko malming sama adel<br>
        tadi kami belajar b.inggris<br>
        tadi aku sarapan lontong sebelum berangkat sekolah<br>
    </p>
    <ul>
                <li><a href="index.php?modul=Produk1">Home</a></li>
                <li><a href="index.php?modul=Produk2">Product</a></li>
                <li><a href="index.php?modul=Produk3">Blog</a></li>
    </ul>
</div>
<?php
    }
    if($pages == "blog"){
        ?>
        <div id="Content-blog">
    <h1>
        Blog
    </h1>
    <p>iko tadi malam keparapat bersama hilal<br>
    iko malming sama adel<br>
    tadi kami belajar b.inggris<br>
    tadi aku sarapan lontong sebelum berangkat sekolah<br>
   </p>
</div>
 <?php
    }
    if($pages == "contact"){
        ?>
    <div id="Content-contact">
        <h1>
            Contact
        </h1>
        <p>iko tadi malam keparapat bersama hilal<br>
        iko malming sama adel<br>
        tadi kami belajar b.inggris<br>
        tadi aku sarapan lontong sebelum berangkat sekolah<br>
    </p>
    <a href="index.php?modul=aboutme">tentang saya</a>

</div>

<?php    
}
if($pages == "aboutme"){
    ?>
    <div id="Content-aboutme">
        <h1>
            Hello
        </h1>
        <p>Udin
    </p>
<?php
}
if($pages == "Produk1"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Olahraga
        </h1>
        <p>Bola
    </p>
    </div>
    <?php
}
if($pages == "Produk2"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Elektronik
        </h1>
        <p>Hand Phone
    </p>
    </div>
    <?php
}
if($pages == "Produk3"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Furniture
        </h1>
        <p>Meja
    </p>
    </div>
    <?php
}
?>
</div>
</body>
</html>