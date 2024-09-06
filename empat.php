<?php


class Author
{
    public $name;
    public $description;

    public function show(string $type) : array
    {
        if ($type === 'Info Buku') {
            return [
                'name' => $this->name,
                'description' => $this->description
            ];
        }
        return [];
    }
}

class Book
{
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function showAll() : array
    {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Page' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher
        ];
    }
}

class Publisher
{
    public $name;
    public $address;
    private $phone;

    public function setPhone(int $phone) : void
    {
        $this->phone = $phone;
    }

    public function getPhone() : int
    {
        return $this->phone;
    }
}

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
