# Project
##javadoc
**Javadoc** est un outil développé par Sun Microsystems permettant de créer une documentation d'API en format HTML depuis les commentaires présents dans un code source en Java. Javadoc est le standard industriel pour la documentation des classes Java. La plupart des IDEs créent automatiquement le javadoc HTML.

 Un bloc de commentaire java commençant par /** deviendra un bloc de commentaire Javadoc qui sera inclus dans la documentation du code source. Les commentaires Javadoc précèdent généralement les déclarations de classes, d'attributs et de méthodes, il est également possible de décrire un paquetage, en créant un fichier *package-info.java* dans le dossier correspondant, dans lequel on inclut un commentaire Javadoc.

 ###Exemple

 
```java
 /**
 * Valide un mouvement de jeu d'Echecs.
 * @param leDepuisFile   File de la pièce à déplacer
 * @param leDepuisRangée Rangée de la pièce à déplacer
 * @param leVersFile     File de la case de destination 
 * @param leVersRangée   Rangée de la case de destination 
 * @return vrai(true) si le mouvement d'échec est valide ou faux(false) si invalide
 */
 boolean estUnDeplacementValide(int leDepuisFile, int leDepuisRangée, int leVersFile, int leVersRangée)
 {
     ...
 }```