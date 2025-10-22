def VowelCount(strParam):

  count = 0

  for ch in strParam.lower() :
    if ch in "aeiou" :
      count += 1
  
  return count

# keep this function call here 
print(VowelCount(input()))