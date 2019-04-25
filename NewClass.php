<?php

public $data =[];

class NewClass {

public function __construct() {

echo 'constructor called';

}

puclic function NewFunction (array $collection) : array {

foreach($collection as $key => $val) {

echo $val;

}
}
}

?>
