<?php

class DATABASE
{
    public $name;

    function __construct()
    {
        $this->name = '';
    }

    public function Create()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "students";

        // Create Connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check Connection
        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        } else echo("Connection Established");

        $sql = "INSERT INTO student_data VALUES ()";
    }


    public function CreateDatabase()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "students";

        // Create Connection
        $conn = new mysqli($servername, $username, $password);

        // Check Connection
        if ($conn->connect_error) {
            // We use die connection to print something and exit from the current PHP script
            die("Connection Failed: " . $conn->connect_error);
        }

        // Create Database
        $this->name = $_POST['name'];
        $sql = "CREATE DATABASE " . $this->name;

        // === meaning check the given variable is equal to other variable and
        // check the both variables data type is same
        if ($conn->query($sql) === TRUE) {
            echo("Database Created Successfully");
        } else {
            echo("Failed to Create the Database: " . $conn->error);
        }

        $conn->close();
    }

    public function DeleteDatabase()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create Connection
        $conn = new mysqli($servername, $username, $password);

        // Check Connection
        if ($conn->connect_error) {
            // We use die connection to print something and exit from the current PHP script
            die("Connection Failed: " . $conn->connect_error);
        }

        // Delete Database
        $sql = "DROP DATABASE NewDB1";

        // === meaning check the given variable is equal to other variable and
        // check the both variables data type is same
        if ($conn->query($sql) === TRUE) {
            echo("Database Deleted Successfully");
        } else {
            echo("Failed to Delete the Database: " . $conn->error);
        }

        $conn->close();
    }

    public function InsertData()
    {


    }
}
