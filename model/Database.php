<?php

class Database{

    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "test";

    function __construct()
    {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if (mysqli_connect_errno()) {
        echo "Database Failed To Connect: " . mysqli_connect_error();
        }
    }

    function show_data()
    {
        $data = $this->conn->query("select * from kontak");
        while ($d = mysqli_fetch_array($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function input_data($name, $age)
    {
        $this->conn->query("insert into kontak values('','$name', '$age')");
    }

    function get_byId($id)
    {
        $data = $this->conn->query("select * from kontak where id = '$id'");
        while ($d = mysqli_fetch_array($data)) {
            $result[] = $d;
        }
        return $result;
    }

    function update_data($id, $name, $age)
    {
        $this->conn->query("update kontak set nama='$name', umur='$age' where id = '$id'");
    }

    function delete_data($id)
    {
        $this->conn->query("delete from kontak where id = '$id'");
    }

}

?>