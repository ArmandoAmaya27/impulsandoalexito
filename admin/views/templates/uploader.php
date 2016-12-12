<div class="file_uploader">
    <form action="<?= $route ?>" id="form_uploader" enctype="multipart/form-data">         
        <div class="file-preview">
            <span>Selecciona una imagen para subir</span>
            <img src="static/images/user.jpg" class="imageUpload">
        </div>
        
        <div class="file-wrap">
            <input type="file" name="fileUploader" class="filePicker">
            <button type="button" class="bg-blue btn-uploader"><i class="fa fa-upload"></i>Subir Imagen</button>
        </div>
        <input type="hidden" name="tmp" value="<?= $tmp ?>">
    </form>
</div>