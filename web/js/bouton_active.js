//fonction de récupération de donnée dans l'URL
function GetURLParameter(sParam) {
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++)
    {
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] === sParam)
        {
            return sParameterName[1];
        }
    }
}


//On se sert de ce même système pour ajouter la classe .active aux button du menu en se servant de leurs ID
var menuButtonId = GetURLParameter('p');
//Si le visiteur vient d'arriver sur le site, 'p' ne sera pas égal à home, donc on set active manuellement
if (!menuButtonId){
    $('#home').addClass('active');
}
$('#' + menuButtonId).addClass('active');