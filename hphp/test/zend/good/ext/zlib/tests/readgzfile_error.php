<?php


$filename = dirname(__FILE__)."/004.txt.gz";
$use_include_path = false;
$extra_arg = 'nothing'; 

try { var_dump(readgzfile( $filename, $use_include_path, $extra_arg ) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }

try { var_dump(readgzfile(  ) ); } catch (Exception $e) { echo "\n".'Warning: '.$e->getMessage().' in '.__FILE__.' on line '.__LINE__."\n"; }


echo "===DONE===\n";
