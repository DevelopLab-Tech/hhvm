<?php
function throw_exc() {
  throw new Exception('TEST_EXCEPTION');
}

class Test {

  public function __construct() {
    echo 'Constr' ."\n";
  }

}

try {

  $T =new Test(throw_exc());

} catch( Exception $e) {
  echo 'Exception: ' . $e->getMessage() . "\n";
}
