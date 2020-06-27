# connectByDependencyInjection

 Import testdb file from mysqladmin interface.
Open the connect file and on the last line enter the connection information for the server:
$con->connect("hostname", "username", "password", "DataBase name").
 
 Open Postman type your app’s url and:
In the body part, paste the link of the file named api.php.

if you want "POST" must to enter :  {first_name, last_name, age} with the values For new user.
or "GET" without data.
