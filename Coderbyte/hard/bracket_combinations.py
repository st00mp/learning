# Solution 1 — Récursion (piles d’appels) + génération des chemins

def BracketCombinations(n):
    # Compteur global des combinaisons valides rencontrées
    res = 0

    def dfs(opened, closed, path=""):
        """
        opened : nb de '(' déjà placées
        closed : nb de ')' déjà placées
        path   : la chaîne construite jusqu'ici (pour visualiser/apprendre)
        La pile : chaque appel dfs est un "niveau" de plus ; au return on remonte (LIFO).
        """
        nonlocal res 
        # "nonlocal res" permet à dfs() de modifier la variable res
        # définie dans la fonction parente BracketCombinations().
        # Sans ça, Python créerait une variable locale et lèverait une erreur.

        # Cas terminal : on a placé n ouvertures ET n fermetures → combinaison complète
        if opened == n and closed == n:
            print("✅", path)      # utile pour apprendre (à commenter sur les juges en ligne)
            res += 1              # on compte 1 combinaison
            return                # on remonte d'un cran (retour dans l'appelant)

        # Branche 1 : on peut encore ouvrir si on n'a pas atteint n
        if opened < n:
            dfs(opened + 1, closed, path + "(")   # on “plonge” d’un niveau avec '('

        # Branche 2 : on peut fermer si on n’a pas fermé plus qu’on a ouvert
        if closed < opened:
            dfs(opened, closed + 1, path + ")")   # on “plonge” d’un niveau avec ')'

    dfs(0, 0)    # point de départ : rien placé
    return res

# Exemple interactif
print(BracketCombinations(int(input())))

# Solution 2 — Formule des nombres de Catalan (factorielle)

import math

def BracketCombinations(num):
    # Les plateformes fournissent souvent une string → on convertit
    n = int(num)

    # Cn = (2n)! / ((n+1)! * n!)
    # En Python, les entiers sont à précision arbitraire → pas de débordement
    return math.factorial(2*n) // (math.factorial(n+1) * math.factorial(n))

print(BracketCombinations(input()))


# Solution 3 - Catalan version courte en utilisant math.comb

import math

def BracketCombinations(num):
    n = int(num)
    # Identité équivalente : Cn = comb(2n, n) / (n+1)
    # On reste en entier avec // car Cn est entier
    return math.comb(2*n, n) // (n + 1)

print(BracketCombinations(input()))