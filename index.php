<?php
\$host = 'mysql';
\$user = 'root';
\$pass = 'rootpassword';
\$dbname = 'hola_mundo_db';

\$conn = new mysqli(\$host, \$user, \$pass, \$dbname);

if (\$conn->connect_error) {
    die("Conexión fallida: " . \$conn->connect_error);
}

echo "Hola Mundo desde PHP con conexión a MySQL!";
?>
