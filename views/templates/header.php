<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?= $data['page_title'] ?></title>
  <?php getComponent('recursos', $data) ?>
</head>
<body>
  <?php getComponent('navbar', $data) ?>
