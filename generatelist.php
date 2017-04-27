<?php
require 'offlineradio.class.php';
$init = new stdClass();
$init->mp3Folder = dirname(__FILE__).DS.'files/Melody';
$init->playListName = 'list.txt';
$init->startTime = date('H:i:s');
$radio = new OfflineRadio($init);
$radio->generateList();
header('Location: /radio');
