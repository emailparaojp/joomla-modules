<?php
defined('_JEXEC') or die;


Class ModCustomCarouselHelper{
    public static function getItems($params){
        $items = $params->get('items', []);
        $items = json_decode(json_encode($items), true);
        return $items;
    }
    
}