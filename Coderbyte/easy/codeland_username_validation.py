def CodelandUsernameValidation(strParam):

    # Vérifier le nombre de caractères de l'argument
    # if len(strParam) > 4 and len(strParam) < 26 :
    if not (4 <= len(strParam) <= 25) :
        return "false"

    # Vérifier que la première lettre de l'argument est une lettre
    if not strParam[0].isalpha() : 
        return "false"

    # Vérifier que l'argument ne contient que des lettres, chiffres ou caractères "_"
    for ch in strParam :
        if not (ch.isalpha() or ch.isdigit() or ch == '_') :
            return "false"

    # Vérifier que le dernier caractère de l'argument n'est pas un "_"
    if strParam[-1] == "_" :
        return "false"

    return "true"

# return strParam

# keep this function call here 
print(CodelandUsernameValidation(input()))  