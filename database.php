<?php
// load data
       $connection = \Drupal::database();
       $timestamp = $connection->query("SELECT s.timestamp FROM {node} s WHERE s.uid = :uid  AND nid =:nid ORDER BY s.timestamp DESC LIMIT 1", 
        [':uid' => $currentUser->id(),':nid' => $nid])->fetchField();