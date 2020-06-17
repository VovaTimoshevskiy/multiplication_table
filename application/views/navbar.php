<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Trainee</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php
                if (!empty($_SESSION['name'])) {
                    echo "posts";
                } ?>">Посты</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php
                if (!empty($_SESSION['name'])) {
                    echo "profile";
                } ?>">Профиль</a>
            </li>
            <?php
            if (!empty($_SESSION['name'])): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="navigation">Навигация</a>
                </li>
            <?php
            endif; ?>
        </ul>
        <ul class="nav justify-content-end">
            <?php
            if (!empty($_SESSION['name'])): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/profile"><?php
                        echo $_SESSION['name'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/profile/logout">LogOut</a>
                </li>
            <?php
            else: ?>
                <li class="nav-item">
                    <a class="nav-link active" href="login">Log</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"
                       href="registration">Registration</a>
                </li>
            <?php
            endif; ?>

        </ul>
    </div>
</nav>
