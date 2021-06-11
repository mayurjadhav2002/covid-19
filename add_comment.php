
<?php

//add_comment.php

$connect = new PDO('mysql:host=localhost;dbname=mape', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';
$comment_on= '';
$commented_id = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
 $comment_on = $_POST["comment_on"];
 $commented_id = $_POST["commented_id"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, post_id, sender_id, comment_sender_name) 
 VALUES (:parent_comment_id, :comment, :comment_on , :commented_id ,:comment_sender_name)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':comment_on' => $comment_on,
   ':commented_id' => $commented_id,
  )
 );
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>

