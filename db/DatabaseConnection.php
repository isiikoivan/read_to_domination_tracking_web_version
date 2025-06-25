<?php

class DatabaseConnection
{
    private $servername = "127.0.0.1";
    private $username = "postgres";
    private $password = "postgres";
    private $db_name ="read_dominion_goal";
    private $conn;

    public function connection()
    {
        try {
            $this->conn = new PDO("pgsql:host=$this->servername;dbname=$this->db_name", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    // Function name updated to reflect SELECT purpose
    public function getVerseById($id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT id, verse_name, chapter_id, verse_description, \"read\", read_count, date_created, created_by FROM public.verse WHERE id = :id");
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;

        } catch (PDOException $e) {
            echo "Query failed: " . $e->getMessage();
        }
    }


}
