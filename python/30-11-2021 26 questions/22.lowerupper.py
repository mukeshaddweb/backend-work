str1 = "PyNaTive"
resultstr = ""
list2 = []
list1 = []
for i in str1:
    if(i.isupper()):
        list2.append(i)
    else:
        list1.append(i)

lower = (resultstr.join(list1))
upper = (resultstr.join(list2))

result = lower+upper
print (result)
