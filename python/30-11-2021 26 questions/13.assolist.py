list1 = ["a", "b", ["c", ["d", "e", ["f", "g"], "k"], "l"], "m", "n"]
sub_list = ["h", "i", "j"]

# list1[2][1][2].append(sub_list)
for i in sub_list:
    list1[2][1][2].append(i)
print(list1)