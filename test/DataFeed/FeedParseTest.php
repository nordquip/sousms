<?php
// load SimpleXML
$stocks = new SimpleXMLElement('DataFeedExample.xml', null, true);

echo <<<EOF
<table>
        <tr>
				<th>symbol</th>
				<th>Best Ask Price</th>
				<th>Best Ask Quantity</th>
				<th>Best Bid Price</th>
				<th>Best Bid Quantity</th>
				<th>Close</th>
				<th>High</th>
                <th>Last Sale</th>
                <th>Low</th>
                <th>Net Change</th>
                <th>Open</th>
				<th>Previous Close</th>
				<th>Volume</th>
				<th>Date</th>
				<th>Percent Change</th>
				<th>Time</th>
        </tr>

EOF;
foreach($stocks as $dataItems) // loop through our books
{
        echo <<<EOF
        <tr>
                <td>{$dataItems->symbol}</td>
				<td>\${$dataItems->bestAskPrice}</td>
                <td>{$dataItems->bestAskQty}</td>
                <td>\${$dataItems->bestBidPrice}</td>
                <td>{$dataItems->bestBidQty}</td>
				<td>\${$dataItems->close}</td>
				<td>\${$dataItems->high}</td>
				<td>\${$dataItems->lastSale}</td>
				<td>\${$dataItems->low}</td>
				<td>{$dataItems->netChg}</td>
				<td>\${$dataItems->open}</td>
				<td>{$dataItems->pcl}</td>
				<td>{$dataItems->vol}</td>
				<td>{$dataItems->date}</td>
				<td>{$dataItems->pctChg}</td>
				<td>{$dataItems->time}</td>
        </tr>

EOF;
}
echo '</table>';
?>