<?php

class AuctionItemData{

    protected $_auctionId, $_auctionName, $_auctionAddress, $_auctionStartDate, $_itemId;
    protected $_postingUser, $_itemTitle, $_itemDesc, $_startBidAmount, $_dateCreated;
    protected $_bidEndDate, $_itemEstPrice, $_imageId;

    public function __construct($dbRow) {

        $this->_auctionId = $dbRow['_auctionId'];
        $this->_auctionName = $dbRow['_auctionName'];
        $this->_auctionAddress = $dbRow['_auctionAddress'];
        $this->_auctionStartDate = $dbRow['_auctionStartDate'];
        $this->_itemId = $dbRow['_itemId'];
        $this->_postingUser = $dbRow['_postingUser'];
        $this->_itemTitle = $dbRow['_itemTitle'];
        $this->_itemDesc = $dbRow['_itemDesc'];
        $this->_startBidAmount = $dbRow['_startBidAmount'];
        $this->_dateCreated = $dbRow['_dateCreated'];
        $this->_bidEndDate = $dbRow['_bidEndDate'];
        $this->_itemEstPrice = $dbRow['_itemEstPrice'];
        $this->_imageId = $dbRow['_imageId'];
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

    public function getItemId() {
        return $this->_itemId;
    }

    public function getPostingUser() {
        return $this->_postingUser;
    }

    public function getItemTitle() {
        return $this->_itemTitle;
    }

    public function getItemDesc() {
        return $this->_itemDesc;
    }

    public function getStartBidAmount() {
        return $this->_startBidAmount;
    }

    public function getDateCreated() {
        return $this->_dateCreated;
    }

    public function getBidEndDate() {
        return $this->_bidEndDate;
    }

    public function getItemEstPrice() {
        return $this->_itemEstPrice;
    }

     public function getImageId() {
         return $this->_imageId;
     }


}