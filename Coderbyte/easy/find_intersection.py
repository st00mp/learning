def FindIntersection(strArr):

  num1 = [int(x) for x in strArr[0].split(',')]
  num2 = [int(y) for y in strArr[1].split(',')]

  inter = sorted(set(num1) & set(num2))
    
  if inter :
    return ",".join(map(str, inter))
  else :
    return "false"

# keep this function call here 
print(FindIntersection(input()))