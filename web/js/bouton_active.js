console.log("je suis le js coucou !!");

$(document).ready(function(){
    activerOnglet();
    console.log("je suis pret!");
});
     
function activerOnglet()
{
        // Il faut tout d'abord récupérer le nom de l'onglet où on se trouve.
        // Pour moi, je peux savoir l'onglet grâce à l'URL
        // Mes URLs sont de la forme localhost/monprojet/page1/truc
        // Je dois donc récupérer l'élément après "monprojet".
 
    var url=document.location.href.split("/"); // Je sépare selon les '/' de l'URL
    var indiceMonProjet = array_search(url); //Je récupère l'endroit où se situe 'monprojet'
    var indiceOngletAppele = indiceMonProjet +1; // L'onglet que je cherche est donc à indiceMonProjet+1
 console.log(url);
 console.log(indiceMonProjet);
    var ongletAppele = url[3]; //Je récupère le nom de l'onglet actif (page1)
    var ongletActif;
     
        // Traitement selon l'onglet récupéré
        if( ongletAppele === 'Catalogue')
    {
        ongletActif = $('#id_li_Catalogue');
    }
    else if (ongletAppele === 'Contact')
    {
        ongletActif = $('#id_li_Contact');
    }
    else // Sinon, je rends actif mon onglet "Home"
    {
        ongletActif = $('#id_li_Accueil');
    }
     
    ongletActif.addClass("active");
}
 
function array_search(what, where){
    var index_du_tableau=-1;
    for(elt in where)
    {
        index_du_tableau++;
        if (where[elt]==what)
        {
            return index_du_tableau;
        }
    }
    index_du_tableau=-1;
    return index_du_tableau;
}