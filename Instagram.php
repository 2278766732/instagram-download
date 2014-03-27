<?php

class Instagram
{

  function images($lat, $lng)
  {

    $content = file_get_contents('https://api.instagram.com/v1/media/search?count=500&lat='.$lat.'&lng='.$lng.'&distance=5000&access_token='.$this->config['access_token']);

    return json_decode($content, true);

  }

}
