<?php

            

            session_start(); 
?>



                <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="bootstrap.css" />
</head>
<body>

<div id="container">
    
    <!-- ### Header ### -->
    
    <div id="header">   
        
        <!-- ### Top Menu ### -->
   <?php

                    if(isset($_SESSION['user_id'])){


                        include "menu_online.php";

                    }else{

                        include "menu_offline.php";
                    }
                    

        ?>
        

    </div>
    
    <!-- ### Content ### -->
    
    <div id="contentcontainer">
        
        <div id="content">
     
        
        <div class="post">

              

              <body>
<div class="container">
    <form action="to_register.php" method="post" class="form-signin">
        
        <table>
            <tr>
                <td>
                    LOGIN : 
                </td>
                <td class="form-control">
                    <input type="text" name = "login" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    PASSWORD : 
                </td>
                <td class="form-control">
                    <input type="password" name = "pass1" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    CONFIRM PASSWORD : 
                </td>
                <td class="form-control">
                    <input type="password" name = "pass2" class="form-control">
                </td>
            </tr>                       
            <tr>
                <td>
                    AGE : 
                </td>
                <td class="form-control">
                    <input type="text" name = "age" class="form-control">
                </td>
            </tr>
            <tr>
                <td  >
                    NAME : 
                </td>
                <td class="form-control">
                    <input type="text" name = "name" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    SURNAME : 
                </td>
                <td class="form-control">
                    <input type="text" name = "surname" class="form-control">
                </td>
            </tr>                                   
            <tr>
                <td>
                    <input type="submit" value="SIGN UP" class="btn btn-lg btn-primary btn-block">
                </td>
            </tr>           
        </table>

    </form>
    

</body>

        </div>
 
        </div>

        </div>
        
        </div>


 

    </div>
</div>  



</body>
</html>