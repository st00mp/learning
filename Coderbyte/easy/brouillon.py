# Afficher les codes ASCII de a à z
# for c in range(ord('a'), ord('z') + 1):
#     print(f"{c} → {chr(c)}")

# Afficher les codes de caractères accentués
for c in range(224, 234):  # de 'à' à 'ê' par exemple
    print(f"{c} → {chr(c)}")

