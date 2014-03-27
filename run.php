<?php

//Include configuration file.
require 'config.php';

//Include helper classes.
require 'Instagram.php';
require 'Image.php';

//Initialize Instagram class.
$instagram = new Instagram();
$instagram->config = $config;

?>

<p>
  I am downloading these files ->
</p>

<?php

//Loop all the places.
foreach($config['places'] as $place)
{

  ?>

  <h1 style="clear:both;"><?php echo $place['title']; ?></h1>

  <?php

  //Get the images.
  $images = $instagram->images($place['lat'], $place['lng'])['data'];

  //Loop images and download one by one.
  foreach ($images as $img)
  {

    $img = new Image($img);

    $img->config = $config;

    $img->render();

  }

  //Loop images and download one by one.
  foreach ($images as $img)
  {

    $img = new Image($img);

    $img->config = $config;
    $img->config['place'] = $place['title'];

    $img->download();

  }

}

?>

<h2 style="clear:both;">
  I finished downloading :D
</h2>

<link href="style.css" type="text/css" rel="stylesheet">

<script>

//Reload page after 30 seconds.
setTimeout(function(){
  document.location = 'run.php';
}, 30000);

</script>