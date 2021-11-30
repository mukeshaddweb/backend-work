str = input("Enter a string")
# fruits = ['banana', 'apple',  'mango']
# for index in range(len(fruits)):
#    print 'Current fruit :', fruits[index]


for index in range(len(str)):
    if(index%2==0):
        print(str[index],' ')