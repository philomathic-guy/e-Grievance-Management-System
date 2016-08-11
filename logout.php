   <?php

    $servername = "localhost";
                            session_start();

                             session_destroy();
                             $_SESSION["username"] = "";
                            $username = "root";
                            $password = "varsha";
                            $dbname = "mu";
                            
                            
                             
                            ?>
                            <?php header("Refresh: 0;url=index.php"); ?>