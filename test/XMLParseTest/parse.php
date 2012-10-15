<?php
// load SimpleXML
$books = new SimpleXMLElement('books.xml', null, true);

echo <<<EOF
<table>
        <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Price at Amazon.com</th>
                <th>ISBN</th>
        </tr>

EOF;
foreach($books as $book) // loop through our books
{
        echo <<<EOF
        <tr>
                <td>{$book->title}</td>
                <td>{$book->author}</td>
                <td>{$book->publisher}</td>
                <td>\${$book->amazon_price}</td>
                <td>{$book['isbn']}</td>
        </tr>

EOF;
}
echo '</table>';
?>