# def ExOh(strParam):

#   x_count = 0
#   o_count = 0

#   for ch in strParam : 
#     if ch == "x" :
#       x_count += 1
#     elif ch == "o" :
#       o_count += 1

#   if x_count == o_count : 
#     return "true"

#   return "false"

# # keep this function call here 
# print(ExOh(input()))

### ______________________________

def ExOh(strParam):

    if strParam.count("x") == strParam.count("o") : 
        return 'true'
    else : 
        return 'false'

print(ExOh(input()))


### ________________________________

def ExOh(strParam):
    strParam = strParam.lower()
    return 'true' if strParam.count("o") == strParam.count("x") else 'false'

print(ExOh(input()))