<?php

$dbuser = $_ENV['MYSQL_USER'];
$dbpass = $_ENV['MYSQL_PASS'];
/*
try {
    $pdo = new PDO("mysql:host=mysql;dbname=blog", $dbuser, $dbpass);
    $statement = $pdo->prepare("SELECT * FROM posts");
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_OBJ);
    
    echo "<h2>Posts</h2>";
    echo "<ul>";
    foreach ($posts as $post ) {
        echo "<li>". utf8_encode($post->id) . "</li>";
        echo "<li>". utf8_encode($post->title) . "</li>";
        echo "<li>". utf8_encode($post->body) . "</li>";
    }
    echo "</ul>";

} catch(PDOException $e) {
    echo $e->getMessage();
}

*/

phpInfo();

?>
