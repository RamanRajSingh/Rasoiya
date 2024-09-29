#!/usr/bin/env python

print("Content-type: text/html\n")  # Required HTTP header

# Get the form data from the standard input
import cgi
form = cgi.FieldStorage()

# Extract username and password from the form data
username = form.getvalue('username')
password = form.getvalue('password')

# Process the data, for example, store it in a database
# Your Python code here...

# Generate HTML response
print("<html>")
print("<head><title>Form Submission</title></head>")
print("<body>")
print("<h1>Form Submission</h1>")
print("<p>Username: {}</p>".format(username))
print("<p>Password: {}</p>".format(password))
print("</body>")
print("</html>")
