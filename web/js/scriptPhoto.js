$('input[type=file]').change(function (event) {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('img').attr('src', e.target.result);
            };
            var image = this.files[0];
            if(image.size < 2000000){
                reader.readAsDataURL(this.files[0]);
            }else{
                $('#message').text('La taille de l\'image dépasse les 2Mo');
                setTimeout(function(){
                    $('#message').text('');
                },2000);
            }
             
            
        }

    });