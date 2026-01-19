<?php
// Verificar que se enviaron los datos por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $edad = $_POST['edad'] ?? '';

    // Validar datos
    if (!empty($email) && !empty($contraseña) && !empty($edad)) {
        echo "Tu email es $email y tu contraseña es $contraseña<br>";
        
        $mensaje_edad = ($edad >= 18) ? "Eres mayor de edad" : "No eres mayor de edad";
        echo $mensaje_edad;
    } else {
        echo "Error, no has introducido todos los datos";
    }
} else {
    echo "Acceso no permitido";
}
?>