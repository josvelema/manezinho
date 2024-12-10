<?php
// Loop through the posts
foreach ($posts as $post) {
  $title = $post['title'];
  $media = json_decode($post['media']);
  $content = $post['content'];
  // Display the post
  ?>
  <div class="post">
    <h2 class="post-title"><?php echo $title; ?></h2>
    <div class="post-media">
      <?php
      // Loop through the media files
      $i = 0;
      foreach ($media as $file) {
        // Check the file type
        $fileType = pathinfo($file, PATHINFO_EXTENSION);
        if ($fileType === 'jpg' || $fileType === 'jpeg' || $fileType === 'png' || $fileType === 'gif') {
          // Display the image
          echo '<img src="' . $file . '" alt="' . $title . '">';
        } elseif ($fileType === 'mp4' || $fileType === 'webm' || $fileType === 'ogv') {
          // Display the video
          echo '<video src="' . $file . '" controls></video>';
        } elseif ($fileType === 'mp3' || $fileType === 'ogg' || $fileType === 'wav') {
          // Display the audio
          echo '<audio src="' . $file . '" controls></audio>';
        } else {
          // Display an error message
          echo 'Invalid file type';
        }
        $i++;
      }
      ?>
    </div>
    <div class="post-content">
      <?php
      // Parse the content and replace media sources with media elements
      $doc = new DOMDocument();
      $doc->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      $imgElements = $doc->getElementsByTagName('img');
      foreach ($imgElements as $imgElement) {
        
  // Get the src attribute of the img element
  $src = $imgElement->getAttribute('src');
  // Check if the src attribute matches a media file
  $found = false;
  $j = 0;
  while (!$found && $j < $i) {
    if ($src === $media[$j]) {
      $found = true;
      // Replace the img element with the corresponding media element
      if ($j < $i) {
        $fileType = pathinfo($media[$j], PATHINFO_EXTENSION);
        if ($fileType === 'jpg' || $fileType === 'jpeg' || $fileType === 'png' || $fileType === 'gif') {
          // Replace with an img element
          $newElement = $doc->createElement('img');
          $newElement->setAttribute('src', $src);
          $newElement->setAttribute('alt', $title);
          $imgElement->parentNode->replaceChild($newElement, $imgElement);
        } elseif ($fileType === 'mp4' || $fileType === 'webm' || $fileType === 'ogv') {
          // Replace with a video element
          $newElement = $doc->createElement('video');
          $newElement->setAttribute('src', $src);
          $newElement->setAttribute('controls', '');
          $imgElement->parentNode->replaceChild($newElement, $imgElement);
        } elseif ($fileType === 'mp3' || $fileType === 'ogg' || $fileType === 'wav') {
          // Replace with an audio element
          $newElement = $doc->createElement('audio');
          $newElement->setAttribute('src', $src);
          $newElement->setAttribute('controls', '');
          $imgElement->parentNode->replaceChild($newElement, $imgElement);
        } else {
          // Display an error message
          echo 'Invalid file type';
        }
      }
    }
    $j++;
  }
}
}
// Output the modified content
echo $doc->saveHTML();

?>
