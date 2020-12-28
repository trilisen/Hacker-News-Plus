<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// In this file we delete new posts in the database.

if (isset($_GET['postId'])) {

    $id = filter_var($_GET['postId'], FILTER_SANITIZE_NUMBER_INT);
    $userId = $_SESSION['user']['id'];

    $deletePostQuery = 'DELETE FROM posts WHERE id = :id AND user_id = :userId';

    $statement = $database->prepare($deletePostQuery);

    if (!$statement) {
        die(var_dump($pdo->errorInfo()));
    }

    $statement->bindParam(':id', $id, PDO::PARAM_INT);
    $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
    $statement->execute();
}

redirect('/posts.php?userId=' . $_SESSION['user']['id']);
