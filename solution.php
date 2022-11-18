<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $rest = 0;
        $listNode = new ListNode(0);
        $node = $listNode;
        while (isset($l1->val) || isset($l2->val) || $rest === 1) {
            $a = $l1 instanceof ListNode ? $l1->val : 0;
            $b = $l2 instanceof ListNode ? $l2->val : 0;

            $suma = $a + $b + $rest;
            $rest = intval($suma / 10);
            $suma = $suma % 10;
                        
            $node = $node->next = new ListNode($suma);
            
            $l1 = $l1 instanceof ListNode ? $l1->next : null;
            $l2 = $l2 instanceof ListNode ? $l2->next : null;
        }
        
        return $listNode->next;
    }
}
