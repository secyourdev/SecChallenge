#include <stdio.h>
#include <string.h>

int main() {
   char password[20];
   printf("Entrez votre mot de passe : ");
   scanf("%s", password);
   
   // Comparer les 11 premiers caractères du mot entrée avec le mot de passe
   if (strncmp(password, "SYD-ACADEMY", 11) == 0) {
      printf("Bravo, vous avez réussi l'unité !!!\n");
   }
   else {
      printf("Mot de passe incorrect\n");
   }
   
   return 0;
}

