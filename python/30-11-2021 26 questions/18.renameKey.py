sample_dict = {
"name": "Kelly",
"age":25,
"salary": 8000,
"city": "New york"
}

sample_dict['location'] = sample_dict.get('city')
print(sample_dict)
# sample_dict.clear('city')
del sample_dict["city"]
print(sample_dict)