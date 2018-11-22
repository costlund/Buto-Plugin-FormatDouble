<?php
class PluginFormatDouble{
  public function format($d, $decimals = 1){
    return sprintf('%0.'.$decimals.'f', $d); // 520 -> 520.00
  }
}