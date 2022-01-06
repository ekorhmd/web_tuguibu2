<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Administrator | SMP Yaspen Tugu Ibu 2</title>

  <link href="<?= base_url('assets/') ?>/images/icon.gif" rel="shortcut icon">
  <link href="<?= base_url('assets') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/vendor/summernote/summernote-bs4.min.css">

  <link href="<?= base_url('assets') ?>/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets') ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php if ($this->session->flashdata('sukses')) : ?>
    <div class="alert bg-success p-2 m-0 rounded-0 text-white fixed-top" role="alert" id="pesan-sukses">
      <div class="ml-3">
        <i class="fas fa-check-circle mr-1"></i>
        <?= $this->session->flashdata('sukses') ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->session->flashdata('gagal')) : ?>
    <div class="alert bg-danger p-2 m-0 rounded-0 text-white fixed-top" role="alert" id="pesan-gagal">
      <div class="ml-3">
        <i class="fas fa-times-circle"></i>
        <?= $this->session->flashdata('gagal') ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (validation_errors()) : ?>
    <div class="alert bg-danger p-2 m-0 rounded-0 text-white fixed-top" role="alert" id="pesan-gagal">
      <div class="ml-3">
        <i class="fas fa-times-circle"></i>
        Data akademik <strong>gagal</strong> disimpan!
      </div>
    </div>
  <?php endif; ?>

  <!-- Page Wrapper -->
  <div id="wrapper">