<?php

class Order{

    public $order;//number

    public $orders = [];//array<string>

    public function create_order($order){//number
        $this->order = $order;
    }

    public function delete_order($order){//number
        $this->order = $order;
    }

    public function search_order($order){//number
        return $this->order = $order;
    }

    public function create_orders($order, $orders){//number, string
        $order = $this->search_order($order);

        $this->orders = $orders;
    }

}