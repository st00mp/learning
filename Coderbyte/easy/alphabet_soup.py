# def AlphabetSoup(strParam):
#     unicodes = [ord(ch) for ch in strParam]      # liste des codes
#     sorted_codes = sorted(unicodes)              # tri des codes
#     sorted_chars = [chr(code) for code in sorted_codes]  # retour en lettres
#     return "".join(sorted_chars)

# # keep this function call here 
# print(AlphabetSoup(input()))

# Beaucoup plus simple : 

def AlphabetSoup(strParam):

    return "".join(sorted(strParam))

print(AlphabetSoup(input()))