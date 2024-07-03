<div class="row">
    <div class="col-12">
        <label>News Title:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-newspaper"></i></span>
            </div>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter News Title" value="<?php echo $news['title'] ?>">
            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $news['id'] ?>">
        </div>
    </div>
    <div class="col-12">
        <label>Description:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
            </div>
            <textarea name="description" id="description" class="form-control" placeholder="Enter News Description"><?php echo $news['description'] ?></textarea>
        </div>
    </div>
</div>