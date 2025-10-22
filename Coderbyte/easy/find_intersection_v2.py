def FindIntersection(strArr):
    
  liste1 = map(int, strArr[0].split(', '))
  liste2 = map(int, strArr[1].split(', '))

  interArr = sorted(set(liste1) & set(liste2))

  return ",".join(map(str, interArr)) if interArr else "False"

# keep this function call here 
print(FindIntersection(input()))  


