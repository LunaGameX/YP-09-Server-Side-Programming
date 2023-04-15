<h2>Регистрация нового пользователя</h2>

<h3><?= $message ?? ''; ?></h3>

<form method="post">

    <label>
        <input type="text" name="name">
    </label>

    <label>
        <input type="text" name="login">
    </label>

    <label>
        <input type="password" name="password">
    </label>

    <button>Зарегистрироваться</button>

</form>