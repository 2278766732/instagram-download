<?php

class Image extends Instagram
{

  //Zet de informatie die je nodig hebt in variabelen.
  function __construct($img)
  {

    return $this->info = $img;
  
  }

  //Sla de afbeelding op in downloads, met de id als bestandsnaam.
  function download()
  {

    if( $this->is_included() )
    {
  
      $filepath = $this->config['download_folder'].'/'.$this->config['place'].'-'.$this->info['id'].'.jpg';
      
      if(!file_exists($filepath))
      {
        $ch = curl_init($this->info['images']['standard_resolution']['url']);
        $fp = fopen($filepath, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);
      }
  
    }

  }

  function render()
  {

    if( $this->is_included() )
    {
      $info = $this->info;
      include 'tmpl/img.php';
    }

  }

  function is_included()
  {

    $found = false;

    foreach($this->info['tags'] as $tag)
    {
      if(is_array($this->config['tags']) && in_array($tag, $this->config['tags'])){
        $found = true;
      }
    }

    return $found;

  }

}
