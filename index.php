<?php

require "data-user.php";

?>

<!DOCTYPE html>
<html lang="en" data-color-mode="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css?233">
    <title>Cards</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <header id="scroll-navigation">
            <div class="small-container">
                <div class="navigation">
                    <div class="logo">
                        <i class="bx bx-cube-alt icons"></i>
                        <span class="text-logo">JfeStudio</span>
                    </div>
                    <div class="toggle-darkmode">
                    </div>
                </div>
            </div>
        </header>
        <main class="tab-content">
            <!-- content / Agenst -->
            <div id="explore" class="content explore">
                <div class="small-container">
                    <h1 class="title-explore">Agenst you can trust</h1>
                    <p class="text-explore">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit?
                    </p>
                    <div class="rows-content">
                        <?php foreach ($users as $user) : ?>
                            <div class="cols-content">
                                <div class="card">
                                    <div class="card-images">
                                        <img src="assets/images/<?= $user["images"]; ?> " />
                                        <div class=" card-name">
                                            <h1><?= $user["name"]; ?></h1>
                                            <p><?= $user["skill"]; ?></p>
                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <p><?= $user["description"]; ?></p>
                                        <div class="mycontact">
                                            <h4>Contact Me</h4>
                                            <span class="arrow-right"> &#8594;</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>