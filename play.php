<?php
    $song = htmlspecialchars(strip_tags($_POST['song']));
    $api = json_decode(file_get_contents("https://codesieungu.blog/apis/youtube.php?song=".urlencode($song)),TRUE);
    $audio = $api['infor']['video']['url'];
    $img = $api['infor']['thumbnails'];
    if(isset($audio))
    {
      ?>
        <marquee><p style='margin-bottom:10px;color:#65509E'>Bài Hát : <?php echo $api['infor']['title']; ?></p></marquee>
        <audio controls autoplay loop>
            <source src="<?php echo $audio ? $audio : '' ?>" type="audio/ogg">
            <source src="<?php echo $audio ? $audio : '' ?>" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
        <script>
            $('.thumbnails').html("<img class='animated infinite pulse delay-2s' style='width:150px;height:150px;border-radius:50%;border:4px solid #e6e6e6' src='<?php echo $img ?>'>");
        </script>
      <?php
    }
    else
    {
      echo '<script>alert("Không tìm thấy yêu cầu của bạn :(")</script>';
    }
  ?>
