$(document).ready(function() {
    
    // input event handler
    $('.custom-input-text').on('keyup paste change input', function(){
        if(this.value == ''){
            $(this).prev().addClass('d-none');
        }else{
            $(this).prev().removeClass('d-none');
        }
    });
    $('.clear-button').on('click', function(){
        $(this).next().val('').change();
    });
    $('.custom-input-text').change();

    $('.smis-select').select2();

    $('.smis-input-file').on('change', function(e){
        var fileName = "0 file uploaded";
        if(e.target.files.length > 0){
            if(e.target.files.length == 1){
                fileName = e.target.files[0].name + " Uploaded";
            }else{
                fileName = e.target.files.length.toString() + " files Uploaded";
            }
        }
        $(this).prev().html(fileName);
    });

});