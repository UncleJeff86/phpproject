# Created by jeff

The credentials on top are to connect to a local server if HOSTED OFFLINE ON YOUR OWN SERVER, but are commented out by default.
The bottom credentials are to connect to the server as HOSTED ON EPIZY, and are set by default.

The web app is now hosted online at:
http://phpproject2329.epizy.com/working/


If you wish to host on your own server, follow the instructions below!

<h2>To host on your own server:</h2>
Copy the files to your servers htdocs or www folder on your local machine.
The connect.php file is already configured to be viewed on a local machine via localhost, however
is commented out by default

username 'root'
password '' (blank)

<h2>SQL Setup</h2>
This part is necessary because the application is being hosted locally and must be created first,
if it were online the database would be created this step would not be necessary.
All necessary sql files are included in the folder 'MySQL Data'

On your local server, open phpMyAdmin to run MySQL queries.

To create the database: 
First run the script from '1_create_database.sql'
   
To create tables:
Run the script from the file 2_generate_tables.sql

To insert test data:
run the script from '3_generate_data.sql'


Once the database has been created, view the application using index.php
