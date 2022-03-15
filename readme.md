
**************Database schema setup to run application ************

step 1)  create database first
 
    mysql >> create database dbpayroll;
    mysql >> use dbpayroll;
	
step 2) copy dbpayroll.sql into mysql bin folder
	      run db file into mysql prompt
	
	mysql >> source dbpayroll.sql
	

************* Application setup *********************************

step 0)

	 a) uzip the source code on any location
	 b) open source code on vs code 
	 c) set mysql database username and paswword in .env file
	 d) run the below command

setp 1)  run composer command

	 >> composer install
  
setp 2) migrate database

	>> php artisan migrate
	
setp 3) run application

	>> php artisan serve
	
****************************************************************
    
![image](https://user-images.githubusercontent.com/25905935/158330672-4f73dc34-cd67-4cdb-8fbe-4d8691ca09d4.png)

	
