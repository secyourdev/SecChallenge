---
title: Challenge JWT, correction
---

#web #api #graphql #jwt #burp

## Qu'est-ce qu'un token JWT ?

Un token JWT (JSON Web Token) est une chaîne de caractères encodée en base64 qui contient des informations d'identification et d'autorisation pour accéder à une API ou à un service web. Les tokens JWT sont utilisés pour sécuriser les API REST et GraphQL, ainsi que d'autres applications web.

Un token JWT est composé de trois parties séparées par des points : l'en-tête, la charge utile (payload) et la signature. L'en-tête spécifie le type de token et l'algorithme de cryptage utilisé pour générer la signature. La charge utile contient les données d'identification et d'autorisation, telles que l'identifiant de l'utilisateur et les rôles d'accès. La signature est utilisée pour vérifier que le token n'a pas été altéré ou falsifié.

Le processus de génération d'un token JWT implique généralement un système d'authentification qui vérifie les informations d'identification de l'utilisateur et génère ensuite un token JWT signé. Le token est ensuite renvoyé au client, qui peut l'inclure dans les requêtes ultérieures à l'API pour prouver son identité et ses autorisations.

Les tokens JWT sont populaires car ils peuvent être utilisés dans des environnements distribués, tels que les micro-services, où chaque service peut vérifier le token sans avoir besoin de contacter le système d'authentification à chaque requête. Ils sont également faciles à implémenter et à utiliser avec des frameworks et des bibliothèques populaires, tels que Express et Spring Boot.

## Énoncé du challenge

Vous disposez d'un site web à l'adresse `http://localhost:3000/` et de credentials pour vous connecter :
- Email : `graphql@exemple.com`
- Password : `Pa$$w0rd!`

Votre but est de récupérer le secret caché de l'administrateur.

## Correction du challenge

Vu qu'on a des credentials, on se connecte :

- Email : `graphql@exemple.com`
- Password : `Pa$$w0rd!`

Une fois connecté, on regarde le localStorage ou les cookies pour tenter de trouver un token JWT (nom du challenge qui aide pas mal !).
Bingo ! Il y a bien un cookie :

![[attachments/jwt_1.png]]
On s'empresse d'aller sur le site [jwt.io](https://jwt.io) pour visualiser ce token :
![[attachments/jwt_2.png]]
On voit qu'il n'y a qu'un champ à exploiter, le `userId`.
Comme on doit accéder au secret de l'administrateur, on se doute que la vérification va se faire sur ce champ **userId**, dont le compte administrateur doit posséder l'id numéro 0 ou 1.

En testant à la main ou en faisant un **dirb** sur le site, on remarque rapidement qu'il y a une route `/admin`, qui affiche ce message :
![[attachments/jwt_3.png]]
On se dit donc qu'en modifiant notre JWT en mettant l'id numéro 1 ou 0, on sera connecté en tant qu'admin et on pourra accéder à cette page, et donc au secret de l'administrateur !

Lorsque l'on regarde dans l'onglet réseaux, on voit une requête intéressante, qui a échouée, sur `http://localhost:5000/` :
![[attachments/jwt_4.png]]
En allant dans l'onglet payload, on comprends que c'est une API GraphQL et qu'on est authentifier via le token JWT.

Avec **Burp**, on intercepte cette requête :

![[attachments/jwt_5.png]]
On l'envoie dans le repeater.
Si on renvoie la requête telle quelle on a ce message d'erreur :
![[attachments/jwt_6.png]]

Si dans [jwt.io](https://jwt.io) on tente de modifier l'id de l'utilisateur, on obtient cette nouvelle erreur :

![[attachments/jwt_7.png]]
Le `Invalid signature` nous mets la puce à l'oreille. Le JWT est signé, retrouvons donc le mot de passe avec lequel il l'a été, pour pouvoir forger notre propre jwt !

Pour ce faire, on utilise **hashcat**  avec la wordlist **rockyou.txt** et le mode **16500** :
```bash
hashcat -a 0 -m 16500 "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjIsImlhdCI6MTY3ODgxNTcxMH0.52WMLQlg-bPooX8ca2iV5NNvdkBH8mWu0MdryUI2Wm4" /usr/share/wordlists/rockyou.txt
```
![[attachments/jwt_8.png]]
Et voilà ! Le mot de passe pour signer les tokens **JWT** est : `assholes`.

On forge donc un nouveau **JWT** sur [jwt.io](https://www.jwt.io) mais cette fois-ci en spécifiant la clé :
![[attachments/jwt_9.png]]
Puis on le colle dans **Burp**. On renvoie la requête, et bingo !
![[attachments/jwt_10.png]]

Vous pouvez valider le challenge avec le flag `flag{JwT_1s_N0t_S0_@S3cur3}`.