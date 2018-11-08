# PHP-login
Una aplicación web de inicio de sesión simple con SESSIONS y Password hash con PHP, MySQL, phpMyAdmin y Bootstrap.

¿Cómo usarlo?

1. Abra el panel de control de XAMPP, laragon, etc.
2. Haga clic en phpMyAdmin en el menú.
3. Crea una nueva base de datos "PHPLogin".
4. Cree la tabla "usuarios" con 4 campos (Id, Nombre, Correo electrónico, Contraseña).
5. Descargar o clonar este repositorio.
6. Coloque la carpeta "PHPLogin" dentro de su carpeta "xampp","www", etc.
7. Abra su navegador y escriba "localhost:8080 / PHPLogin" "El puerto que este usando en mi caso es 8080".
8. Ingrese la información de la cuenta y presione el botón "Crear mi cuenta".
9. Compruebe si la información. es correcto en la base de datos y si la contraseña es un hash.
10. Vuelve a tu navegador y haz clic en "Iniciar sesión"
11. Ingrese el correo electrónico y la contraseña que usa cuando creó su cuenta y haga clic en iniciar sesión.
12. Si todo está bien, inicia sesión y se crea una SESIÓN de 1 minuto.
