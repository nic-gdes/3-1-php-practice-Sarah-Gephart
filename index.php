<?php
    $page_title = "Home";
    include('./components/head.php');

    // const GREETING = "Hello";
    // echo GREETING;
?>

<body>

    <!-- include navigation -->
    <?php include('./components/nav.php'); ?>

    <main>
        <h1>Home Page</h1>
        <div class="intro">
            <h1>Legend of Zelda Locations: BOTW</h1>
            <p>I love the Legend of Zelda and it's also inspiration for a story I'm creating.</p>
        </div>
        <div class="grid">
            <div class="grid-item">
                <img src="./assets/images/Faron.jpg" alt="Artwork of the Faron region by stephologyshop on Instagram">
                <h2>Faron</h2>
            </div>
            <div class="grid-item">
                <img src="./assets/images/Goron.jpg" alt="Artwork of Goron City by stephologyshop on Instagram">
                <h2>Goron</h2>
            </div>
            <div class="grid-item">
                <img src="./assets/images/Hateno.jpg" alt="Artwork of Hateno Village by stephologyshop on Instagram">
                <h2>Hateno Village</h2>
            </div>
            <div class="grid-item">
                <img src="./assets/images/Rito.jpg" alt="Artwork of Rito Village by stephologyshop on Instagram">
                <h2>Rito Village</h2>
            </div>
            <div class="grid-item">
                <img src="./assets/images/Kakariko.jpg" alt="Artwork of Kakariko Village by stephologyshop on Instagram">
                <h2>Kakariko Village</h2>
            </div>
            <div class="grid-item">
                <img src="./assets/images/Yiga.jpg" alt="Artwork of the Yiga Hideout by stephologyshop on Instagram">
                <h2>Yiga Hideout</h2>
            </div>
        </div>
    </main>

    <!-- include footer -->
    <?php include('./components/footer.php'); ?>