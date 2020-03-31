<nav>
    <div>
        <a href="index.php">Bloggy</a>
    </div>
    <div>
        <?php
        
        if (isset($_SESSION["usr"])) {
            if ($_SESSION["usr"]->getStatus() === 1){
                echo('<a href="articleCreation.php">Write an article</a>');
            }
            echo ('<a class="signOut" href="destroy.php">Sign out</a>');
            echo ('<a href="account.php">' . $_SESSION["usr"]->getUsername() . '</a>');
        } else {
            echo ('<a href="connect.php">Sign in</a>');
        }
        ?>
    </div>
</nav>