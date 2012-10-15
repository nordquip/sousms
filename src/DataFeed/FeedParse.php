<?php
// load SimpleXML
$stocks = new SimpleXMLElement('DataFeedExample.xml', null, true);

echo <<<EOF
<table>
        <tr>
                <th>Symbol</th>
                <th>Open</th>
                <th>Close</th>
                <th>Last Trade</th>
        </tr>

EOF;
foreach($stocks as $dataItems) // loop through our books
{
        echo <<<EOF
        <tr>
                <td>{$dataItems->symbol}</td>
                <td>{$dataItems->open}</td>
                <td>{$dataItems->close}</td>
                <td>\${$dataItems->lastSale}</td>
        </tr>

EOF;
}
echo '</table>';
?>