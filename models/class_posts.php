<?php
class Posts {
    private $id;
    private $title;
    private $category;
    private $image;
    private $content;
    private $date_created;

    public function __construct() {
        $this->db = new Connection();
    }

    // Getter for id
    public function getId() {
        return $this->id;
    }

    // Setter for id
    public function setId($id) {
        $this->id = $id;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for category
    public function getCategory() {
        return $this->category;
    }

    // Setter for category
    public function setCategory($category) {
        $this->category = $category;
    }

    // Getter for image
    public function getImage() {
        return $this->image;
    }

    // Setter for image
    public function setImage($image) {
        $this->image = $image;
    }

    // Getter for content
    public function getContent() {
        return $this->content;
    }

    // Setter for content
    public function setContent($content) {
        $this->content = $content;
    }

    // Getter for date_created
    public function getDateCreated() {
        return $this->date_created;
    }

    // Setter for date_created
    public function setDateCreated($date_created) {
        $this->date_created = $date_created;
    }

    public function getPostContent()
    {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $data = []; // Initialize as an empty array
        $sql = "SELECT p.title, p.category, p.image, p.content, u.firstname, u.lastname
                FROM posts AS p
                JOIN users AS u ON u.id = p.user_id
                ORDER BY p.id DESC;
        ";
        $query = $koneksi->query($sql);
        
        while ($row = mysqli_fetch_assoc($query)) {
            $data[] = $row;
        }

        return $data;
    }


    public function postContent()
    {
        // Get a database connection
        $koneksi = $this->db->getMysqli();

        $title = $this->getTitle();
        $category = $this->getCategory();
        $content = $this->getContent();

        if (!empty($_FILES['image']['name'])) {
            // Handle file upload
            $targetDirectory = '/coral-guard/assets/img/posts/';
            $file_name = $_FILES['image']['name'];
            $targetFile = $_SERVER['DOCUMENT_ROOT'] . $targetDirectory . $file_name;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
                $sql = "INSERT INTO posts (title, category, `image`, content, date_created) VALUES (?, ?, ?, ?, NOW())";
            } else {
                echo "<script>alert('File upload failed.')</script>";
                redirectJS("?page=home"); // Redirect to the appropriate page
            }
        } else {
            $sql = "INSERT INTO posts (title, category, content, date_created) VALUES (?, ?, ?, NOW())";
        }

        // Prepare the SQL statement
        $stmt = $koneksi->prepare($sql);

        if ($stmt === false) {
            die("Error: " . $koneksi->error);
        }

        if (!empty($_FILES['image']['name'])) {
            // Bind parameters with image
            $stmt->bind_param("ssss", $title, $category, $file_name, $content);
        } else {
            // Bind parameters without image
            $stmt->bind_param("sss", $title, $category, $content);
        }

        if ($stmt->execute()) {
            // Post content added successfully
            echo "<script>alert('success.')</script>";
            redirectJS("?page=home"); // Redirect to a success page
        } else {
            // Error occurred
            echo "<script>alert('An error occurred.')</script>";
            redirectJS("?page=home"); // Redirect to the appropriate page
        }

        // Close the statement
        $stmt->close();
    }

}

?>