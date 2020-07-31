<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new animal();
$sheep -> setName("sheep");

echo "Nama hewan: ".$sheep -> getName()."<br>";
echo "Jumlah kaki : ".$sheep -> legs()."<br>";
echo "Cek hewan berdarah dingin : ".$sheep -> cold_blooded()."<br><br>";

$kodok = new frog();
$kodok -> setName("buduk");

echo "Nama hewan: ". $kodok -> getName()."<br>";
echo "Cek hewan berdarah dingin : ".$kodok -> cold_blooded()."<br>";
echo "Bunyi : ".$kodok -> jump()."<br><br>";

$sunggokong = new ape();
$sunggokong -> setName("kera sakti");

echo "Nama hewan: ".$sunggokong -> getName()."<br>";
echo "Jumlah kaki: ".$sunggokong -> legs()."<br>";
echo "Cek hewan berdarah dingin: ".$sunggokong -> cold_blooded()."<br>";
echo "Bunyi : ".$sunggokong -> yell();