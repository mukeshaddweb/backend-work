base = 2
exp = 5

def exponent(base, exp):
    result = 1
    while(exp>0):
        result = result*base
        exp = exp-1
    return result

print(exponent(2,5))