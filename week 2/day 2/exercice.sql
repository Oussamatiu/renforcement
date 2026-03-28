-- 1. Afficher le nom et l'email de tous les utilisateurs de type 'client'
-- 2. Afficher tous les plats dont le prix est inférieur à 15€, triés du moins cher au plus cher
-- 3. Compter le nombre de commandes par statut ('livré', 'en cours', 'annulé')
-- 4. Afficher les 3 restaurants avec la meilleure note moyenne (ORDER BY + LIMIT)
-- 5. Calculer le chiffre d'affaires total et le panier moyen de toutes les commandes livrées
-- 6. Afficher tous les plats dont le nom contient le mot 'poulet' (LIKE)
-- 7. Afficher le nom du client et le total pour chaque commande (INNER JOIN commandes +
-- utilisateurs)
-- 8. Afficher le nom du restaurant et le nombre de commandes reçues, même pour les
-- restaurants sans commande (LEFT JOIN)
-- 9. Lister toutes les commandes livrées avec le nom du client, le nom du livreur et le nom du
-- restaurant
-- 10.Afficher les plats commandés au moins une fois avec leur quantité totale vendue (JOIN +
-- GROUP BY + SUM)
-- 11. Trouver les clients qui ont commandé plus de 3 fois, avec leur nombre de commandes
-- (JOIN + GROUP BY + HAVING)
-- 12.BONUS : Afficher le top 3 des livreurs les mieux notés (jointure sur notations +
-- commandes + utilisateurs)

select nom , email from utilisateurs where type = 'client';

select nom , prix from plats where prix > 15 ORDER BY prix ASC;

select statut , count(*) as total_commandes from commandes GROUP BY statut ;

select nom , note_moy from restaurants ORDER BY note_moy desc LIMIT 3;

select r.nom , sum(c.total) as chiffre_affaires , avg(c.total) as panier_moyen from restaurants r join commandes c on r.id = c.restaurant_id where c.statut = "livrees" 
GROUP BY r.id , r.nom;

select * from plats where nom like '%poulet%';

select u.nom , c.total from utilisateurs u join commandes c 
on u.id = c.client_id ;

select r.nom , count(c.id) as total_commandes from restaurants r left join commandes c 
on r.id = c.restaurant_id GROUP BY r.id ,r.nom ; 

select c.* , u.nom as client , l.nom as livreur from commandes c join utilisateurs u on c.client_id = u.id join utilisateurs l on c.livreur_id = l.id 
where c.statut = 'liveree';

select p.nom , sum(lc.quantite) as quantité_totale from plats p join lignes_commande lc on p.id = lc.plat_id
GROUP BY p.nom ;

select u.nom , count(c.id) as num_fois from utilisateurs u join commandes c on u.id = c.client_id
GROUP BY u.id ,u.nom HAVING count(c.id) > 3;

select u.nom , avg(n.note) as note from utilisateurs u join commandes c on u.id = c.livereur join
notations n on c.id = n.commande_id GROUP BY u.nom , u.id
ORDER BY note DESC LIMIT 3; 