s1 = "Abc"
s2 = "Xyz"
list1 =[]
result = ""

i = 0
while(i<len(s1)):
    list1.append(s1[i])
    list1.append(s2[(len(s1)-1)-i])
    i = i+1

print(result.join(list1)) 