<nav>
    <div>
        <a href="index.php">Bloggy</a>
    </div>
    <div>
        <?php
        if (isset($_SESSION["user"])) {
            echo ('<a class="signOut" href="destroy.php">Sign out</a>');
            echo ('<a href="account.php">' . $_SESSION["user"]->getUsername() . '</a>');
        } else {
            echo ('<a href="connect.php">Sign in</a>');
        }
        ?>
    </div>
</nav>