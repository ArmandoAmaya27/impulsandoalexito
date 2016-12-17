<form action="app/ajax/upload" id="uploader">
     <div class="file_uploader clearfix">
         <div class="alert hide" id="ajax_uploader"></div>
         <div class="file-preview">
             <span>Selecciona una imagen</span>
             <img src="#" alt="">
         </div>
         <div class="image-caption bg-red">
             <span>Nombre de la imagen</span><button type="button" class="file-btn-remove"><i class="fa fa-close"></i></button>
        </div>
        <div class="file-wrap">
            <input type="file" name="fileUploader" class="file-input-upload">
            <button type="button" class="btn-uploader bg-blue"><i class="fa fa-upload"></i> Subir Imagen</button>
        </div>
    </div>

    <input type="hidden" name="tmp" value="<?= $tmp ?>">
</form>