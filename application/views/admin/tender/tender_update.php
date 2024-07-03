<div class="row">
    <div class="col-12">
        <label>Tender Title:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
            </div>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Tender Title" value="<?php echo $tender['title'] ?>">
            <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $tender['id'] ?>">
        </div>
    </div>
    <div class="col-12">
        <label>Description:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
            </div>
            <textarea name="description" id="description" class="form-control" placeholder="Enter Tender Description"><?php echo $tender['description'] ?></textarea>
        </div>
    </div>
    <div class="col-12">
        <form id="up_doc" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <label>Upload PDF:</label>
            <div class="input-group mb-3">
                <input type="file" name="file" id="file" class="form-control">
                <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $tender['id'] ?>">
                <input type="submit" name="submit" class="btn btn-success btn-sm" value="Upload">
            </div>
        </form>
    </div>
</div>

<script>
    $('#up_doc').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url() ?>admin/tender/update_doc',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                var obj = JSON.parse(data);
                if (obj.icon == "error") {
                    var valid = '';
                    $.each(obj.text, function(i, item) {
                        valid += item;
                    });
                    Toast.fire({
                        icon: obj.icon,
                        html: valid,
                    })

                } else {
                    Toast.fire({
                        icon: obj.icon,
                        text: obj.text
                    })
                    //setTimeout(location.reload.bind(location), 3000);
                    window.location.reload(true);
                }
            }
        });
    });
</script>