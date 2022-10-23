<?php
  // Load the stamp and the photo to apply the watermark to
# 이미지를 식별자에 저장
  $stamp = imagecreatefrompng('text.png');
  $im = imagecreatefrompng('original.png');

  // Set the margins for the stamp and get the height/width of the stampe image
  $marge_right = 10;
  $marge_bottom = 10;
# 글자 이미지의 크기
  $sx = imagesx($stamp);
  $sy = imagesy($stamp);

  // Copy the stmap image oonto our photo using the margin offseets and the photo width to calculate positioning of the stamp.
# imagecopy: 기존의 이미지위에 복사 (기존 이미지, 복사할 이미지, 기존이미지에 복사할 이미지가 위치할 x좌표, y좌표, 복사할 이미지 시작의 x축, y축, 끝점의 x축, 끝점의 y축)
  imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

  // Output and free memory
  header('Content-type: image/png');
  imagepng($im);
  imagedestroy($im);
?>
