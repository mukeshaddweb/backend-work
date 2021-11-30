list1 = [10, 20, 30, 40]
list2 = [100, 200, 300, 400]

# for i in range(len(list1)):
#     lastIndex = len(list1)
#     len(list1)
#     print(list1[i])
#     print(" ")
#     print(list2[((lastIndex + 1)-i)])
#     print("\n")

i=0
while(i<len(list1)):
    print(str(list1[i])+" "+str(list2[((len(list1)-1)-i)]))
    i = i+1
