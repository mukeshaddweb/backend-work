#!/usr/bin/python3
import pymysql
import cgi,cgitb

# from pymysql.cursors import Cursor
cgitb.enable()
form = cgi.FieldStorage()
student_id = form.getvalue('id')

db = pymysql.connect(host = 'localhost', user="root", password="", database='PySchool')

cursor= db.cursor()


print("Content-type:text/html\r\n\r\n");
print("<html>")
print("<head>")
print("<title>dashboard</title>")
print("<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>")
print("</head>")
print("<body>")
# print("<p>hello</p>")

try:
    # print("<h1 class='text-center my-5'>student id : %s</h1>"%(student_id))
    cursor.execute("DELETE FROM students WHERE student_id=%s"%(student_id))
    db.commit()

    redirectURL = "http://localhost/python/admin_panel/dashboard.py"
    print('<html>')
    print('  <head>')
    print('    <meta http-equiv="refresh" content="0;url='+str(redirectURL)+'" />') 
    print('  </head>')
    print('</html>')

    # data = cursor.fetchone()

    # if(data):
    print("<a href='dashboard.py' class='btn btn-primary mx-5 my-5'>Dashboard</a>")
    print("<a href='login.html' class='btn btn-primary mx-5 my-5'>logout</a>")
    print("<h1 class='text-center my-5'>Deleted Successfully</h1>")
    # else:
    # print("<h1 class='text-center my-5'>Login failed</h1>")
except:
    
    # Rollback in case there is any error
    db.rollback()
    print("error in deleting")

print('<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>')
print("</body>")
print("</html>")
db.close()    







