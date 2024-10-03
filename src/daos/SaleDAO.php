<?php

class SaleDAO{

    public function create(Sale $sale){

        $sql = "UPDATE cards SET status = 1 WHERE id = $sale->card_id";
        DB::execute_query($sql);
        
        $sale->created_at = date('Y-m-d H:i:s');
        $sale->updated_at = date('Y-m-d H:i:s');

        $amount = $sale->amount * 100;

        $sql = "INSERT INTO sales (card_id, amount, created_at, updated_at) VALUES ($sale->card_id, $amount, '$sale->created_at', '$sale->updated_at')";
        DB::execute_query($sql);
    }
}