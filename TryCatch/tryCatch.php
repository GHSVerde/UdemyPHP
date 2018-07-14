<?php
try {

    throw new Exception("Bad Request", 400);
} catch(Exception $e) {
    echo json_encode(array(
       "message" => $e->getMessage(),
       "line"    => $e->getLine(),
       "code"    => $e->getCode(),
       "file"    => $e->getFile()
    ));
}
?>