X<?php
// Autor: Victor Teleanu <alexteleanu9@gmail.com>
require('HolaMundo.php');

print('Introduce tu nombre:');
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
