<?php
function getUserCount(){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $userCount="";
    $user_count = "select count(*) as user_count from user";
     $res = mysqli_query($con,$user_count);
     while ($row = mysqli_fetch_assoc($res)) {
        $userCount = $row['user_count'];
     }
     return ($userCount);
}

function getBookCount(){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $bookCount="";
    $book_count = "select count(*) as book_count from books";
     $res = mysqli_query($con,$book_count);
     while ($row = mysqli_fetch_assoc($res)) {
        $bookCount = $row['book_count'];
     }
     return ($bookCount);
}

function getBookCategories(){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $bookCategry="";
    $book_categary = "select count(*) as book_categary from category";
     $res = mysqli_query($con,$book_categary);
     while ($row = mysqli_fetch_assoc($res)) {
        $bookCategry = $row['book_categary'];
     }
     return ($bookCategry);
}

function getAuthorCount(){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $authorCount="";
    $author_count = "select count(*) as author_count from authors";
     $res = mysqli_query($con,$author_count);
     while ($row = mysqli_fetch_assoc($res)) {
        $authorCount = $row['author_count'];
     }
     return ($authorCount);
}

function getBookIssue(){
    $con = mysqli_connect("localhost", "root", "", "lms");
    $bookIssue="";
    $book_issue = "select count(*) as book_issue from issued_books";
     $res = mysqli_query($con,$book_issue);
     while ($row = mysqli_fetch_assoc($res)) {
        $bookIssue = $row['book_issue'];
     }
     return ($bookIssue);
}