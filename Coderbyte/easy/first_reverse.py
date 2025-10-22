def FirstReverse(strParam):

  reversedStr = ""

  for i in range(len(strParam) -1, -1, -1) : 
    reversedStr += strParam[i]

  return reversedStr
  # Solution alternative
  # return strParam[::-1]

# keep this function call here 
print(FirstReverse(input()))