<?php
$q = $_REQUEST["q"];
$selectopen = "<select name='packaging' class='form-control form-control-sm' id='exampleFormControlSelect1'>";
$selectclose = "</select>";
$selectrequired = "<select name='packaging' class='form-control form-control-sm' id='exampleFormControlSelect1' required disabled></select>";
$amplop = "<option value='Amplop'>Amplop</option>";
$bubble = "<option value='Bubble Wrap'>Bubble Wrap</option>";
$kardus = "<option value='Kardus'>Kardus</option>";
$kayu = "<option value='Peti Kayu'>Peti Kayu</option>";
$hint = "";

if($q < 1) {
    echo $selectopen.$amplop.$bubble.$kardus.$kayu.$selectclose;
} else if ($q >= 1 &&  $q < 5) {
    echo $selectopen.$bubble.$kardus.$kayu.$selectclose;
} else if ($q >= 5 &&  $q < 10) {
    echo $selectopen.$kardus.$kayu.$selectclose;
} else if ($q >= 10 && $q <= 50) {
    echo $selectopen.$kayu.$selectclose;
}

echo $hint;
?>