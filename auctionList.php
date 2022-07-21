<?php
require_once('Model/AuctionDataSet.php');

$view = new stdClass();
$view->pageTitle = 'Auction List';

//Making an instance of the model and calling its fetch method to get auction data
$auctionDataSet = new AuctionDataSet();
$view->auctionDataSet = $auctionDataSet->fetchAllAuctions();
require_once('View/auctionList.phtml');