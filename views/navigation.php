<header>
    <a class="navbar-brand" href="/index.php"><?php echo $config['title']; ?></a>
    <button class="ham"></button>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">New</a>
            </li><!-- /nav-item -->

            <li class="nav-item">
                <a class="nav-link" href="/about.php">Show</a>
            </li><!-- /nav-item -->

            <li class="nav-item">
                <a class="nav-link" href="/about.php">Past</a>
            </li><!-- /nav-item -->

            <li class="nav-item">
                <a class="nav-link" href="/about.php">Submit</a>
            </li><!-- /nav-item -->
        </ul><!-- /navbar-nav -->
    </nav><!-- /navbar -->

    <?php if (!isset($_SESSION['user'])) : ?>

        <section class="log-status">
            <a class="login-link" href="/login.php">Login</a>
        </section>

    <?php else : ?>
        <section class="log-status">
            <a id="me" href="profile.php?id=<?php $user['id'] ?>"><?= $_SESSION['user']['username'] ?></a>
            <a class="logout-link" href="/app/users/logout.php">Logout</a>
        </section>
    <?php endif; ?>
</header>