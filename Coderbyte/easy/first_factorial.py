def FirstFactorial(num):

  factorial = 1

  for i in range(num, 0, -1) :
    factorial *= i
  # code goes here
  return factorial

# keep this function call here 
print(FirstFactorial(input()))