<?php //include config
include('config.php');
require_once('blog-master/includes/config.php');
include('sessions.php');
include('../geo_plugin.php');

?>
	<?php

//if form has been submitted process it
if(isset($_POST['submit'])){

    //collect form data
    extract($_POST);

    //very basic validation
    if($postTitle ==''){
        $error[] = 'Please enter the title.';
    }

    if($postDesc ==''){
        $error[] = 'Please enter the description.';
    }

    if($postCont ==''){
        $error[] = 'Please enter the content.';
    }

    if(!isset($error)){

        try {

            $postSlug = slug($postTitle);

            //insert into database
            $stmt = $db->prepare('INSERT INTO blog_posts_seo (postTitle,postSlug,postDesc,postCont,postDate, userId,
             city, state, country,username, ip, accounttype, lastname)
             VALUES (:postTitle, :postSlug, :postDesc, :postCont, :postDate, :id, :city, :state, :country, :username, :ip,:accounttype, :lastname
            )') ;
            $stmt->execute(array(
                ':postTitle' => $postTitle,
                ':postSlug' => $postSlug,
                ':postDesc' => $postDesc,
                ':postCont' => $postCont,
                ':id' => $id,
                ':city' => $city2,
                ':state' => $state2,
                ':country' => $country2,
                ':username' => $username,
                ':ip' => $ip,
                ':accounttype' => $accountype,
                ':lastname' => $lname,
                ':postDate' => date('Y-m-d H:i:s')
            ));
            $postID = $db->lastInsertId();

            //add categories
            if(is_array($catID)){
                foreach($_POST['catID'] as $catID){
                    $stmt = $db->prepare('INSERT INTO blog_post_cats (postID,catID)VALUES(:postID,:catID)');
                    $stmt->execute(array(
                        ':postID' => $postID,
                        ':catID' => $catID
                    ));
                }
            }

            //redirect to index page
    echo 'added';
            exit;

        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

}

//check for any errors
if(isset($error)){
    foreach($error as $error){
        echo '<p class="error">'.$error.'</p>';
    }
}
?>
<?php //include config
include('../config.php');
require_once('blog-master/includes/config.php');
include('../sessions.php');
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

    <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
  <form id="fupForm" name="form1" action="" method="post">
<div class="write" style="width: 97%; margin-left: 1.5%; margin-top: 10px;">
<div class="control has-icons-left has-icons-right">
<input type="text" value="<?php echo $id;?>" name="id" style="display:none;">
<div class="uk-margin">

            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>' class="uk-input" id="form-stacked-text" type="text" Placeholder="Title" style="width: 100%;">
    
    </div>

</div>





<div class="columns">

  <div class="column is-three-quarters" style="background-color: white; margin-right: 10px;"> 
  <div id="toolbar-container"></div>
  

        <textarea name='postCont' id="editor">
        Start writing your article here.   
        &lt;br>&lt;/br>****NOTE: USE ONLY 2 IMAGES SO THAT YOUR ARTICLE CAN MANAGE IN DATABASE. USE OF MORE THAN 2 IMAGES CAN NOT LOAD YOUR ARTICLE.
        &lt;br>&lt;/br>Erase this before writing</textarea>
       

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
<textarea name='postDesc' id=""  class="meta-content textarea is-small is-primary is-rounded" placeholder="Write short meta about your content"></textarea>
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
<button name='submit' value='Submit' id="butsave" class=" button is-rounded is-light is-primary is-outlined is-fullwidth" style="margin-top: 30px;">Submit the post


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