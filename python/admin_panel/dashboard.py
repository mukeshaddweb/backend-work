#!/usr/bin/python3

import pymysql
import cgi,cgitb
cgitb.enable()

db= pymysql.connect(host= "localhost", user="root",password="",database="PySchool")

cursor = db.cursor()

cursor.execute("select * from students")
data = cursor.fetchall()

print("Content-type:text/html\r\n\r\n");
print("<html>")
print("<head>")
print("<title>dashboard</title>")
print("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print("</head>")
print("<body>")
print("<a href='insert.html' class='btn btn-primary mx-5 my-3'>Insert</a>")
print("<a href='login.html' class='btn btn-primary mx-5 my-3'>logout</a>")
print("<h1 class='text-center mb-2 text-primary bg-light py-3'>Student  Information</h1>")
print("<div class='container' style='width: 80%;'>")
print('<table class="table mx-4">')
print('<thead>')
print('<tr style="line-height: 3;" class="">')
print('<th scope="col">ID</th>')
print('<th scope="col">Name</th>')
print('<th scope="col">Email</th>')
print('<th scope="col">Branch</th>')
print('<th scope="col">Password</th>')
print('</tr>')
print('</thead>')
print('<tbody>')
for row in data:
    student_id = row[0]
    student_name = row[1]
    student_email = row[2]
    student_branch = row[3]
    student_password = row[4]

    print('<tr style="line-height: 3;" class="bg-info text-dark">')
    print('<th scope="row" class="mx-3">%s</th>'%(student_id))
    print('<td>%s</td>'%(student_name))
    print('<td>%s</td>'%(student_email))
    print('<td>%s</td>'%(student_branch))
    print('<td>%s</td>'%(student_password))
    print('<td><a class="text-white" href=update.py?id=%s>Update</a></td>'%(student_id))
    print('<td><a class="text-white" href=delete.py?id=%s>Delete</a></td>'%(student_id))
    print('</tr>')
    
print('</tbody>')
print('</table>')
print('</div>')

print('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>')
print("</body>")
print("</html>")