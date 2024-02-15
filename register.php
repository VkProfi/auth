<?php
if (isset($_POST["email"]) && isset($_POST["name"]) && isset($_POST["password"])) {
    try{
        $email = $_POST["email"];
        $name = $_POST["name"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
        //создание подключения
        $conn = mysqli_connect("localhost", "e978920g_ic", ".Z260308z.", "e978920g_ic");

        // выполнение SQL-запроса для вставки данных
        $request = $conn->query("INSERT INTO users (login,email, password) VALUES ($name, $email, $password)");

        if ($request->execute()) {
            // Успешная регистрация
            header("Location: index.html");
            exit();
        } else {
            // Ошибка при выполнении запроса
            echo "Ошибка при регистрации: " . $request->error;
        }

        $request->close();
        $conn->close();
    }
    catch(Exception $e){
        echo $e -> get_message();
    }
}
?>
