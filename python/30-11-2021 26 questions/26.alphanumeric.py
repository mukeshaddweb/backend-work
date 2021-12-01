str1 = "Emma25 is Data scientist50 and AI Expert"
list1 = str1.split()
for l in list1:
    if(not(l.isalpha())):
        print(l)