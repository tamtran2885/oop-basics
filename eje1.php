<?php

class Book
{
    public $title;
    public $author;
    public $publisher;

    public function __construct($title, $author, $publisher)
    {
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        // echo "The novel " . $this->title . " is written by " . $this->author . " <br>";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function __destruct()
    {
        echo "The '" . $this->title . "' novel is written by " . $this->author . " <br>";
    }
}

$book = new Book("Twenty Thousand Leagues Under the Seas", "Jules Verne", "Simon & Schuster");
echo $book->getTitle();
echo "<br>";
echo $book->getAuthor();
echo "<br>";
echo $book->getPublisher();
echo "<br>";

class ChildrenBook extends Book
{
    public static $type = "children";

    public function getTitle()
    {
        return "The name of this book is " . $this->title;
    }
}

$childrenBook = new ChildrenBook("The Pooh Story Book", "A. A. Milne","Dutton");
echo "<br>";
echo $childrenBook->getTitle();
echo "<br>";
echo ChildrenBook::$type;
echo "<br>";
