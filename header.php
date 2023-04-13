<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating Visual Design</title>
    <link rel="stylesheet" href="./css/style.css">
    <?php wp_head() ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>
    
    <header class="header">
        <div class="container">

            <div class="header__wrapper">
            
                <div class="header__logo">
                    <img src="./img/logo.png" alt="">
                        <h2>Creative <span>Visual</span> Design</h2>
                </div>
                

                <nav class="navBar">
                    <ul>
                        <?php wp_menu_li(); ?>
                    </ul>
                </nav>

               
                <div class="toggle_menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>

        </div>
        
    </header>