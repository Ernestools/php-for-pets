<?php 

class Item {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $price, $imageUrl) {
        $stmt = $this->db->prepare("INSERT INTO items (name, price, imageUrl) VALUES (:name, :price, :imageUrl)");
        $stmt->execute(['name' => $name, 'price' => $price, 'imageUrl' => $imageUrl]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM items WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}

?>