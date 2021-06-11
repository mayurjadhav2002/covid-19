
	<?php //include config
include('../config.php');
require_once('../includes/config.php');
include('../sessions.php');
$stmt = $db->prepare('SELECT * FROM blog_posts_seo WHERE postID = :id');
$stmt->execute(array(':id' => $_GET['id']));
$row = $stmt->fetch();
$postid = $row['postID'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bulma-tagsinput@2.0.0/dist/js/bulma-tagsinput.min.js">
</script>
    <?php
    include("../head/head.php");
    ?>
    <style>
    body{
        background-color: #fafafa;
    }
    #editor{
        min-height: 500px;
        border: none;
        
    }
    </style>
</head>
<body>
    <?php
    include("../navbar.php");

    ?>
    <?php
include("config.php");
include("../head/head.php");
          if(isset($_POST['submit'])){
            
$title =  $_POST['postTitle'] ;
$postCont =  $_POST['postCont'];
$result = "UPDATE blog_posts_seo SET postTitle='$title', postCont='$postCont' WHERE postID= $row['postID']";
$result = mysqli
if($result){
echo "<script>UIkit.notification({message: 'Data Updated Successfully', status: 'success'})</script>";}
else{
    error_reporting(E_ALL);

}
}

?>


    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
  <form action="edit.php" method="POST">
<div class="write" style="width: 97%; margin-left: 1.5%; margin-top: 10px;">
<div class="control has-icons-left has-icons-right">
<input type="text" value="<?php echo $id;?>" name="id" style="display:none;">
<input type="text" value="<?php echo $postid;?>" name="postid" style="display:none;">

<div class="uk-margin">

            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}else{ echo $row['postTitle'];}?>' class="uk-input" id="form-stacked-text" type="text" Placeholder="Title" style="width: 100%;">
    
    </div>

</div>





<div class="columns">

  <div class="column is-three-quarters" style="background-color: white; margin-right: 10px;"> 
  <div id="toolbar-container"></div>
  

        <textarea name='postCont' id="editor">
       <?php  echo $row['postCont']; ?>
       </textarea>
       

  <script>
ClassicEditor
        .create( document.querySelector( '#editor' ) ,{
         
    image: {
        toolbar: [
            'imageStyle:full',
            'imageStyle:side',
            '|',
            'imageTextAlternative'
        ]
    },
    // This value must be kept in sync with the language defined in webpack.config.js.
    language: 'en'

        })
       
        .catch( error => {
            console.error( error );
        } );
</script>
                
                </div>








  <div class="column">
  <div class="meta" style="background-color: white; width: 100%; padding: 10px; border-radius: 10px;">
  <label for="meta" class="label">Meta Article</label>
<textarea name='postDesc' id=""  class="meta-content textarea is-small is-primary is-rounded" placeholder="Write short meta about your content"> <?php  echo $row['meta']; ?></textarea>
  </div>



<div class="tags" style="background-color: white; width: 100%; padding: 10px; border-radius: 10px; min-height:40px; margin-top: 20px; ">
<label for="meta" class="label">Tag <small>(tags should be separeted by comma ',' ) </small> </label>
<input class="input" name="tags" type="tags" placeholder="Add Tag">


<?php	

$stmt2 = $db->query('SELECT catID, catTitle FROM blog_cats ORDER BY catTitle');
while($row2 = $stmt2->fetch()){

    if(isset($_POST['catID'])){

        if(in_array($row2['catID'], $_POST['catID'])){
           $checked="checked='checked'";
        }else{
           $checked = null;
        }
    }

    echo "<input type='checkbox' name='catID[]' value='".$row2['catID']."' $checked> ".$row2['catTitle']."<br />";
}

?>

</div>
<button name='submit' value='Submit' class=" button is-rounded is-light is-primary is-outlined is-fullwidth" style="margin-top: 30px;">Submit the post


<svg xmlns="http://www.w3.org/2000/svg" uk-svg="stroke-animation: true" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
</svg>
</button>

  </div>

</div>


</div>
    </form>
</body>
<script>
                        CKEDITOR.replace( 'postCont' );
                 
                </script>

</html>