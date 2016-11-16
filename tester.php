<?php
//by Alex T.
session_start();
print(session_id());
  include("atfunctions.php");   //get row data

  if (!isset($_REQUEST['AgtFirstName']))
  {
     header("Location: agentinsert.php");
  }
  else
  {
	
	
	if (validate())
    {
      if (insertData($_REQUEST, "agents"))
      {
        print("data was added=)");
		header("Location: agent_insert_successful.php");
      }
      else {
        print("data wasn't added=(");
      }
    }
    else
    {
       if ($message)
     {
        $_SESSION["message"] = $message;
      $_SESSION["data"] = $_REQUEST;
     }
     header("Location: agentinsert.php");
    }
  }






/*if (insertData($_REQUEST, "agents"))
{
  print("data was added=)");
}
else {
  print("data wasn't added=(");
}*/
 ?>
