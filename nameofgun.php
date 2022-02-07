<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, Bootstrap Table!</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
  </head>
  <body>
    <table data-toggle="table">
      <thead>
        <tr>
          <th>Название оружия</th>
          <th>Пользователь оружия </th>
          <th>Пользователь оружия </th>
        </tr>
      </thead>
      <body>
        <tr>
          <td>Пушка 1</td>
          <td>Игорь</td>
          <td>Слава</td>
        </tr>
        <tr>
          <td>Пушка 2</td>
          <td>Олег</td>
          <td>Михаил</td>
        </tr>
        <tr>
          <td>Пушка 3</td>
          <td>Павел</td>
          <td>Сергей</td>
        </tr>
        <tr>
          <td>Пушка 4</td>
          <td>Александр</td>
          <td>Владимир</td>
        </tr>
        <tr>
          <td>Гарпун 1</td>
          <td>Дмитрий</td>
          <td>Илья</td>
        </tr>
        <tr>
          <td>Гарпун 2</td>
          <td>Антон</td>
          <td>Василий</td>
        </tr>
    </table>

<?php

$avaliable_name = [
        'Игорь',
        'Слава',
        'Олег',
        'Михаил',
        'Павел',
        'Сергей',
        'Александр',
        'Владимир',
        'Дмитрий',
        'Илья',
        'Антон',
        'Василий'
    ];
function getName($name, $avaliable_name)
{
    if (in_array($name, $avaliable_name)) {
        return "Есть имя";
    }
    return "Нет имени, ошибка";
}

$messages = getName('Игорь', $avaliable_name);
echo "<h1>" . $messages . "</h1>";
?> 

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
  </body>
</html>