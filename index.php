<?php
error_reporting(E_ALL);

$json = file_get_contents(__DIR__.'/phones.json');
$data = json_decode($json, true);

function checkData($data) { 
    if (empty($data)) { 
        return 'не удалось получить данные'; 
    }

return $data;
    
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Задание к занятию «Установка и настройка веб-сервера»</title>
</head>
<body>
<table>
    <caption><h2>Телефонный справочник</h2></caption>
    <thead>
        <tr>
            <td rowspan='2'>Имя</td>
            <td rowspan='2'>Фамилия</td>
            <td colspan='3'>Адрес</td> 
            <td rowspan='2'>Телефон</td>
        </tr>
         <tr>
            <td>Город</td>
            <td>Улица </td>
            <td>№ дома</td>
        </tr>
    </thead>
    <?php foreach ($data as $row): ?>
        <tr>
          <td><?php echo checkData($row['firstName']); ?></td>
          <td><?php echo checkData($row['lastName']); ?></td>
          <td><?php echo checkData($row['address']['city']); ?></td>
          <td><?php echo checkData($row['address']['street']); ?></td>
          <td><?php echo checkData($row['address']['number']); ?></td>
          <td><?php echo checkData($row['phoneNumber']); ?></td>
        </tr>
    <?php endforeach; ?>     
</table>

</body>
</html>