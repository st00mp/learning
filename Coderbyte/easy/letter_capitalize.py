def LetterCapitalize(strParam):

    words = strParam.split(" ")
    capitalized_words = []
    newStringParam = ""

    for word in words : 
        capitalized_word = word.capitalize()
        capitalized_words.append(capitalized_word)
    
    newStringParam = " ".join(capitalized_words)

    return newStringParam

# keep this function call here 
print(LetterCapitalize(input()))