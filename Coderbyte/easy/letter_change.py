def LetterChanges(s):

    alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z']
    vowels = ['a', 'e', 'i', 'o', 'u']
    res = ""

    for ch in s : 
        # if ch.lower in alphabet : # Plus sur que .isalpha() cf. lettres avec accent etc
        if ch.isalpha() : 
            min_letter = ch.lower()

            if min_letter == "z" : 
                shifted_letter = "a"
            else : 
                pos = alphabet.index(min_letter)
                shifted_letter = alphabet[pos +1]

            if shifted_letter in vowels : 
                shifted_letter = shifted_letter.upper()
            
            res += shifted_letter
        else : 
            res += ch

    return res

print(LetterChanges(input("Entre une phrase : ")))