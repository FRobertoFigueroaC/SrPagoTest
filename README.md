
## Backend API

### Sr Pago prueba de conocimientos (Código V1)

Para el funcionamiento de este proyecto son necesarios:
- **Tener un ambiente capaz de ejecutar una aplicación Laravel**
- **Tener un ambiente capaz de almacenar una  base de datos MySQL**
- **Tener una versión de PHP ^7.3|^8.0**


### Instrucciones

- Clonar el repositorio
- Instalar las dependencias con `composer install` 
- Duplicar el  **_.env.example_** renombrandolo  **_.env_**
- Crear una base de datos dentro de MySQL con el nombre  **_srpago_**
- Cotejar la conexión de la base de datosn en   **_.env_**
- La configuración propuesta es la siguiente:
`DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=srpago
  DB_USERNAME=root
  DB_PASSWORD=`
-
- Correr las migraciones con el comando `php artisan migrate`
- Poblar la base de datos con el siguiente comando  `php artisan generate:setDatabase`
- Levantar el servidor de la aplicación con `php artisan serve`
- La aplicación será ejecutada en  `http://127.0.0.1:8000`


### Consideraciones

- Si desea cambiar el nombre de la base de datos  **_srpago_** por algun otro deberá especificar lo en el campo `DB_DATABASE` del archivo   **_.env_**

