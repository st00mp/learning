def SimpleSymbols(strParam):

  for i, ch in enumerate(strParam) :
    if ch.isalpha() :
      if i == 0 or i == len(strParam) - 1 :
        return False

      else :  
        if strParam[i - 1] != "+" or strParam[i + 1] != "+" :
          return False 
  
  return True
  
# keep this function call here 
print(SimpleSymbols(input()))