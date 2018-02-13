#!C:\Python27\python.exe

print "Content-Type:text/html\n\n"
import cgi,cgitb
import os,sys
import MySQLdb
import smssender
form=cgi.FieldStorage()
#name=form.getvalue('name')
#fathername=form.getvalue('fathername')
#print fathername
#paddress=form.getvalue('paddress')
email=form.getvalue('email')
#print email
#sex=form.getvalue('sex')
#print gender


#password=form.getvalue('password')

contactno=form.getvalue('contactno')
message=form.getvalue('message')
#print contactno
#print password
db=MySQLdb.connect("127.0.0.1","root","","codes",3306)
#print "connected"
cur=db.cursor()
query="insert into fogot values(%s,%s,%s)"

args=email,contactno,message
cur.execute(query,args)

db.commit()
db.close()
smssender.sendsms(contactno,'We will contact you soon :- Team codestorm')
print"<script>alert('Your request is taken thank you.');window.location.href='fbtest.html';</script>"
