<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard - Admin Dashboard</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.3.1/css/fixedHeader.bootstrap.min.css">

  <!-- Local assets -->
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/main/app-dark.css" />
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/main/app.css" />
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/extensions/simple-datatables/style.css" />
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/pages/simple-datatables.css" />
  <link rel="stylesheet" href="<?= base_url('/') ?>assets/css/shared/iconly.css" />
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />

  <!-- Favicon dll -->
  <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/logo/favicon.svg" type="image/x-icon" />
  <link rel="shortcut icon" href="<?= base_url('/') ?>assets/images/logo/favicon.png" type="image/png" />
</head>

<div id="loading">
  <div id="loading-center">
    <img src="<?= base_url('assets/images/loading.gif') ?>" alt="loading..">
  </div>
</div>