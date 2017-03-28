<?php

class createConnection //create a class for make connection
{
    var $host     ="localhost";
    var $username ="root";    // specify the sever details for mysql
    Var $password ="";
    var $database ="creative-new";
    var $myconn;

    function connectToDatabase() // create a function for connect database
    {

        $conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);

        if(!$conn)// testing the connection
        {
            die ("Cannot connect to the database");
        }

        else
        {

            $this->myconn = $conn;

            // echo "Connection established";

        }

        return $this->myconn;

    }


}

?>