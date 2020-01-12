# Created by jeff

Note: In connect.php read the comments to properly configure the connection if hosting online!
The credentials on top are to connect to a local server if HOSTED OFFLINE ON YOUR OWN SERVER.
The bottom credentials are to connect to the server if HOSTED ONLINE ON AZURE. This method is
commented out by default as the Azure server has not been functioning as intended!

<h2>To host on your own server:</h2>
Copy the files to your servers htdocs or www folder on your local machine.
The connect.php file is already configured to be viewed on a local machine via localhost.

username 'root'
password '' (blank)

<h2>SQL Setup</h2>
This part is necessary because the application is being hosted locally and must be created first,
if it were online the database would be created this step would not be necessary.

All necessary sql files are included in the folder 'MySQL Data'

On your local server, open phpMyAdmin to run MySQL queries.
To create the database, first run the script from '1_create_database.sql'
  CREATE DATABASE localdb;
  
To create tables AND insert test data, run all the script from '1_insert_all.sql'

# OR

To create tables and insert data SEPARATELY, first run the script from 1_create_database.sql and
then run the script from file '2_generate_tables.sql'and then scripts from '3_generate_data.sql'

Once the database has been created, view the application using index.php
