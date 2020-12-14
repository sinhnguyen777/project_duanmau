<h3 class="d-flex justify-content-center m-0 p-0 text-primary font-weight-bold">ADD CATALOG</h3>
<div class="card mt-3">
    <div class="card-header info">
        MANAGE CATEGORIES
    </div>
    <div class="card-body">
        <form action="index.php?ctrl=catalog&action=addnew" method="post">
            
            <div class="form-group">
                <label for="">Category code</label>
                <input type="text" readonly name="id" class="form-control" placeholder="Code type is self generated" />
            </div>
            <div class="form-group">
                <label for="">Name list</label>
                <input type="text" name="nameCatalog" class="form-control" placeholder="Name of type" />
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="add" value="add">Save</button>
                <a href="#" class="btn btn-danger">List</a>
            </div>
        </form>
    </div>
</div>