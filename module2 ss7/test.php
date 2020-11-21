<?php

public function insertAtFirst($data = NULL) {
    $newNode = new ListNode($data);
    if ($this->_firstNode === NULL) {
        $this->_firstNode = &$newNode;
    } else {
        $currentFirstNode = $this->_firstNode;
        $this->_firstNode = &$newNode;
        $newNode->next = $currentFirstNode;
    }
    $this->_totalNode++;
    return TRUE;
}