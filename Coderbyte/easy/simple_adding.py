
# Version avec boucle `for`

def SimpleAdding(num):
    addition = 0
    for i in range(num + 1):
        addition += i
    return addition

# keep this function call here 
print(SimpleAdding(input()))            


# Version recusrsive

def SimpleAdding(num):
    if num == 1:
        return 1
    else:
        return num + SimpleAdding(num - 1)


# Formule de Gauss 

def SimpleAdding(num):
    return num * (num + 1) // 2

    

