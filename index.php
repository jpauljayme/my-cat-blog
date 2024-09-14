<?php
$books = [
    [
        'title' => 'The Bell Jar',
        'author' => 'Sylvia Plath'

    ],
    [
        'title' => 'Collect Poems : Sylvia',
        'author' => 'Sylvia Plath'

    ],
    [
        'title' => '1984',
        'author' => 'George Orwell'
    ],
    [
        'title' =>  'Crime and Punishment',
        'author' => 'Fyodor Dostoevsky'
    ]
];

function filter($items, $key, $author)
{
    $filteredItems = [];

    foreach ($items as $book) {
        if ($book[$key] == $author) {
            $filteredItems[] = $book;
        }
    }
    return $filteredItems;
}

$filteredBooks = filter($books, 'author', 'Sylvia Plath');

require 'index.view.php';