#!/usr/bin/python3
import pymysql
import cgi, cgitb
cgitb.enable()

form = cgi.FieldStorage()


student_id = form.getvalue('u_student_id')
update_student_name = form.getvalue('u_student_name')
update_student_email = form.getvalue('u_student_email')
update_student_branch = form.getvalue('u_student_branch')
update_student_password = form.getvalue('u_student_password')

db = pymysql.connect(host='localhost', user='root', password='', database='PySchool')

cursor = db.cursor()

print("Content-type:text/html\r\n\r\n");
print("<html>")
print("<head>")
print("<title>dashboard</title>")
print("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print("</head>")
print("<body>")
try:
    cursor.execute("update students set student_name='%s', student_email='%s',student_branch='%s', student_password='%s' where student_id='%s'"%(update_student_name, update_student_email, update_student_branch,update_student_password, student_id))

    db.commit()

    # ...........redirecting..............
    redirectURL = "http://localhost/python/admin_panel/dashboard.py"
    print('<html>')
    print('  <head>')
    print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
    print('  </head>')
    print('</html>')
    
    print("<a href='dashboard.py' class='btn btn-primary mx-5 my-5'>Dashboard</a>")
    print("<a href='login.html' class='btn btn-primary mx-5 my-5'>logout</a>")
    print("<h1 class='text-center mb-2'>Successfully updated</h1>")
except:
    db.rollback()
    print("<h1 class='text-center my-5'>Failed to update</h1>")

print('</body>')
print('</html>')