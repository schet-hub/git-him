<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $desk = htmlspecialchars(trim($_POST['desk']));

    // Валидация полей
    if (empty($phone) || empty($email) || empty($desk)) {
        echo "Пожалуйста, заполните все поля.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Некорректный email.";
        exit;
    }

    // Настройки отправки письма
    $to = "schet19@outlook.com";  // Замените на свой email
    $subject = "Новая заявка с формы";
    $message = "
    Телефон: $phone\n
    Email: $email\n
    Описание: $desk
    ";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный метод отправки данных.";
}
?>