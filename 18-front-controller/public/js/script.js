// Fonction pour déplacer le nuage
function deplacerNuage() {
    var nuage = document.getElementById('nuage');
    var positionActuelle = parseInt(nuage.style.left, 10) || -100; // Commence en dehors de la page
    var vitesse = 3; // Réglage de la vitesse de déplacement

    // Déplacement vers la droite
    positionActuelle += vitesse;
    nuage.style.left = positionActuelle + 'px';


    // Réinitialisation lorsque le nuage sort de la page
    if (positionActuelle > document.body.clientWidth) {
        nuage.style.left = '-100px'; // Recommence en dehors de la page
    }

    // Appeler la fonction à nouveau
    requestAnimationFrame(deplacerNuage);
}
// Appeler la fonction au chargement de la page
document.addEventListener('DOMContentLoaded', function() {
    deplacerNuage();
});