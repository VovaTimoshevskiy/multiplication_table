<div class="container">
    <div class="row justify-content-center align-items-center"
         style="height:100vh">
        <div class="col-4">
            <form action="/edit/profile/img" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Изображения</label>
                    <input type="file" class="form-control-file" name="img"
                           id="exampleFormControlFile1">
                </div>
                <button type="submit"
                        class="btn btn-primary btn-lg btn-block mb-4">
                    Загрузить
                </button>
            </form>
            <form method="post" action="/edit/profile">

                <div class="form-group">
                    <input type="text" class="form-control"
                           style="height: 50px;" placeholder="Name" name="name"
                           value="<?php echo $data["name"] ?>"
                    >
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"
                           style="height: 50px;"
                           name="email" value="<?php echo $data["email"] ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"
                           style="height: 50px;"
                           name="password" placeholder="Сменить пароль">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">
                    Изменить
                </button>
            </form>
        </div>
    </div>
</div>

