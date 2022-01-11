//PHP Document
<?php
require_once('/../vendor/autoload.php');
class MongoData {
function __construct(){
    $this->db = (new MongoDB\Client ) -> teamd -> ranking;
}
public function insertInto($item=[]){
        if( empty($item)){
        return false;
        }
        $write = $this -> db -> insertOne(
        [
        'name' => $item['name'],
        'züge' => $item['züge'],
	'Bot' => $item['Bot']
        ]);
}
public function update($item=[]){
        if( empty($item)){
        return false;
        }
        $write = $this -> db -> update(
        [
        'name' => $item['name'],
        'züge' => $item['züge'],
	'Bot' => $item['Bot']
        ]);
	}
	public function check($item=[]){
	if( empty($item)){
		return false;
	}
	$check = $this -> db ;
	if (!empty($filter)) {
		$result=$collection->find($item['name']);
	}
	 if($result){
		$this -> update(['name'=>$item['name'],'züge'=>$item['züge']]);
	}	
		elseif(! $result) {
		$this -> insertInto(['name'=>$item['name'], 'züge'=>$item['züge'], 'Bot'=>$item['Bot']]);
	}	
	}
	public function get(){
	return $this->db->find();
	}
}
?>
