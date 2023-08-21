<?php
    function showAllData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_execute_query($conn, $query);
        
        if(!$result){
            die('Query failed!' . mysqli_connect_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            echo "<option value='$id'>$id</option>";
        }
    }

    function createData(){
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO users (username, password) VALUES (?, ?)";
        $result = mysqli_execute_query($conn, $query, [$username, $hash]);

        if(!$result){
            die('Query failed!' . mysqli_connect_error());
        } else {
            echo "Record Created";
        }
    }

    function readData(){
        global $conn;
        $query = "SELECT * FROM users";
        $result = mysqli_execute_query($conn, $query);
    
        if(!$result){
            die('Query failed!' . mysqli_connect_error());
        }

        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }
    }

    function updateData(){
        global $conn;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $id = $_POST['id'];
        
        $query = "UPDATE users SET username=?, password=? WHERE id=?";
        $result = mysqli_execute_query($conn, $query, [$username, $hash, $id]);

        if(!$result){
            die('Query failed!' . mysqli_connect_error());
        } else {
            echo "Record Updated";
        }
    }
    
    function deleteData(){
        global $conn;
        $id = $_POST['id'];
        
        $query = "DELETE FROM users WHERE id=?";
        $result = mysqli_execute_query($conn, $query, [$id]);

        if(!$result){
            die('Query failed!' . mysqli_connect_error());
        } else {
            echo "Record Deleted";
        }
    }
$handle = fopen("test.txt", "w");
fwrite($handle, "Hello, world!");
fclose($handle);
?>