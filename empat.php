<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author();
$author->name = "Tere Liye";
$author->description = "penulis novel dari Indonesia";

$info_author = $author->show('Info Buku');
print_r($info_author);

$book = new Book();
$book->ISBN = 9786020331607;
$book->title = "Daun Yang Jatuh Tak Pernah Membenci Angin";
$book->description = "Tentang Tania, Danar, dan keluarganya";
$book->category = "Fiksi Remaja";
$book->language = "Bahasa Indonesia";
$book->numberOfPage = 264;
$book->author = "Tere Liye";
$book->publisher = "Gramedia Pustaka Utama";

$info_lengkap = $book->showAll();
print_r($info_lengkap);

$publisher = new Publisher();
$publisher->name = "Gramedia Pustaka Utama";
$publisher->address = "Kompas Gramedia Building, lantai 5, 29-37 Jalan Palmerah Barat, Jakarta";
$publisher->setPhone(53650110);

echo "Phone: " . $publisher->getPhone();
