<?php
 include 'Database.php';
if(isset($_POST['getAllproduct']))
{
  
    
        
        $query="SELECT * FROM mantradb";
        $result= mysqli_query($conn,$query) or die("query error");
        
        
        if(mysqli_num_rows($result)>0)
       {
        while($row = mysqli_fetch_assoc($result))
        {           
            include 'Display.php';
        }
       }
}
if(isset($_POST["get_selected_Category"])){
	    

		$Type = $_POST["type"];
		$query = "SELECT * FROM mantradb WHERE type = '$Type'";
                
                $result= mysqli_query($conn,$query) or die("query error");
	
	
        if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result))
        {
            include 'Display.php';
           
         }
}}

if(isset($_POST["category"]))
{
    	
    $category_query = "SELECT DISTINCT type FROM mantradb ";
	$run_query = mysqli_query($conn,$category_query) or die(mysqli_error($conn));

    
        if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$c_type = $row["type"];
	
		
                           
		
                echo "
				<a href='#' class='category' c_type1='$c_type'>$c_type</a>
			";
                }
                
	
	}
}
