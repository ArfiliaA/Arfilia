<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <link rel="stylesheet" href="../scss/navbar.css">
  <title>Document</title>
</head>
<body>
  <div class="navigation">
    <ul>
      <li class="list active">
        <a href="homepage.php">
          <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
          <span class="text">Home</span>
        </a>
      </li>
      <li class="list">
        <a href="search.php">
          <span class="icon"><ion-icon name="search-outline"></ion-icon></span>
          <span class="text">search</span>
        </a>
      </li>
      <li class="list">
        <a href="queue.php">
          <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
          <span class="text">queue</span>
        </a>
      </li>
      <li class="list">
        <a href="manage.php">
          <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
          <span class="text">manage</span>
        </a>
      </li>
    </ul>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- <script>
  let list = document.querySelectorAll('.list');
  function activeLink(){
    list.forEach((item) => item.classList.remove('active'));
    this.classList.add('active');
  }
  list.forEach((item) => item.addEventListener('click',activeLink))
</script> -->
</body>
</html>