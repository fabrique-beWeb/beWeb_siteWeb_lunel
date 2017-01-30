$(document).ready(function () {
    
    
    $("#validationInscrip").click(function () {
        ////Recuperachamption mail  
        var $mail = $("input[id=mail]").val();

        /// Verification cheekbox 
        if ($('input[id=newLetter').is(':checked')) {
            var $newLetter =  1 ;
        } else {
            var $newLetter =  0 ;
        }
        

        $.ajax({
            url: 'http://localhost/tp/projet/beweb/web/app_dev.php/candidatureValid', ///// La ressource ciblée
            data: {"mail": $mail, "newsletter": $newLetter},
            type: 'get',
            dataType: "json",
            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */
            success: function () {
                
            },
               complete : function(){
                  
            }

            
        });

    });
});