<?php require_once 'inc/top.php';?>
<div class="col-8">
<form action="save.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="file">Tiedosto</label>
        <input type="file" class="form-control" id="file" name="file">
        <button class="btn btn-success">Lataa</button>
    </div>
</form>
</div>
<?php require_once 'inc/bottom.php';?>