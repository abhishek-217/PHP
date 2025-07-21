

<?php
$num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($num as $i) {
    echo "This is a for-each loop. Number: $i <br>";
}

?>

<!-- Multidimention array -->

<?php
    $students = array(
        "id01" => array("name" => "John", "age" => 20),
        "id02" => array("name" => "Jane", "age" => 22),
        "id03" => array("name" => "Doe", "age" => 21)
    );

    foreach ($students as $id => $info) {
        foreach ($info as $age => $name) {
            echo "ID: $id, Name: $name, Age: $age <br>";
        }
    }
