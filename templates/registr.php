
<div id="registration" class="page p-x-1 p-y-3">
  <form class="card card-block m-x-auto bg-faded form-width" method="post" action="reg.php">
    <legend class="m-b-1 text-xs-center">Регистрация</legend>
    <div class="mb-3 form-group input-group">
      <label for="login" class="form-label">ЛОГИН</label>
      <input type="text" class="form-control" id="login" required name="login">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="password" class="form-label">ПАРОЛЬ</label>
      <input type="password" class="form-control" id="password" required name="password" title = "Пароль должен соcтоять из букв и цифр" pattern="[A-Za-zА-Яа-яЁё0-9]{1,}">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="confPassword" class="form-label">ПОВТОРИТЬ ПАРОЛЬ</label>
      <input type="password" class="form-control" id="confPassword" required name="confPassword">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" required name="email">
    </div>
    <div class="mb-3 form-group input-group">
      <label for="name" class="form-label">ИМЯ</label>
      <input type="text" class="form-control" id="name" required name="name" title = "Имя должно состоять минимум из двух букв и не содержать цифр" pattern="[A-Za-zА-Яа-яЁё]{2,}"> 
    </div>
    

    <div class="text-xs-center">
        <button class="btn btn-block btn-primary" type="submit">Регистрация</button>
    </div>
  </form>
</div>


