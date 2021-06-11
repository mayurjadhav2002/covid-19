<head><link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.min.css">
    <link rel="stylesheet" href="stylesheet/style.scss">
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma-rtl.min.css">
    <!-- UIkit CSS -->
<link rel="stylesheet" href="node_modules/uikit/dist/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="node_modules/uikit/dist/js/uikit.min.js"></script>
<script src="node_modules/uikit/dist/js/uikit-icons.min.js"></script>
<script src="node_modules/@vaadin/vaadin/vaadin.js
"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<?php 

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=mape", "root", "");

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Page Content -->
  <div class="container">
        <div class="row">
         <br />
         <h2 align="center">Advance Ajax hand Filters in PHP</h2>
         <br />
            <div class="col-md-3">                    
    <div class="list-group">
     <h3>Price</h3>
     <input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000" />
                    <p id="price_show">1000 - 65000</p>
                    <div id="price_range"></div>
                </div>    
                <div class="list-group">
     <h3>Brand</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
     <?php

                    $query = "
                    SELECT DISTINCT(city) FROM hand ORDER BY id DESC";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector brand city" value="<?php echo $row['city']; ?>"  > <?php echo $row['city']; ?></label>
                    </div>
                    <?php
                    }

                    ?>
                    </div>
                </div>

    <div class="list-group">
     <h3>RAM</h3>
                    <?php

                    $query = "
                    SELECT DISTINCT(tags) FROM hand ORDER BY id DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector ram title" value="<?php echo $row['tags']; ?>" > <?php echo $row['tags']; ?> </label>
                    </div>
                    <?php    
                    }

                    ?>
                </div>
    
    <div class="list-group">
     <h3>Internal Storage</h3>
     <?php
                    $query = "
                    SELECT DISTINCT(state) FROM hand ORDER BY id DESC
                    ";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach($result as $row)
                    {
                    ?>
                    <div class="list-group-item checkbox">
                        <label><input type="checkbox" class="common_selector storage state" value="<?php echo $row['state']; ?>"  > <?php echo $row['state']; ?> GB</label>
                    </div>
                    <?php
                    }
                    ?> 
                </div>
            </div>

            <div class="col-md-9">
             <br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
 text-align:center; 
 background: url('loader.gif') no-repeat center; 
 height: 150px;
}
</style>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        var brand = get_filter('city');
        var ram = get_filter('title');
        var storage = get_filter('state');
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price, brand:brand, ram:ram, 
                storage:storage},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1000,
        max:65000,
        values:[1000, 65000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>