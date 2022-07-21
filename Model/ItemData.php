<?php


class ItemData{

    protected $_itemId, $_postingUser, $_itemTitle, $_itemMainDesc, $_startBidAmount, $_dateCreated, $_bidEndDate, $_itemEstPrice;

    public function __construct($dbRow) {

        $this->_itemId = $dbRow['_itemId'];
        $this->_postingUser = $dbRow['_postingUser'];
        $this->_itemTitle = $dbRow['_itemTitle'];
        $this->_itemMainDesc = $dbRow['_itemDesc'];
        $this->_startBidAmount = $dbRow['_startBidAmount'];
        $this->_dateCreated = $dbRow['_dateCreated'];
        $this->_bidEndDate = $dbRow['_bidEndDate'];
        $this->_itemEstPrice = $dbRow['_itemEstPrice'];
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

    public function getItemMainDesc() {
        return $this->_itemMainDesc;
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


}