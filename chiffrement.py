liste=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','t','u','v','w'','x','y,'z']

for x in range(len(liste)):
	liste.append(lsite[x])

message = input('Entrez votre message : ')
clef = int(input('Entrez votre clef :'))

def chiffrage_lettre(lettre, liste, clef):
	for i in range