<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Portal Admin</h1>
        </header>
        <nav class="navbar">
            <a href="<?= base_url("/admin/artikel"); ?>" class="active">Dashboard</a>
            <a href="<?= base_url("/admin/artikel"); ?>">Articel</a>
            <a href="<?= base_url("/admin/artikel/add"); ?>">Add Articel</a>
        </nav>