def QuestionsMarks(strParam):

  # Déclaration de la liste
  digits = []

  # Itérations pour récupérer tous les chiffres et leur position
  for i, ch in enumerate(strParam) :
    if ch.isdigit() : 
      digits.append((int(ch), i))

  # Initialisation simple d'un Booléen
  found = False

  # On parcours toutes les paires de valeurs dans la liste digits
  for i in range(len(digits) - 1) : # len() compte le nbr total des éléments alors que l'index lui commence à 0; on fait -1 pour ne pas sortir du tableau et générer une erreur
    
    # Destructuration du tulpe pour récupérer les valeurs et travailler dessus 
    val1, pos1 = digits[i]
    val2, pos2 = digits[i + 1]

    # On vérifie si la somme des paires de chiffres consécutifs dans la liste valent 10
    if val1 + val2 == 10 :

      start, end = sorted((pos1, pos2))
      # On extrait ce qu'il y a entre les 2 (pos1 + 1 pour ne pas prendre le chiffre même, et pos2 car dans liste[a:b], b est non exclusif) 
      between = strParam[start + 1 :  end] #Rappel, dans list[a : b], a est inclusif et b est exclusif
      
      if between.count('?') != 3 : 
        return "false"
      else : 
        found = True

  return "true" if found else "false"

# keep this function call here 
print(QuestionsMarks(input()))