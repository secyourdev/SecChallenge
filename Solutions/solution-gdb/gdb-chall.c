#include <stdio.h>
#include <string.h>

int main() {
   char password[20];
   printf("Entrez votre mot de passe : ");
   scanf("%s", password);
   
   // Comparer les 11 premiers caractères du mot entrée avec le mot de passe
   if (password[0] == 'S') {
      if (password[1] == 'Y') {
         if (password[2] == 'D') {
            if (password[3] == '2') {
               if (password[4] == '0') {
                  if (password[5] == '2') {
                     if (password[6] == '3') {
                        printf("Bravo, vous avez réussi le challenge de GDB SYD-ACADEMY !\n");
                        return 0;
                     }
                  }
               }
            }
         }
      }
   }
   
   printf("Mot de passe incorrect\n");
   return 0;
}

