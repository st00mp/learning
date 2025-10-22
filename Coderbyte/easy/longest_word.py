def LongestWord(sen):
    words = sen.split()  # Découpe la phrase en mots (sur espaces)
    longest_word = ""

    for w in words:
        # On garde uniquement lettres et chiffres
        clean_word = "".join(ch for ch in w if ch.isalnum())
        if len(clean_word) > len(longest_word):
            longest_word = clean_word

    return longest_word

# keep this function call here
print(LongestWord(input()))