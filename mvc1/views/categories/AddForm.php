<form action="<?=$targetURL?>" method="post" class="form-group">
    <div class="form-group">
        Добавить запись:
        <br>
        Категории:<br>
        <input type='text' name='name' value='<?=$data['name']?>'><br>
        Описание:<br>
        <textarea name='description'><?=$data['description']?></textarea><br>
    <input type="submit" value="Добваить!!!" class='btn btn-primary'>
</div>
</form>