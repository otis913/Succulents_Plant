<?php
class fileImg
{
  function getFilePath()
  {
    //Web根目錄真實路徑
    $ServerRoot = $_SERVER["DOCUMENT_ROOT"];
    return $ServerRoot . "./20210225/back/img/";
  }
}
