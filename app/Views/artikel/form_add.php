<?= $this->include('template/admin_header'); ?>
<div class="form">
    <h2><?= $title; ?></h2>
    <form action="" method="post">
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" placeholder="">
        <textarea name="isi" cols="50" rows="10"></textarea>
        <p><input type="submit" value="Kirim" class="btn btn-large"></p>
    </form>
</div>
<?= $this->include('template/admin_footer'); ?>