<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><?php
    include("head.php");
    ?>
</head>
<body>
<div class="columns">
  <div class="column is-one-fifth"><figure class="image is-96x96">
  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
</figure></div>
  <div class="column"><textarea class="textarea autoExpand" placeholder="e.g. Hello world" style="  display:block;
  box-sizing: padding-box;
  overflow:hidden;

  padding:10px;
  width:250px;
  font-size:14px;
  min-height: 100px;
  border-radius:8px;
  border:6px solid #556677;"></textarea></div>
  
</div>
<script>$(document)
    .one('focus.textarea', '.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.textarea', '.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0,
            rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });</script>
</body>
</html>