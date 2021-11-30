my_list = [120,324,12,435,120]
my_list2 = [120,324,12,435,1232]
def checkFirstandLast(list1):
    if(list1[0]==list1[len(list1)-1]):
        return True
    else:
        return False

print(checkFirstandLast(my_list))
print(checkFirstandLast(my_list2))