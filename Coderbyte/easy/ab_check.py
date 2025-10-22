def ABCheck(strParam):

  for i, ch in enumerate(strParam) : 
    if i + 4 < len(strParam):
      if (ch == "a" and strParam[i + 4] == "b") or (ch =="b" and strParam[i + 4] == "a" ) :
        return "true"
  
  return "false "

# keep this function call here 
print(ABCheck(input()))