$(document).ready(function () {

////// Bouton Poopup Inscription 
    $(".insctrip").css("display", "none");
    $("#btnClose").click(function () {
        $(".insctrip").css("display", "none");
    });

    $("#validationInscrip").click(function () {

        ///////Recuperation champ inscription 
        ////Recuperachamption mail  
        var $mail = $("input[id=mail]").val();
        /// Verification cheekbox 
        if ($('input[id=newLetter').is(':checked')) {
            var $newLetter = 1;
        } else {
            var $newLetter = 0;
        }
        //////Requet ajax pour inscription
        $.ajax({
            url: 'http://www.beweb.fr/candidatureValid', ///// La ressource ciblée
            data: {"mail": $mail, "newsletter": $newLetter},
            type: 'get',
            dataType: "json",
            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */
            success: function () {
                $(".insctrip").css("display", "block");

            },
            complete: function () {

            }


        });

    });
    //////Requet ajax pour Contacte
    $("#validationConta").click(function () {

        ///////Recuperation champ inscription 
        ////Recuperachamption mail  
        var $mailConta = $("input[id=mailConta]").val();
        var $objConta = $("input[id=objConta]").val();
        var $messConta = $("textarea[id=messConta]").val();

        //////Requet ajax pour inscription
        $.ajax({
            url: 'http://www.beweb.fr/contacteValid', ///// La ressource ciblée
            data: {"mailConta": $mailConta,
                "objConta": $objConta,
                "messConta": $messConta
            },
            type: 'get',
            dataType: "json",
            /**
             * Le paramètre data n'est plus renseigné, nous ne faisons plus passer de variable
             */
            success: function () {


            },
            complete: function () {

            }


        });

    });

});
// Scroll navbar fixe on top //
var positionElementInPage = $('.navbar').offset().top;
$(window).resize(function () {
    positionElementInPage = $('.navbar').offset().top;
});
$(window).scroll(
        function () {
            if ($(window).scrollTop() > positionElementInPage) {
                // fixed
                $('.navbar').addClass("fixedTop");
            } else {
                // unfixed
                $('.navbar').removeClass("fixedTop");
            }
        }

);
//// Decalage taille de la barre nav //
//$("#myNavbar a").click(function(){
//    var lien = $(this).text();
//    alert(lien);
//    $("#" + lien).css({
//        marginTop: "500px",
//    })
//});