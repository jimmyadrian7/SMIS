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

});