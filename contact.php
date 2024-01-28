<?php
    $page_title = "Contact";
    include('./components/head.php');
?>

<body>

    <?php include('./components/nav.php'); ?>

    <main>
        <h1>Contact Page</h1>
        <section class=form>
            <form action="./contact.php?submitted=true" method="POST">
                <label for="name"></label>
                <input type="text" value="John Doe" />
                <label for="email"></label>
                <input type="email" value="jdoe@hotmail.com" />
                <label for="message"></label>
                <textarea name="message" id="message"></textarea>
                <label for="color"></label>
                <input type="color" />
                <input type="submit" value="Send form" />
            </form>
        </section>

    </main>
    <?php include('./components/footer.php'); ?>