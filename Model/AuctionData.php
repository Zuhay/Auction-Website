<?php


class AuctionData
{
    protected $_auctionId, $_auctionName, $_auctionAddress, $_auctionStartDate;

    public function __construct($dbRow) {
        $this->_auctionId = $dbRow['_auctionId'];
        $this->_auctionName = $dbRow['_auctionName'];
        $this->_auctionAddress = $dbRow['_auctionAddress'];
        $this->_auctionStartDate = $dbRow['_auctionStartDate'];
    }

    public function getAuctionId() {
        return $this->_auctionId;
    }

    public function getAuctionName() {
        return $this->_auctionName;
    }

    public function getAuctionAddress() {
        return $this->_auctionAddress;
    }

    public function getAuctionStartDate() {
        return $this->_auctionStartDate;
    }


}