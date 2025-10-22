def ArithGeo(arr):

  if len(arr) < 2 : 
    return -1
  
  diff = arr[1] - arr[0]
  ratio = arr[1] / arr[0]

  is_arith = all(arr[i] - arr[i-1] == diff for i in range(1, len(arr))) 
  is_geo = all(arr[i] / arr[i-1] == ratio for i in range(1, len(arr))) 

  if is_arith :
    return "Arithmetic"
  elif is_geo : 
    return "Geometric"
  else :
    return -1

# keep this function call here 
print(ArithGeo(input()))