 /**
  * Consente di visualizzare la foto selezionata prima dell'upload
  * @param {type} input: file selezionato
  * @param {type} newImageWrapper: id del contenitore che deve contenere l'immagine selezionata
  * 
  */
 
 function showPhoto(input,newImageWrapper) {
            if (input[0].files && input[0].files[0]) {
                 newImageWrapper.show();
                var reader = new FileReader();//L'oggetto FileReader consente di leggere il contenuto del file

                reader.onload = function (e) {
                    newImageWrapper.attr('src', e.target.result); //Al termine dell'operazione di lettura il si imposta il valore dell'attributo 'src' con il contenuto del file
                };

                reader.readAsDataURL(input[0].files[0]); //Legge il contenuto di un file e lo rappresenta con una codifica stringa base64
                
            } else {
                 newImageWrapper.hide();
            }
}