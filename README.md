# Simple Demo de PHP y BDD

###### Requisitos 

- Tener configurado y encendido un servidor: LAMP o XAMP
- un IDE para editar los archivos: Sublime Text, VSCode, Atom

### Configuración


###### Crear Base de Datos

Primero crea la base de datos con el archivo bdd.sql, el cual tiene solo una base de datos con una única tabla y un esquema muy simple. 

```sql
    CREATE DATABASE AlumnosDemo;

    USE AlumnosDemo;

    CREATE TABLE CareerTableDemo(
	    id_career INT not null auto_increment PRIMARY KEY,
	    career VARCHAR(50)
    );



    INSERT INTO 
        CareerTableDemo(career) 
    VALUES 
        ('Ing. Sistemas Computacionales'), 
        ('Ing. Informatica'), 
        ('Ing. Civil'),
        ('Contador Público'),
        ('Lic. en Administración');
```


###### Configurar el enviroment

Después de esto configuramos el archivo enviroment.php donde están nuestras variables.
```php
    $usr = 'REPLACE_FOR_YOUR_USERNAME';
    $pwd = 'REPLACE_FOR_YOUR_PASSWORD';
    $table = 'AlumnosDemo';
    $host = 'localhost';
    $status = 'No avaible connection!';
```


###### Baja la repo

Nosotros solo tenemos que bajar este repositorio dentro de la carpeta HTML, y cuando nuestro server lamp esté encendido podremos verlo desde: http://localhost/DemoPHP/
```bash
    cd /var/www/html
```