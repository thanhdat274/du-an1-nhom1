<div class="col-md-11">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Sửa Danh Mục</h3>
        </div>
        <form method="POST">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                    <input type="text" name="name" class="form-control" value="<?=$field['ten_dm']?>" placeholder="Enter danh mục">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="addCategory">Submit</button>
            </div>
        </form>
    </div>
</div>