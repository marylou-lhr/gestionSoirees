<h1 align="center" id="title">GestionSoirées par Marylou Lohier</h1>

<p>
GestionSoirées est un mini-projet Angular composé d'un backend Laravel API et d'un frontend Angular (/client).
</p>
<p>Le but de ce projet est pour les membres du BDE de pouvoir gérer les soirées les réservations et les goodies.
</p>

  
  
<h2>Fonctionnalités</h2>

Ci-dessous la liste des fonctionnalités prévues :

*   Consultation, création et suppression de soirées
*   Consultation, création et suppression de goodies
*   Consultation, création et suppression de réservations
*   Gestion du stock des goodies



<h2>Fonctionnalités non implémentées</h2>

Par manque de temps et à cause de solutions non trouvées, certaines fonctionnalités n'ont pas pu être abouties ou fonctionnelles :
* Création et soirée, de goodie et de réservation (problème de "non-présence" d'un Access-Control-Allow-Origin header même après avoir configuré le CORS)
* Modification de soirée, de goodie et de réservation



<h2>Commandes utiles</h2>
<p>php artisan serve : Lance l'API pour pouvoir faire communiquer les données</p>
<p>(npx) ng serve : Démarre le serveur Angular</p>