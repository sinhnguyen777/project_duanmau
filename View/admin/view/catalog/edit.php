<h3 class="d-flex justify-content-center m-0 p-0 text-primary font-weight-bold">EDIT CATALOG</h3>
<div class="card mt-3">
    <div class="card-header info">
    EDIT CATEGORIES
    </div>
    <div class="card-body">
       <?php
            if(isset($_POST['update']) && ($_POST['update'])!=""){
                
        ?>
        <form action="index.php?ctrl=catalog&action=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Category code</label>
                <input type="text" readonly name="id" class="form-control" value="<?=$dm['id']?>"/>
            </div>
            <div class="form-group">
                <label for="">Name list</label>
                <input type="text" name="nameCata" class="form-control" value="<?=$dm['name']?>"/>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                <a href="index.php?ctrl=catalog" class="btn btn-danger">List</a>
            </div>
        </form>

            <?php }else{ ?>

        <form action="index.php?ctrl=catalog&action=edit" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Category code</label>
                <input type="text" readonly name="id" class="form-control" value="<?=$dm['id']?>"/>
            </div>
            <div class="form-group">
                <label for="">Name list</label>
                <input type="text" name="nameCata" class="form-control" value="<?=$dm['name']?>"/>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="update" value="update">Update</button>
                <a href="index.php?ctrl=catalog" class="btn btn-danger">List</a>
            </div>
        </form>
            <?php } ?>
    </div>
</div>