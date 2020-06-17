<div class="container mt-5">
    <div class="row justify-content-center" style="height:100vh">
        <div class="col-4">
            <div class="card text-center">
                <img src="<?php
                if (!empty($data["img"])) {
                    echo $data["img"];
                } else {
                    echo "application/views/img/profile.jpg";
                } ?>"
                     class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?php
                        if (!empty($_SESSION['name'])) {
                            echo $_SESSION['name'];
                        } ?></h5>


                    <a class="btn btn-primary btn-lg mb-1" href="/edit"
                       role="button">Сменить персональные данные</a>

                    <a class="btn btn-primary btn-lg mb-1"
                       href="/profile/logout" role="button">Выйти</a>

                </div>
            </div>
        </div>
    </div>
</div>
