sample_dict = {
"name": "Kelly",
"age": 25,
"salary": 8000,
"city": "New york"}

keys = ["name","salary"]
values=[]
values.append(sample_dict.get('name'))
values.append(sample_dict.get('salary'))

print(values)
dict1 = {}

# dict1 = dict.keys(keys, sample_dict.get(keys))
# print (dict1)
for i in range(len(keys)):
    dict1[keys[i]] = values[i]

print(dict1)

