$(document).ready(function () {
    

    $(".btnSuprMess").click(function () {
        
        ///////Recuperation champ inscription 
        ////Recuperachamption mail  
        var $id = $(this).attr("name");
     
//        alert($id);
//        //////Requet ajax pour supr message 
        $.ajax({
            url: 'http://www.beweb.fr/admin/message/supr/'+$id, ///// La ressource ciblée
            type: 'get',
            dataType: "json",
            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */
            success: function ($id) {
            
                
            $("tr[name= "+$id+"]").hide();

            }
//            complete: function () {
//
//            }
//
//
        });

    });
    });