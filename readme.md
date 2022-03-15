
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
![image](https://user-images.githubusercontent.com/25905935/158331153-4194d95f-e968-41f7-b53c-a9355a2a8539.png)
![image](https://user-images.githubusercontent.com/25905935/158331229-b2e85432-c931-4753-b2d0-aa3c4973ab78.png)
![image](https://user-images.githubusercontent.com/25905935/158331386-baf575b4-bed7-4d15-a9de-4639c40d1691.png)
![image](https://user-images.githubusercontent.com/25905935/158331483-2d458dc4-e859-4772-8f0f-a370f60ef615.png)


	
