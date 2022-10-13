<?php
$string = '+84.555.666.777';
$pattern = '/\+[0-9]{2,2}\.[0-9]{3,3}\.[0-9]{3,3}\.[0-9]{3,3}/';
if (preg_match($pattern, $string)) {
echo 'Khớp';
} else {
echo 'Không khớp';
}
?>