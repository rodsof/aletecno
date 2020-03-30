## Pasos para correr el proyecto

1) te paras en la carpeta silmar
2) composer install
3) cp .env.silmar .env 
    3.1) php artisan migrate (Si no levantaste la BD) 
    3.2) php artisan db:seed --class=DefaultSeeder
    3.3) php artisan db:seed --class=UserSeeder (Esto es para agregar el usuario de testing)
4) php artisan key:generate && php artisan serve


## GIT interacciones

## Pasos para subir 

## Si hay un cambio de otra persona

1) Stash (Oculta tus cambios)
2) Pull (Baja los cambios de la otra persona)
3) Pop (Levanta tus cambios)
    3.1) Si hay conflictos los resolves archivo por archivo
4) Stage all changes 
5) Agregar comentario
5) Push (Sube tus cambios)

## Si no hay cambios de otra persona

1) Stage all changes
2) Agregar comentario
<<<<<<< Updated upstream
3) Push (Sube tus cambios)

## Pasos para bajar

## Si tenes cambios propios

1) Stash (Oculta tus cambios)
2) Pull (Baja los cambios de la otra persona)
3) Pop --> Resolves conflictos de archivos. (Levanta tus cambios)

## Si no tenes cambios propios

1) Pull (Baja los cambios de la otra persona)


## Mysql + Adminer con Docker

## Pasos de instalacion en linux

1) instalar

sudo curl -L "https://github.com/docker/compose/releases/download/1.24.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

2) Cambiar permisos

sudo chmod +x /usr/local/bin/docker-compose

## Pasos para runear en local

1) pararse en la ruta del proyecto, en este caso 'silmar'
2) cd silmar-db 
3) sudo docker-compose -f db.yml up -d

IMPORTANTE! Si es la primera vez que instalas o hay cambios en la bd

4) entra a http://localhost:8083/ e importa la bd 
    motor de base de datos:mysql    
    servidor:db
    usuario:root
    contraseña:toor
    base de datos:silmar
=======
3) Push
>>>>>>> Stashed changes
#   a l e t e c n o  
 #   a l e t e c n o  
 