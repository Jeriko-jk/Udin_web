<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web\css\all.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.css">
    <script src="fontawesome-free-6.4.2-web\css\all.css" crossorigin="anonymous"></script>
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
    <div class="container mt-5" id="Content-contact">
        <div class="text-center">
            <h1 class="display"><strong>Crud App</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="row justify-content-center mb-4" autocomplete="off">
                <label for="firstName" >First Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="firstName" placeholder="Eneter First Name " name="name"   onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <label for="lastName">Last Name</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="lastName" placeholder="Eneter last Name " name="name"   onkeyup="validatelastName()">
                    <span id="name-error1"></span>
                </div>
                <label for="rollNo">Roll No</label>
                <div class="input-group coll-10 mb-3">
                    <input type="text" class="form-control" id="rollNo" placeholder="Eneter Roll No " name="phone" type="tel"   onkeyup="validatePhone()">
                    <span id="phone-error"></span>

                </div>
                <div class="col-15">
                    <input type="submit" value="Submit" class="btn btn-success add-btn">
                </div>
            </form>
            <div class="col-13  mt-5">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="student-list">
                        <tr>
                            <td>Dear</td>
                            <td>Programmer</td>
                            <td>25</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm edit">edit</a>
                                <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<script src="script.js"></script>
    </div>

<?php    
}
if($pages == "aboutme"){
    ?>
    <div id="Content-aboutme">
        <h1>
            Hello
        </h1>x
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
        <p>Bola</p>
        <a href="index.php?modul=product">back</a>
    </div>
    <?php
}
if($pages == "Produk2"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Elektronik
        </h1>
        <p>Hand Phone</p>
        <a href="index.php?modul=product">back</a>
    </div>
    <?php
}
if($pages == "Produk3"){
    ?>
    <div id="Content-contact">
        <h1>
            Produk Furniture
        </h1>
        <p>Meja</p>
        <a href="index.php?modul=product">back</a>
    </div>
    <?php
}
?>
</div>
</body>
</html>