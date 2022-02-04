-- INSERT pour créer une nouvelle entrée dans une table : 
INSERT INTO nom_de_la_table (liste_des_colonnes) VALUES (valeurs_des_colonnes);

SELECT * FROM employes;

INSERT INTO employes (id_employes, nom, prenom, sexe, service, date_embauche, salaire) VALUES (NULL, 'Jones', 'Mathieu', 'm', 'web', CURDATE(), 3000);

-- il est possible de ne pas préciser la clé primaire
INSERT INTO employes (nom, prenom, sexe, service, date_embauche, salaire) VALUES ('Jones', 'Mathieu', 'm', 'web', CURDATE(), 3000);

SELECT * FROM employes;

-- Il est possible de ne pas nommer les colonnes, mais il faut respecter l'ordre des valeurs selon l'ordre des colonnes de la table.
INSERT INTO employes VALUES (NULL, 'Mathieu', 'Jones', 'm', 'web', CURDATE(), 3000);



-----------------------------
-- UPDATE
-----------------------------
-- Pour modifier des données existantes.

UPDATE nom_de_la_table SET colonne=valeur, colonne2=valeur2 WHERE condition;

-- changement de service
UPDATE employes SET service = 'developpement' WHERE id_employes = 991; 
UPDATE employes SET service = 'developpement' WHERE nom = 'Jones'; 

-- Augmentation de tous les salaires
UPDATE employes SET salaire = salaire + 100;

-- Augmentation des salaires des employes du service commercial ayant été embauché avant 2010
SELECT * FROM employes WHERE service = 'commercial' AND date_embauche < '2010-01-01';
UPDATE employes SET salaire = salaire + 200 WHERE service = 'commercial' AND date_embauche < '2010-01-01';
SELECT * FROM employes WHERE service = 'commercial' AND date_embauche < '2010-01-01';


-----------------------------
-- DELETE
-----------------------------
DELETE FROM nom_de_la_table WHERE condition

DELETE FROM employes WHERE id_employes > 990;