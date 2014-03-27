
<div class="item">

  <img src="<?php echo $info['images']['low_resolution']['url']; ?>"><br />

  <p class="tags">
    <?php foreach($info['tags'] as $tag): echo $tag.' '; endforeach; ?>
  </p>

  <p class="text">
    <?php echo $info['caption']['text']; ?>
    ~
    <a href="https://instagram.com/<?php echo $info['caption']['from']['username']; ?>" target="_blank">
      <?php echo $info['caption']['from']['full_name']; ?>
    </a>
  </p>

</div>
