<?php
  include('../lib/app.php');

  // Execute script only for POST method
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $db = getDatabase();

    // Our SQL query, values will be replaced later
    $sql = "INSERT INTO contact (full_name_or_company, email, comment) VALUES (:full_name_or_company, :email, :comment)";

    // Mapped attributes based on sql query values and form input values
    $attributes = array(
      'full_name_or_company' => $_POST['full_name_or_company'],
      'email' => $_POST['email'],
      'comment' => $_POST['comment']
    );

    // Prepare the query, avoid injections
    $stmt = $db->prepare($sql);

    // Execute the query and interpolate proper values
    $stmt->execute($attributes);

    // Closing the connexion
    $db = null;

    // Redirect to index with a success message
    header('Location: ../index.php?success=true');
  } else {
    http_response_code(500);
  }
