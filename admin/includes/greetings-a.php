<?php 
 
    date_default_timezone_set('America/Chicago');
    //Here we define out main variables 
    $welcome_string="Welcome"; 
    $numeric_date=date("G"); 
    
    //Start conditionals based on military time 
    if($numeric_date>=0&&$numeric_date<=11) 
    $welcome_string="Good Morning,"; 
    else if($numeric_date>=12&&$numeric_date<=17) 
    $welcome_string="Good Afternoon,"; 
    else if($numeric_date>=18&&$numeric_date<=21) 
    $welcome_string="Good Evening,";
    else if($numeric_date>=22&&$numeric_date<=24) 
    $welcome_string="Good Night,"; 
    

        $aid=$_SESSION['id'];
        $ret="select * from admin where id=?";
         $stmt= $mysqli->prepare($ret) ;
         $stmt->bind_param('i',$aid);
         $stmt->execute();
         $res=$stmt->get_result();
                                        
         while($row=$res->fetch_object())
         {
    
    echo "<h3 class='page-title text-truncate text-dark font-weight-medium mb-1'>$welcome_string $row->username! </h3>"; }
 
?>