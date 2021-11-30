list1 = ["Mike", "", "Emma", "Kelly", "", "Brad"]
# list1.remove("")
# print(list1)
for i in range(list1.count("")):
    list1.remove("")

print(list1)