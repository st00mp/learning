def TimeConvert(num):
    hours = num // 60
    minutes = num % 60
    return f"{hours}:{minutes}"

# keep this function call here
print(TimeConvert(input()))

# Utiliser divmod(a, b) pour obtenir le couple (a // b, a % b) en une seule opération :

# h, m = divmod(num, 60)
# return f"{h}:{m}"