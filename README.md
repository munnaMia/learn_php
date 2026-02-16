# learn_php

## Topic i have learn
1. Controller - who receive a req and show the view handle datas
2. View - the page i can say 
3. partials - small page components



## small things
1. die()- kill the exicution like a break for loop
2. $_SERVER - contain the server req informations
3. var_dump() - dump all info about a variable
4. "{$var}" - use double quate to inline a variable
5. PDO::FETCH_ASSOC - here :: this thing known as scope resulation operator underhood a const class property set
6. CONST value are upper case
7. localhost:8080/?id=1 => here a user can send some sql instruction like drop table or like this is known as sql injuction attack so always sanitize user given data
    - like this : http://localhost:8080/?id=3;drop table post
        - "SELECT * FROM post WHERE id = 3; drop table post;" triger this

## mysql 
- sudo mysql -uroot -> access mysql db
- create database myapp -> create a database 
- PDO (php data object) - is use to connect mysql with php.
- DSN(data source name) - PDO accept a dsn like we did on golang