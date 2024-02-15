<?php
try{
    if (isset($_POST["name"]) && isset($_POST["password"])) {
        $name = $_POST["name"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

        // Установите соединение с базой данных (замените параметры подключения)
        $conn = mysqli_connect("localhost", "username", "password", "dbname");

        // Подготовка и выполнение SQL-запроса для выборки данных
        $stmt = $conn->prepare("SELECT email, password FROM users WHERE email = $username OR username = $username");
        $stmt->execute();
        $stmt->bind_result($db_name, $db_password);
        $stmt->fetch();

        if ($password == $db_password ?? $name == $db_name) {
            // Успешная авторизация
            echo "Добро пожаловать!";
        } else {
            // Неправильный логин или пароль
            echo "Неправильный логин или пароль.";
        }

        $stmt->close();
        $conn->close();
    }
}catch(Exception $e){
    echo $e -> get_message();
}

?>
