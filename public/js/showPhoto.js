 function showPhoto(input,newImageWrapper) {
            if (input[0].files && input[0].files[0]) {
                 newImageWrapper.show();
                var reader = new FileReader();

                reader.onload = function (e) {
                    newImageWrapper.attr('src', e.target.result);
                };

                reader.readAsDataURL(input[0].files[0]);
            } else {
                 newImageWrapper.hide();
            }
}