from itertools import combinations

# def ArrayAddition(arr) : 

    # target = max(arr)
    # arr.remove(target)

    # def dfs(i, current_sum):
    #     if current_sum == target :
    #         return True
        
    #     if i >= len(arr) :
    #         return False

    #     take_it = dfs(i + 1, current_sum + arr[i])
    #     skip_it = dfs(i + 1, current_sum)

    #     return take_it or skip_it
    
    # return True if dfs(0,0) else False

# print(ArrayAddition(input()))

def array_addition(arr):
    # On isole le plus grand élément
    target = max(arr)
    others = [n for n in arr if n != target]

    # Pour chaque taille de combinaison possible
    for r in range(1, len(others) + 1):
        for combo in combinations(others, r):
            if sum(combo) == target:
                return "true"

    return "false"

# Test
print(array_addition([4, 6, 23, 10, 1, 3]))  # 👉 "true"


