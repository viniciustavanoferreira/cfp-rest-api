# controle_financeiro_pessoal ~ RESTful API ~ PHP SLIM and Composer

## Main objective

RESTful APIs to support the backend of a new flutter project called "Controle Financeiro Pessoal", where exist some routes
to handle all HTTP requests accordingly in order to manipulate the MySQL database.


## Configuration of the virtual host - XAMPP project (assuming that XAMPP was installed using the C driver)

Access the following path:
    C:\xampp\apache\conf\extra\httpd-vhosts.conf
Uncomment: 
	NameVirtualHost *:80
Insert: 
```xml
    <VirtualHost *:80>
        DocumentRoot "C:\xampp\htdocs\controle_financeiro_pessoal"
        ServerName cfp
      <Directory "C:\xampp\htdocs\controle_financeiro_pessoal">
        Order allow,deny
        Allow from all
      </Directory>
    </VirtualHost>
```


## Composer - dependency manager

Go to the root project directory (controle_financeiro_pessoal) and use the following commands:

composer require slim/slim:4.0.0

composer require slim/psr7


## Creating a simple index.php

Use index.php and .htaccess files.
