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
        <h1>My Favorite Legend of Zelda Locations: BOTW</h1>
        <div class="intro">
            <p>
                I chose a Legend of Zelda theme because it's one of my favorite game series and it's also inspiration for a story I'm creating. I found the artist StephologyShop on Etsy selling these art prints of different locations from the Breath of the Wild game and I ended up buying a few to decorate my room.
            </p>
        </div>
        <div class="grid">
            <div class="grid-item faron">
                <img src="./assets/images/Faron.jpg" alt="Artwork of the Faron region by stephologyshop on Instagram">
                <h2>Faron</h2>
            </div>
            <div class="grid-item goron">
                <img src="./assets/images/Goron.jpg" alt="Artwork of Goron City by stephologyshop on Instagram">
                <h2>Goron</h2>
            </div>
            <div class="grid-item hateno">
                <img src="./assets/images/Hateno.jpg" alt="Artwork of Hateno Village by stephologyshop on Instagram">
                <h2>Hateno Village</h2>
            </div>
            <div class="grid-item rito">
                <img src="./assets/images/Rito.jpg" alt="Artwork of Rito Village by stephologyshop on Instagram">
                <h2>Rito Village</h2>
            </div>
            <div class="grid-item kakariko">
                <img src="./assets/images/Kakariko.jpg" alt="Artwork of Kakariko Village by stephologyshop on Instagram">
                <h2>Kakariko Village</h2>
            </div>
            <div class="grid-item yiga">
                <img src="./assets/images/Yiga.jpg" alt="Artwork of the Yiga Hideout by stephologyshop on Instagram">
                <h2>Yiga Hideout</h2>
            </div>
        </div>
    </main>

    <!-- include footer -->
    <?php include('./components/footer.php'); ?>