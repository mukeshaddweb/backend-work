income = 45000

def calculateTax(inc):
    tax = 0
    if(inc >10000):
        if(inc>20000):
            tax = (inc-20000)*0.2 + 1000
            return tax
        else:
            tax=(inc-10000)*0.1
            return tax

print(calculateTax(45000))       