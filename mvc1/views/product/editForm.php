    <form action="<?=$targetURL?>" method="post" class="form-group">
    <div class="form-group">
        Редактировать запись:
        <br>
        Товар:<br>
        <input type='text' name='name' value='<?=$row['name']?>'><br>
        Описание:<br>
        <textarea name='description'><?=$row['description']?></textarea><br>
        Цена:<br>
        <input type='number' name='price' value='<?=$row['price']?>'><br>
        Количество:<br>
        <input type='number' name='count' value='<?=$row['count']?>'><br>
        Фото:<br>
        <input type='text' name='img' value='<?=$row['img']?>'><br>
        Категории:<br>
 <?php
    foreach ($categories as $v) {
        ?>
        <input type="radio" name="categories_id" <?= ($v['id'] == $row['categories_id'] ? " checked " : '')?> value="<?= $v['id'] ?>"> <?= $v['name'] ?><br>
    
    <?php
    }
    ?>
    <input type="submit" value="Добавить!!!" class='btn btn-primary'>
</div>
</form>