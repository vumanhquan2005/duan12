<?php
class Movie
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = connection();
    }

    public function all()
    {
        $sql = "SELECT * FROM movies";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function delete($id)
    {
        $sql = "DELETE FROM movies WHERE id=$id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
    public function insert($data)
    {
        $sql = "INSERT INTO movies(title, poster, intro, release_date, genres) Value (:title, :poster, :intro, :release_date, :genres)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
}
