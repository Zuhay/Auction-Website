<?php
require_once("Model/AuctionData.php");
require_once("Model/AuctionItemData.php");
require_once("Model/AuctionDataSet.php");
require_once("Model/ItemData.php");

$itemDataSet = new AuctionDataSet();
$itemDataSet = $itemDataSet->fetchAllItems();

//creating an array
$itemsArray = array();
foreach ($itemDataSet as $item){
    $itemsArray[] = array('id' =>$item->getItemId(), 'name' =>$item->getItemTitle());
}

$q = $_REQUEST["q"]; // Search query
$hint = "";

if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($itemsArray as $item) {
        $name = $item['name'];
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = "[". json_encode($item);
            } else {
                $hint .= "," . json_encode($item);
            }
        }
    }
    if ($hint != "") $hint .= "]";
}
// Output "no suggestion" if no hint was found or output results
echo $hint === "" ? "no suggestion" : $hint;