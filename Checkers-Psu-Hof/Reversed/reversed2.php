<?php
 echo "<!doctype html>";
 echo "<html>";
 echo "<head>";
	 echo "<link rel='stylesheet' type='text/css' href='../css/ngCheckers.css'>";
	 echo "<title>Checkers</title>";
 echo "</head>";
 echo "<body>";
    require_once('../js/mongodb.php');
    $db = new MongoData;

    print_r($db -> insertInto([
    'name'=> 'test',
    'züge'=> '3'
    ]));
exit();

 echo "<div id='checkersApp' ng-app='checkersApp' ng-controller='checkerCtrl'>";
	 echo "<div id = 'gameContainer'>";
		//Festlegen der Reihen 
		echo "<div class = 'row' ng-repeat = 'row in board'>";
			//Setting the squares 
			echo "<div class = 'square' ng-style = 'setSquares(square)' ng-repeat='square in row track by $index' ng-click='select(square)'>";
				//Setting the stones 
				echo "<div class='circle' ng-style='setStones(square)'></div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";

	echo "<div id = 'description'>";
		echo "<div> Player Turn : {{player}} </div>";
		echo "<div> Red Score : {{redScore}} </div>";
		echo "<div> Black Score : {{blackScore}} </div>";
		echo "<div>";
			echo "<a href='../index.html' class='btn btn-info' role='button'>Home</a>";
		echo "</div>";
	echo "</div>";


		echo "<div id = 'rankingList'>";
   		echo "<ol id = 'name'>{{name}}</ol>";
		echo "<ol id = 'score'>{{score}}</ol>";
		echo "</div>";

		echo "<form id='namensEingabe'>";
		echo "<input type = 'textArea'>Gib deinen Namen ein.</input>";
		echo "</form>";
	


echo "</div>";
echo "<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js'></script>";
echo "<script src='../js/ngCheckers.js'> </script>";
echo "</body>";
echo "</html>";

?>
