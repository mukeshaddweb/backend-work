#!/usr/bin/python3
import pymysql
import cgi, cgitb
cgitb.enable()



form = cgi.FieldStorage()
student_id = form.getvalue('student_id')
student_name = form.getvalue('student_name')
student_email = form.getvalue('student_email')
student_branch = form.getvalue('student_branch')
student_password = form.getvalue('student_password')

db =pymysql.connect(host="localhost", user="root", password="",database="PySchool")

cursor = db.cursor()
print("Content-type:text/html\r\n\r\n");
print("<html>")
print("<head>")
print("<title>dashboard</title>")
print("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print("</head>")
print("<body>")
try:
    cursor.execute("insert into students(student_id,student_name,student_email,student_branch,student_password) values('%s','%s','%s','%s','%s')"%(student_id,student_name,student_email,student_branch,student_password))
    db.commit()
    print("<a href='login.html' class='btn btn-primary mx-5 my-3'>Login</a>")
    print("<h1 class='text-center mt-5'>Sign up successfull</h1>")

except:
    db.rollback()
    print("error in inserting")
print('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>')
print("</body>")
print("</html>")

db.close()
