<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="navigator.css">
    <title>Document</title>
</head>
<body>
    <div class="navigation">
        <ul>
            <li class="list">
                <a href="#">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="text">home</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon"><ion-icon name="notifications-outline"></ion-icon></span>
                <span class="text">notification</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="text">manage</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="text">manage</span>
                </a>
            </li>
                        <li class="list">
                <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="text">manage</span>
                </a>
            </li>

            <div class="indicator"></div>
        </ul>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let list = docment.querySelectorAll('.list');
        function activeLink(){
            list.forEach((item)=>
            item.classList.remove('active'));
            this.classList.add('active');
        }
        list.forEach((item)=>
        item.addEventListener('click',activeLink))
    </script>
</body>
</html>