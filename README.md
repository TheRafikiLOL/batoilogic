# Aplicación backoffice

## Instalación en local

### Para realizar la instalación del proyecto tenemos que seguir los siguientes pasos

<p>El primer paso es tener una maquina con vagrant</p>

<p>Haremos un git clone de el repositorio</p>

> git clone https://github.com/TheRafikiLOL/batoilogic.git

<p>Seguidamente haremos una copia del .env.example</p>

> cp .env.example .env

<p>Después instalaremos las dependencias PHP</p>

> composer install

<p>Generaremos una nueva clave para nuestro archivo .env</p>

> php artisan key:generate

<p>Seguidamente intalaremos npm</p>

> npm install

<p>Serviremos el proyecto</p>

> serve batoilogic.my /home/vagrant/code/batoilogic/public

<p>Y para finalizar reiniciaremos nginx</p>

> sudo service nginx restart

***

## Enlace para acceder a la aplicación desplegada

[Aplicación backoffice](http://backoffice.g03.batoilogic.es/)

***

## Usuario para el despliegue

<p>nombre: deploy-backoffice</p>
<p>contraseña: 1234</p>
