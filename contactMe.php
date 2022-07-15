<?php
session_start();
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<!-- menu -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" >Tweens-Hand Company</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">Головна</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./game.html">Ігри</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.html">Про нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Курси</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
            <button class="btn btn-outline-success" type="submit"> Зв'яжіться з нами</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
<!-- menu -->

<div class="text-success"><?=$_SESSION['success_mail']?></div>
<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Введіть ім'я" class="form-control " style="margin: 40px;">
    <div class="text-danger"><?= $_SESSION[$error_username]?></div>
    <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Введіть email" class="form-control " style="margin: 40px;">
    <div class="text-danger"><?= $_SESSION[$error_email]?></div>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Тема повідомлення" class="form-control " style="margin: 40px;">
    <div class="text-danger"><?= $_SESSION[$error_subject]?></div>
    <textarea name="message"  class="form-control" placeholder="Ваше повідомлення"><?=$_SESSION['message']?></textarea>
    <div class="text-danger"><?= $_SESSION[$error_message]?></div>
    <button type="submit" class="btn btn-success" style="margin: 50px;"> Відправити </button>
</form>


























<div class="footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
        </a>
        <span class="text-muted">© 2022 Tweens-Hand Company, Inc</span>
      </div>
      <span class="text-muted">Слава Україні!</span>
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex" style="margin: 10px;">
        <li class="ms-3" style="font-size: 25px;"><a class="text-muted" href="#"><i class="fa-brands fa-tiktok"></i></a></li>
        <li class="ms-3" style="font-size: 25px;"><a class="text-muted" href="#"><i class="fa-brands fa-instagram"></i></a></li>
        
        <li class="ms-3" style="font-size: 25px;"><a class="text-muted" href="#"><i class="fa-brands fa-facebook"></i></a></li>
      </ul>
    </footer>
  </div>










  
    <!--Content starts-->
    <script>
        AOS.init();
      </script>

    <script src="./index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--Content 