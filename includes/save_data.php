<?php
  if($_SERVER["REQUEST_METHOD"]== "POST")
  {
    if (empty($_POST["BookName"]))
    {
    $nameErr = "Book name is required";
    }
    else
    {
    $name = refine_data($_POST["BookName"]);
    }

    if (empty($_POST["AuthorName"]))
    {
    $authorErr = "Author name is required";
    }
    else
    {
    $author = refine_data($_POST["AuthorName"]);
    }

    if (empty($_POST["Description"]))
    {
    $descErr = "Book description is required";
    }
    else
    {
    $desciption = refine_data($_POST["Description"]);
    }
  }

// data refinement against sql injection
  function refine_data($data){
    $data = trim($data);
    $data = slashtrim($data);
    $data = htmlspecialchars($data);

    return $data;
  }


?>
