<?php
if (isset($b)) {
    echo '$b existe.';
}else echo '$b não existe ou é nula.';

$b = null;

if (isset($b)) {
    echo '$b existe';
}else echo '$b não existe ou é nula.';
?>