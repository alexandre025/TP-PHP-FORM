<?php
  include('../lib/app.php');

  // Execute script only for GET method
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $db = getDatabase();

    // Our SQL query, values will be replaced later
    // LOWER() is a SQL function which downcase a value, it will help matching columns without case sensitive
    $sql = "SELECT * FROM contact WHERE LOWER(full_name_or_company) LIKE :search OR email LIKE :search";

    // Mapped attributes based on sql query values and form input values
    $attributes = array(
      'search' => '%'.$_GET['search'].'%'
    );

    // Prepare the query, avoid injections
    $stmt = $db->prepare($sql);

    // Execute the query and interpolate proper values
    $stmt->execute($attributes);

    // Build an array of comments
    $comments = array();
    while($row = $stmt->fetch()) {
      // Build a comment from row
      $comment = array(
        'full_name_or_company' => $row['full_name_or_company'],
        'email' => $row['email'],
        'comment' => $row['comment']
      );

      // Add comment to comments array
      array_push($comments, $comment);
    }

    // Closing the connexion
    $db = null;

    // Inform the browser that he will receive JSON and not HTML
    header('Content-Type: application/json');

    // Encode and render comments as JSON object
    echo json_encode($comments);
  } else {
    http_response_code(500);
  }
