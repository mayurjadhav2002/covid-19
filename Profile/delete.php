
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include("../head/head.php");
    ?>
</head>
<body>
<?php require('../includes/config.php'); 
require('../config.php');
include("../sessions.php");



$stmt = $db->prepare('SELECT * FROM blog_posts_seo WHERE postID = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();

$userid = $row['userId'];
$post =$row['postID'];

?>
<?php
if($userid == $id){
    mysqli_query($dbc, "DELETE FROM blog_posts_seo WHERE postID = $post ");
    echo "<script>UIkit.notification({message: 'Deleted', status: 'success'})</script>";
    header("location: index.php");
}else{
    echo "<script>UIkit.notification({message: 'Not deleted', status: 'success'})</script>";
    header("location: index.php");
}
?>
</body>
</html>