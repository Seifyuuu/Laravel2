Gros exercice qui reprend tout les points qu'on a vu jusqu'à mnt + factory !

// # Migration, Seeder et Factory

dans un nouveau projet : laravel_factory_exo_1
Créer un repository github et faire un commit minimum a chaque partie.
Nom du repo => laravel_exercice_msf
1) table 'batiments'

- Créer une table batiments. Cette table aura comme propriété :
- un id qui sera un entier, s'incrémente
- un nom pour identifier le batiment qui sera un string, limité à 30 caractères
- une description qui sera un text
2) table 'formations'

- Créer une table formations. Cette table aura comme propriété :
- un id qui sera un entier, s'incrémente
- un nom pour identifier les formations qui sera un string, limité à 30 caractères
- une description qui sera un text
3) table 'typeformations'

- Créer une table typeformations. Cette table aura comme propriété suivante:
- un id qui sera un entier, s'incrémente
- un nom pour identifier les types de formations qui sera un string, limité à 30 caractères
4) table 'eleves'

- Créer une table eleves. Cette table aura comme propriété suivante:
- un id qui sera un entier, s'incrémente
- un nom pour identifier les noms des élèves qui sera un string, limité à 30 caractères
- un prenom pour identifier les prenoms des élèves qui sera un string, limité à 30 caractères
- l'âge pour identifier l'âge des élèves qui sera un number
- un état pour identifier si les élèves sont demandeurs d'emploi qui sera un boolean, limité à 30 caractères
5) seeder & factory

Une fois que les tables ont été crées, vous devez rajouter :
- 1 bâtiment (seed)
- 6 formations (seed)
- 10 types de formations (seed)
- 50 élèves (factory)
Les types de formations sont par exemple : Coding School 4, Marketing Lab 1, etc
6) view et controller

Une fois que vous avez fini la structure des tables et de mettre toutes les informations

pour la partie FRONT vous allez créer 4 blades
- Une blade pour le batiment
- Une blade pour les formations
- Une blade pour les types de formations
- Une blade pour les élèves

Pour la partie BACK (backoffice/admin)
- chaque blade(pages) aura son propre controller et toutes les méthodes CRUD fonctionnelles