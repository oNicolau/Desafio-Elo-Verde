<!doctype html>
<html>

<?php
include 'FootballData.php';
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
  <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
  <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
  <meta name="theme-color" content="#563d7c">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="album.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="collapse bg-dark" id="navbarHeader">
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Desafio Elo Verde</strong>
        </a>
      </div>
    </div>
  </header>

  <main role="main">

    <div class="container">
      <h1>Competições</h1>
    </div>

                <?php $api = new FootballData();
                echo "<p><hr><p>"; ?>
                <h4>Times do Campeonato</h4>
                <table class="table table-striped">
                    <tr>
                    <th>Position</th>
                    <th>TeamName</th>
                    </tr>
                    <?php foreach ($api->findStandingsByCompetition(2021)->standings as $standing) { 
                          if ($standing->type == 'TOTAL') { 
                              foreach ($standing->table as $standingRow) {
                    ?>
                    <tr>
                      <td><?php echo $standingRow->position; ?></td>
                      <td><?php echo $standingRow->team->name; ?></td>
                      <td><button type="button" class="btn btn-dark">Ver</button></td>
                    </tr>
                    <?php }}} ?>
                    <tr>
                    </tr>
                </table>
