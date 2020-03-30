<?php
class Publication
{
    public $id;
    public $title;
    public $date;
    public $image;
    public $content;
    public $author_name;
    public $type;

    public function __construct($row)
{
    $this->id = $row['id'];
    $this->title = $row['title'];
    $this->date = $row['date'];
    $this->image = $row['image'];
    $this->content = $row['content'];
    $this->author_name = $row['author_name'];
    $this->type = $row['type'];

}
}
 class NewsPublication extends Publication
 {
     public function printItem()
     {
         echo '<br> Title: '.$this->title;
         echo '<br> News: '.$this->content;
     }

 }
 class PhotoPublication extends Publication
 {
     public function printItem()
     {
         echo '<br> Title: '.$this->title;
         echo '<br> News: '.$this->content;
         echo '<br><img src="http://localhost:8080/'.$this->image. '">';

     }
 }
 class ArticlePublication extends Publication
 {
     public function printItem()
     {
         echo '<br> Title: '.$this->title;
         echo '<br> News: '.$this->author_name;

     }
 }