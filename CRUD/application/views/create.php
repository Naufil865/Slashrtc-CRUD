<form method="post" action="<?php echo base_url('index.php/Products/store');?>">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Title</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Description</label>
                <div class="col-md-9">
                    <textarea name="description" class="form-control"></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Type</label>
                <div class="col-md-9">
                    <select name="type">
                         <option value="Software">Software</option>
                         <option value="Hardware">Hardware</option>
                    </select>
                </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Category</label>
                <div class="col-md-9">
                    <select name="category">
                         <option value="c1">Soft1</option>
                         <option value="c2">Hard2</option>
                    </select>
                </div>
        </div>

        <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn">
        </div>
    </div>
    
</form>