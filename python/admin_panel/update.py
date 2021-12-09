#!/usr/bin/python3
import pymysql
import cgi,cgitb

# from pymysql.cursors import Cursor
cgitb.enable()
form = cgi.FieldStorage()

db = pymysql.connect(host = 'localhost', user="root", password="", database='PySchool')

cursor= db.cursor()

student_id = form.getvalue('id')
# print(student_id)
# print(form.getvalue('id'))
cursor.execute("select * from students where student_id=%s"%(student_id))

data = cursor.fetchone()

# for row in data:
student_name = data[1]
student_email = data[2]
student_branch = data[3]
student_password = data[4]

print("Content-type:text/html\r\n\r\n");
print("<html>")
print("<head>")
print("<title>dashboard</title>")
print("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print("</head>")
print("<body>")
print("<a href='dashboard.py' class='btn btn-primary mx-5 my-3'>Dashboard</a>")
print("<a href='login.html' class='btn btn-primary mx-5 my-3'>logout</a>")
print("<h1 class='text-center mb-2'>Student id: %s</h1>"%(student_id))

print("<div class='container bg-info py-3 px-5 border rounded' style='width: 60%;'>")

print('<form action="updateDb.py" method="post">')

print('<div class="form-group">')
print('<label for="exampleInputEmail1" class="mt-3">Student Id</label>')
print('<input type="text" name="u_student_id" value="%s" class="form-control" required>'%(student_id))
        
print('<div class="form-group">')
print('<label for="exampleInputEmail1" class="mt-3">Student Name</label>')
print('<input type="text" name="u_student_name" value="%s" class="form-control"  required>'%(student_name))
print('</div>')
print('<div class="form-group">')
print('<label for="exampleInputEmail1" class="mt-3">Student Email</label>')
print('<input type="email" name="u_student_email" value="%s" class="form-control" required>'%(student_email))
print('</div>')
print('<div class="form-group">')
print('<label for="exampleInputEmail1" class="mt-3">Student Branch</label>')
print('<input type="text" name="u_student_branch" value="%s" class="form-control" required>'%(student_branch))
print('</div>')
print('<div class="form-group">')
print('<label for="exampleInputPassword1" class="mt-3">Password</label>')
print('<input type="password" name="u_student_password" value="%s" class="form-control" required>'%(student_password))
print('</div>')
print('<input type="submit" name="update" value="update" class="btn btn-primary mt-3">')
print('</form>')
print("</div>")

print('</tbody>')
print('</table>')

print('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>')
print("</body>")
print("</html>")

# if(form.getvalue('update')):
#     updateForm = cgi.FieldStorage
#     cursorU = db.cursor()
#     student_id = form.getvalue('u_student_id')
#     update_student_name = updateForm.getvalue('u_student_name')
#     update_student_email = updateForm.getvalue('u_student_email')
#     update_student_branch = updateForm.getvalue('u_student_branch')
#     update_student_password = updateForm.getvalue('u_student_password')

#     cursorU.execute("update students set student_name=%s, student_email=%s, student_branch=%s, student_password=%s where student_id=%s"%(update_student_name, update_student_email, update_student_branch, update_student_password, student_id))

#     db.commit()
#     print("data updated")





