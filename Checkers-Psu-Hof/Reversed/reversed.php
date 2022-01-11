<?php
include reversed.html;

function write(){
    require_once('../js/mongodb.php');
    $db = new MongoData;

    $write = $db -> check([
'name'=> $_POST['name'],
'züge'=> $_POST['zuege']
]);
if ($write){
header("Location: reversed.html");}
}
?>
