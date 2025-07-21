<!-- To check how  Cookies and session Work after user login in -->

<!-- Cookies might be not secure in all case so Session useddd -->

<?php
        session_start();

        if(isset($_SESSION['user_id'])){

            $user_id = $_SESSION['user_id'];
            $name = $_SESSION['name'];
            echo "Welcome Ji Twadda Dashboard hai ji , $name! <br/>";
        }

        echo "Sorry ji Login nahi hoya ji, please login again <br/>";


    ?>