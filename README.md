# phpproject for php/sql class
# created by jeff

Note: In connect.php read the comments to properly configure the connection.
the credentials on top are to connect to a local server if HOSTED OFFLINE ON YOUR OWN SERVER.
The bottom credentials are to connect to the server if HOSTED ONLINE ON AZURE. This method is
commented out by default as the Azure server has not been functioning as intended!

If hosting on your own server:
username 'root'
password '' (blank)

All necessary sql files are included in the folder 'MySQL Data'
To create the database, first run the script from '1_create_database.sql'
To create tables AND insert test data, run all the script from '1_insert_all.sql'

OR

To create tables and insert data SEPARATELY, run the script from file '2_generate_tables.sql'
and then scripts from '3_generate_data.sql'
