 <?php   
 $timestamp = time();
    echo "<p>Timestamp: $timestamp</p>";

    // This returns the correct time
    echo "<p>". date("Y-m-d H:i:s", $timestamp) ."</p>";


 
date_default_timezone_set("Asia/Calcutta");
echo date_default_timezone_get();


   // echo "<p>Now I call 'date_default_timezone_set(\"UTC\")' and echo out the same timestamp.</p>";
  //  echo "Set timezone = " . date_default_timezone_set("UTC\");

    // This returns a time 5 hours in the past
    echo "<p>". date("Y-m-d H:i:s", $timestamp) ."</p>";
	?>