<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/database1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE models (Id INTEGER PRIMARY KEY, model TEXT, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelDescriptionTitle TEXT, modelDescription TEXT, x3domUrl TEXT)");
			return "models table is successfully created inside database.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO models (Id, model, x3dModelTitle, x3dCreationMethod, modelDescriptionTitle, modelDescription, x3domUrl) 
				VALUES (0, 'nes', 'NES X3D Model', 'This X3D model of the NES controller has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'NES Controller', 'The Nintendo Entertainment System controller is the main controller for the Nintendo Entertainment System. While previous systems had used joysticks, the NES controller provided a directional pad (the d-pad was introduced in the Game & Watch version of Donkey Kong). Its four buttons along with the D-pad simplified the controls, helping the NES to be phenomenally successful. The controller was colored grey with a black face with grey stripes. Nintendo of America employee Lance Barr designed the controller. The controllers were first available with the Control Deck and Deluxe Set bundles for the NES in 1985. Later, additional controllers (sold in packs of two) would be available for purchase. A slightly modified NES controller with an all-black casing was released with the Television With Built-In NES.', '../assets/x3d/NES.x3d');".
			"INSERT INTO models (Id, model, x3dModelTitle, x3dCreationMethod, modelDescriptionTitle, modelDescription, x3domUrl) 
				VALUES (1, 'snes', 'SNES X3D Model', 'This X3D model of the SNES controller has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'SNES Controller', 'The Super Nintendo Entertainment System controller had a rounded dog-bone like design and added two more face buttons to the NES Controller, X and Y, arranging the four in a diamond formation. Another addition was the L and R shoulder buttons, which have been imitated by most controllers since. There is a slight variation in the Japanese and European version of the controller, where the A, B, Y and X buttons are all convex-curved and each one has a distinct color (A was red, B was yellow, X was blue, and Y was green). For the American SNES, the A and B buttons were colored purple, whereas the Y and X buttons were lavender and concave-curved', '../assets/x3d/SNES.x3d');".
			"INSERT INTO models (Id, model, x3dModelTitle, x3dCreationMethod, modelDescriptionTitle, modelDescription, x3domUrl) 
				VALUES (2, 'gameCube', 'GAMECUBE X3D Model', 'This X3D model of the GAMECUBE controller has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'GAMECUBE Controller', 'The GameCube controller features four face buttons, three shoulder buttons, a start button, a joystick, a c-stick, and a d-pad. It features rumble feedback and was made specifically to be comfortable in the players hands. The L and R buttons each have a digital and analog mode. The digital mode is when the player presses the button so that it clicks, whereas analog is when they dont exert as much pressure on the controller. This features causes them to each have two buttons. The third shoulder button, which is purple and is known as the Z button, does not have this feature. When in circulation, a single GameCube controller would come with every GameCube. The color of the controller would match that of the GameCube that they purchased. A couple of years after the release of the GameCube, Nintendo released the Wavebird, a wireless variation of the GameCube controller that was a bit bulkier.', '../assets/x3d/GAMECUBE.x3d');".
			"INSERT INTO models (Id, model, x3dModelTitle, x3dCreationMethod, modelDescriptionTitle, modelDescription, x3domUrl) 
				VALUES (3, 'wii', 'WII X3D Model', 'This X3D model of the WII controller has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.', 'WII Controller', 'The Wii Remote, (pronounced we re-mote) commonly known as Wiimote, is the controller for the Wii console, and is also used with the Wii U. The controller is very innovative and has features not present in past video game controllers. The most notable feature of the Wiis remote control is its motion sensing ability. You are able to do multiple things with this remote, including swing it, aim, pull back, use it as a steering wheel, and much more. It also has two separate controls, the main one or the one that is usually displayed, resembles a standard television remote control, and the second unit, title the Nunchuk expansion, allows the player to have more gameplay abilities.', '../assets/x3d/WII.x3d');");
			return "X3D model data inserted successfully inside database.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the model table
			$sql = 'SELECT * FROM models';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['model'] = $data['model'];
				$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
				$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
				$result[$i]['modelDescriptionTitle'] = $data['modelDescriptionTitle'];
				$result[$i]['modelDescription'] = $data['modelDescription'];
				$result[$i]['x3domUrl'] = $data['x3domUrl'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}
	
	public function createJSON()
	{
		echo '{"pageTextData": [
		{
            "title": "NINTENDO VIRTUAL MUSEUM",
            "subTitle": "A Museum of Nintendos vintage controllers"	     
		},
		{
            "title": "NES Controller",
            "description": "The Nintendo Entertainment System controller is the main controller for the Nintendo Entertainment System. While previous systems had used joysticks, the NES controller provided a directional pad (the d-pad was introduced in the Game & Watch version of Donkey Kong). Its four buttons along with the D-pad simplified the controls, helping the NES to be phenomenally successful."	
            
           
		},
		{
            "title": "SNES Controller",		
            "description": "The Super Nintendo Entertainment System controller had a rounded dog-bone like design and added two more face buttons to the NES Controller, X and Y, arranging the four in a diamond formation. Another addition was the L and R shoulder buttons, which have been imitated by most controllers since."
           
		},
        {
            "title": "GAMECUBE Controller",	
            "description": "The GameCube controller features four face buttons, three shoulder buttons, a start button, a joystick, a c-stick, and a d-pad. It features rumble feedback and was made specifically to be comfortable in the players hands. The L and R buttons each have a digital and analog mode. The digital mode is when the player presses the button so that it clicks, whereas analog is when they dont exert as much pressure on the controller."
            
        },
		{
            "title": "WII Controller",		
            "description": "The Wii Remote, (pronounced we re-mote) commonly known as Wiimote, is the controller for the Wii console, and is also used with the Wii U. The controller is very innovative and has features not present in past video game controllers."
           
		}
        
	  ] }';
	}
}
?>