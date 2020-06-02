$(function () {
    $('#multipleDelete').hide(); /*Nasconde il bottone "Cancella Tutti" inizialmente*/
    $(':checkbox').on("change",(function(){
        if($(':checkbox:checked').length > 0) {
            $('#multipleDelete').show();
        } else {
            $('#multipleDelete').hide();
        }
    }));
});