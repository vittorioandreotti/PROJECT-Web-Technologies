/**
 * Funzione per mostrare e nascondere pulsante "Cancella Tutti" in funzione 
 * delle checkbox selezionate
 * 
 */
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