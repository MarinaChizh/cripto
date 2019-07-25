<form action="<?= $targetURL ?>" method="post">

    <div class="form-group">
        Редактировать:
        <br>
        Категории:<br>
        <input type="text" name="name" value="<?= $row['name'] ?>"><br>
        Описание:<br>
        <textarea row="10" name="description"><?= $row['description'] ?></textarea>
        <input type="submit" value="GO">
    </div>

</form>