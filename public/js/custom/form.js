$(document).ready(function() {
    //#region Set max length
    let enforce_maxlength = function(event){
        var t = event.target;
        if (t.hasAttribute('maxlength')) {
        t.value = t.value.slice(0, t.getAttribute('maxlength'));
        }
    }
    document.body.addEventListener('input', enforce_maxlength);
    //#endregion
    
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

});