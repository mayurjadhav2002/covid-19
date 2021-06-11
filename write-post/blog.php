<?php include('blog-master/includes/config.php');
include("blog-master/classes/class.paginator.php");
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
				try {

					$pages = new Paginator('4','p');

					$stmt = $db->query('SELECT postID FROM blog_posts_seo');

					//pass number of records to
					$pages->set_total($stmt->rowCount());

					$stmt = $db->query('SELECT postID, postTitle, postSlug, postDesc, postDate FROM blog_posts_seo ORDER BY postID DESC '.$pages->get_limit());
					while($row = $stmt->fetch()){

							echo '<h1><a href="'.$row['postSlug'].'">'.$row['postTitle'].'</a></h1>';
							echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).' in ';

								$stmt2 = $db->prepare('SELECT catTitle, catSlug	FROM blog_cats, blog_post_cats WHERE blog_cats.catID = blog_post_cats.catID AND blog_post_cats.postID = :postID');
								$stmt2->execute(array(':postID' => $row['postID']));

								$catRow = $stmt2->fetchAll(PDO::FETCH_ASSOC);

								$links = array();
								foreach ($catRow as $cat)
								{
								    $links[] = "<a href='c-".$cat['catSlug']."'>".$cat['catTitle']."</a>";
								}
								echo implode(", ", $links);

							echo '</p>';
							echo '<p>'.$row['postDesc'].'</p>';				
							echo '<p><a href="'.$row['postSlug'].'">Read More</a></p><br><hr>';
					}

					echo $pages->page_links();

				} catch(PDOException $e) {
				    echo $e->getMessage();
				}
			?>
	<div id='sidebar'>
			<?php require('blog-master/sidebar.php'); ?>
		</div>

		<div id='clear'></div>

</body>
</html>