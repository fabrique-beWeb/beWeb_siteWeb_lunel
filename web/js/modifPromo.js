$(document).ready(function () {
    

    $("#caca").click(function () {
        
        ///////Recuperation champ inscription 
        ////Recuperachamption mail  
  
     var $img = $("input[id=appbundle_promos_image]").val();
        alert($img);
     
        //////Requet ajax pour supr message 
        $.ajax({
            url: 'http://localhost/tp/projet/beweb/web/app_dev.php/admin/modifPromotion/img', ///// La ressource ciblée
            type: 'get',
            dataType: "json",
            data: {"img": $img},
            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */
            success: function () {
            
                
//            $("tr[name= "+$id+"]").hide();

            }
//            complete: function () {
//
//            }
//
//
        });

    });
    });