<h2>Регистрация нового пользователя</h2>

<h3><?= $message ?? ''; ?></h3>

<form method="post">

    <label>
        <input type="text" name="name" placeholder="name">
    </label>

    <label>
        <input type="text" name="login" placeholder="login">
    </label>

    <label>
        <input type="password" name="password" placeholder="password">
    </label>

    <button>Зарегистрироваться</button>

</form>