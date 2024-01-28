<?php
    $page_title = "Contact";
    include('./components/head.php');

    if (isset($_POST['submit'])) {
        $name = htmlspecialchars($_POST(['name']));
        $email = htmlspecialchars($_POST(['email']));
        $message = htmlspecialchars($_POST(['message']));

        echo $name . ", " . $email . ", " . $message;
    }
?>

<body>

    <?php include('./components/nav.php'); ?>

    <main>
        <h1>Contact Page</h1>
        <section class=form>
            <form action="./contact.php?submitted=true" method="$_POST">
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" />
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="jdoe@hotmail.com" />
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="40" placeholder="Enter your message here."></textarea>
                </div>
                
                <input type="submit" id="submit" name="submit" value="Submit" />
            </form>
        </section>

    </main>
    <?php include('./components/footer.php'); ?>