
<form action="<?=$targetURL?>" method="post" class="form-group">
    <div class="form-group">
        Добавить запись:
        <br>
        Товар:<br>
        <input type='text' name='name' value='<?=$data['name']?>'><br>
        Описание:<br>
        <textarea name='description'><?=$data['description']?></textarea><br>
        Цена:<br>
        <input type='number' name='price' value='<?=$data['price']?>'><br>
        Количество:<br>
        <input type='number' name='count' value='<?=$data['count']?>'><br>
        Фото:<br>
        <input type='text' name='img' value='<?=$data['img']?>'><br>
        Категории:<br>
 <?php
    foreach ($categories as $v) {
        ?>
        <input type="radio" name="categories_id" value="<?= $v['id'] ?>"> <?= $v['name'] ?><br>
    
    <?php
    }
    ?>
    <input type="submit" value="Добваить!!!" class='btn btn-primary'>
</div>
</form>