<?php
require_once('PeachSVG.php');

$file = isset($_GET['f']) ? $_GET['f'] : null;

if(!$file) { return "{ success: 0 }"; }

$peachSVG = new PeachSVG();
echo $peachSVG::convert("svg/$file");