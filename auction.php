<?php

require_once('Model/AuctionDataSet.php');

$view = new stdClass();
$id = $_GET['id'];
$view->pageTitle = '-'.$id;
$view->id = $id;

//Making an instance of the model and calling its fetch method to get auction data
$auctionDataSet = new AuctionDataSet();
$view->auctionDataSet = $auctionDataSet->fetchAuctionItems($id);
require_once('View/auction.phtml');