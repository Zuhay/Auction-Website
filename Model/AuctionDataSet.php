<?php

require_once 'Model/Database.php';
require_once 'Model/AuctionData.php';
require_once 'Model/AuctionItemData.php';

class AuctionDataSet {

    protected $_dbConnection, $_dbInstance;

    public function __construct() {
        $this->_dbInstance = Database::getInstance();
        $this->_dbConnection = $this->_dbInstance->getDbConnection();
    }


    public function fetchAllAuctions()
    {
        $sqlQuery = 'SELECT * FROM aee008.auction';

        $statement = $this->_dbConnection->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new AuctionData($row);
        }
        return $dataSet;
    }

    public function fetchAllItems()
    {
        $sqlQuery = 'SELECT * FROM aee008.items';

        $statement = $this->_dbConnection->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new ItemData($row);
        }
        return $dataSet;
    }


    //fetches auction lots from the auction that matches  the given auctionID in the parameter
    public function fetchAuctionItems(){
        $sqlQuery = "SELECT * FROM aee008.auction, aee008.items WHERE auction._auctionId=items._auctionId";

        $statement = $this->_dbConnection->prepare($sqlQuery); // prepare a PDO statement
        $statement->execute(); // execute the PDO statement

        $dataSet = [];
        while ($row = $statement->fetch()) {
            $dataSet[] = new AuctionItemData($row);
        }
        return $dataSet;
    }
}