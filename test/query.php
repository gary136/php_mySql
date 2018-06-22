<?php // query.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM for_report_data_201801";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    echo '公司代號: ' . $result->fetch_assoc()['公司代號'] . '<br>';
    $result->data_seek($j);
    echo '公司名稱: ' . $result->fetch_assoc()['公司名稱'] . '<br>';
    $result->data_seek($j);
    echo '當月營收: ' . $result->fetch_assoc()['當月營收'] . '<br>';
    $result->data_seek($j);
    echo '上月營收: ' . $result->fetch_assoc()['上月營收'] . '<br>';
    $result->data_seek($j);
    echo '去年當月營收: ' . $result->fetch_assoc()['去年當月營收'] . '<br><br>';
}
$result->close();
$conn->close();
?>