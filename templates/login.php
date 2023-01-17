<div id ="authorization" class="page p-x-1 p-y-3">
    <form class="card card-block m-x-auto bg-faded form-width" method="post" action="log.php">
        <legend class="m-b-1 text-xs-center">Авторизация</legend>
        <div class="form-group has-float-label">
            <label for="mylogin">Логин</label>
            <input name="mylogin" class="form-control" id="mylogin" type="text" require/>
        </div>
        <div class="form-group has-float-label">
            <label for="mypassword">Пароль</label>
            <input name="mypassword" class="form-control" id="mypassword" type="password" require title = "Пароль должен соcтоять из букв и цифр" pattern="[A-Za-zА-Яа-яЁё0-9]{1,}"/>
        </div>
        <div class="text-xs-center">
            <button class="btn btn-block btn-primary" type="submit">Вход</button>
        </div>
        <div class="text-xs-center">
            <label class="custom-control custom-checkbox">
                <span class="custom-control-description" >У вас нет аккаунта?</br>
                Пройдите по ссылке ниже, чтобы пройти регистрацию.
            </label>
        </div>
        <a class="text-xs-center link-danger" href="#registration">
            <div class="link">Зарегистрироваться</div>
        </a>
  </form>
  </form>
</div>
