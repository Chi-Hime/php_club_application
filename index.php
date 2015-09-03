 
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="clubform.css">
    </head>
    <body>
	  <?php
		  
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
		  $first_name=$_POST["user_first_name"];
		  $last_name=$_POST["user_last_name"];
		  $user_name=$_POST["user_name"];
		  $email=$_POST["user_email"];
		  
		  $age = $_POST["user_age"];
		  $under_20=$_POST["user_age"];
		  $under_30=$_POST["user_age"];
		  $under_40=$_POST["user_age"];
		  $under_50=$_POST["user_age"];
		  $over_60=$_POST["user_age"];
		  $user_bio=$_POST["user_bio"];
		  
		  $user_job=$_POST["user_job"];
		   
		  $tesla_interest=$_POST["tesla_interest"];
		  $user_interest_safety=$_POST["user_interest_safety"];
		  $user_interest_design=$_POST["user_interest_design"];
		  $user_interest_speed=$_POST["user_interest_speed"];
		    
			// writing to file
			// simplified method for writing files
 			
			$file = 'club.csv'; 
			$my_new_text = $filecontent;
			$my_new_text .= $first_name . ',' .
							$last_name . ',' .
							$user_name . ',' .
							$email . ',' .
							$age . ',' .
							$user_bio . ',' .
							$tesla_interest . ',' .
							$user_interest_safety . ' ' . $user_interest_design . ' ' . $user_interest_speed . PHP_EOL;
			//echo $my_new_text;
			
			file_put_contents($file, $my_new_text, FILE_APPEND);
			
			
			
			
			//var_dump($filecontent); 
			//$mydata = str_getcsv($filecontent, "\n");
			//$tcg = [];
			//$boardgames = [];
			//$vids = [];
			//foreach($mydata as $row){
			//	$row_arr = str_getcsv($row, ',');
			//	var_dump($row_arr);
				// $tcg[] = $row_arr[0];
				// $boardgames[] = $row_arr[1];
				// $vids[] = $row_arr[2];
			//}
		    // echo "tcg <br>\n";
			// print_r($tcg);
			// echo "boardgames \n";
			// print_r($boardgames);
			// echo "video games \n";
			// print_r($vids);
		   
		   ?>
		   
		   <table border="1">
			  <tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Age</th>
				<th>Biography</th>
				<th>Tesla Models</th>
				<th>Interests</th>
			  </tr>
			  <?php
				
				$filecontent = file_get_contents($file);
				$mydata = str_getcsv($filecontent, "\n");
	 
				 
				foreach ($mydata as $row){
					$row_arr = str_getcsv($row, ',');
					
					$first_name1 = $row_arr[0];
					$last_name1 = $row_arr[1];
					$user_name1 = $row_arr[2];
					$email1 = $row_arr[3];
					$age1 = $row_arr[4];
					$user_bio1 = $row_arr[5];
					$tesla_interest1 = $row_arr[6];
					$user_interest1 = $row_arr[7];
				?>
					<tr>
						<td><?php echo $first_name1; ?></td>
						<td><?php echo $last_name1; ?></td>
						<td><?php echo $user_name1; ?></td>
						<td><?php echo $email1; ?></td>
						<td><?php echo $age1; ?></td>
						<td><?php echo $user_bio1; ?></td>
						<td><?php echo $tesla_interest1; ?></td>
						<td><?php echo $user_interest1; ?></td>
					</tr>
				
				<?php
					
				}
				?>
			
			  
			</table>
		   
		   <?php
		   
		   
		   
		}
  
  
  ?>
  
      <form action="" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="first.name">First Name:</label>
          <input type="text" id="first.name" name="user_first_name" value="">

          <label for="last.name">Last Name:</label>
          <input type="text" id="last.name" name="user_last_name" value="">

          <label for="username">User Name:</label>
          <input type="text" id="username" name="user_name" value="">
          
           <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" value="">

          <label>Age:</label>
          <input type="radio" id="under_20" value="under 20" name="user_age"><label for="under_20" class="light">Under 20</label><br>
          
         <input type="radio" id="under_20" value="under 30" name="user_age"><label for="under_20" class="light">Under 30</label><br>

         <input type="radio" id="under_20" value="under 40" name="user_age"><label for="under_20" class="light">Under 40</label><br>

         <input type="radio" id="under_20" value="under 50" name="user_age"><label for="under_20" class="light">Under 50</label><br>
          
          <input type="radio" id="over_60" value="60 or older" name="user_age"><label for="over_60" class="light">60 or older</label>

        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <legend><span class="number">3</span>Your Interest</legend>
        <label for="model">Tesla</label>
        <select id="model" name="tesla_interest">
            <option value="ROADSTERS">ROADSTERS</option>
            <option value="MODEL_S">MODEL S</option>
            <option value="MODEL_X">MODEL X</option>
        </select>
        
          <label>Interests:</label>
          <input type="checkbox" id="safety" value="safety" name="user_interest_safety"><label class="light" for="safety">SAFETY</label><br>
            <input type="checkbox" id="design" value="design" name="user_interest_design"><label class="light" for="design">DESIGN</label><br>
          <input type="checkbox" id="speed" value="speed" name="user_interest_speed"><label class="light" for="speed">SPEED</label>
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
      
    </body>
</html>