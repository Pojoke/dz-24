<?php
// function print_books($book, $author, $prefix){
//     echo "<h2>$prefix \"$book\": $author</h2>\n";
//   }
//   array_walk($books, "print_books", "Book");




  function print_books($info, $book){
    $str = "<h2>\"$book\"</h2>\n";
    $str .= "<p>автор: $info[0], рік: $info[1]</p>\n";
    // echo "<h2>\"$book\": автор $info[0], рік $info[1]</h2>\n";
    echo $str;
  }
  array_walk($books, "print_books");