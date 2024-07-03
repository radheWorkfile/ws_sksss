<div class="card-body">
    <div class="row">
        <div class="col-12">
            <label>Sub Menu Title:</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                </div>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter Sub Menu Title" value="<?php echo $menu['sub_menu']; ?>">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $menu['id']; ?>">
            </div>
        </div>
        <div class="col-12">
            <div class="input-group mb-3">
                <textarea class="summernote" name="content" id="content">
                    <?php echo $menu['content']; ?>
                </textarea>
            </div>
        </div>

    </div>
</div>

<script>
  $(function () {
    // Summernote
    $('.summernote').summernote({
      height: 200,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: true
    })

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>