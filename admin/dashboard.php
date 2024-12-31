<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="..\assets\css\style.css">
    <link rel="stylesheet" href="..\assets\css\global.css">
    <link rel="stylesheet" href="..\assets\css\responsive.css">

</head>

<body>

    <header class=" admin-header">
        <nav class="container">
            <ul class=" menu dashbord flex-container ">
                <li class="dashbord-item"><a href="..\pages\index.php" class="text-black font-16 san-serif ">Open
                        Site</a></li>
                <li class="dashbord-item"><a href="..\admin\account.php" class=" text-black font-16 san-serif">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="flex-container dashboard-content">
            <div class="side-bar flex-container">
                <div id="side-bar-logo">
                    <img src="..\assets\images\logo\logo.png" alt="">
                </div>
                <ul class="menu">
                  
                    <li class="menu-item side-menu"><a href="..\admin\view_product.php" class="font-16 san-serif text-black">View Product</a>
                    </li>

                    <li class="menu-item side-menu"><a href="..\admin\add_product.php"
                    class="font-16 san-serif text-black">Add Product</a></li>

                    <li class="menu-item side-menu"><a href="..\admin\add_product.php"
                            class="font-16 san-serif text-black">Profile</a></li>
                    <li class="menu-item side-menu"><a href="" class="font-16 san-serif text-black">Page three</a></li>


                </ul>
            </div>

                <div class="content-area">
                    <iframe id="content-frame" src="" frameborder="0" style="width: 100%; height: 100%;"></iframe>
                </div>

        </section>
    </main>


    <script src="..\assets\js\style.js"></script>
</body>

</html>