<?php
    class Item extends CI_Model{
        
        private $query = "SELECT * FROM items";

        function fetch_all_items(){
            return $this->db->query($this->query .= " ORDER BY price")->result_array();
        }

        function search($inputs){
            
            if(array_key_exists('name', $inputs) && count($inputs) == 2){
                $this->query .= " WHERE name LIKE '%{$inputs['name']}%'";
            }

            if(array_key_exists('name', $inputs) && array_key_exists('min', $inputs) && array_key_exists('max', $inputs) && count($inputs) == 4){
                $this->query .= " WHERE name LIKE '%{$inputs['name']}%' AND (price >= {$inputs['min']} AND price <= {$inputs['max']})";
            }

            if(array_key_exists('min', $inputs) && array_key_exists('max', $inputs) && count($inputs) == 3){
                $this->query .= " WHERE (price >= {$inputs['min']} AND price <= {$inputs['max']})";
            }

            if(array_key_exists('min', $inputs) && count($inputs) == 2){
                $this->query .= " WHERE price >= {$inputs['min']}";
            }

            if(array_key_exists('max', $inputs) && count($inputs) == 2){
                $this->query .= " WHERE price <= {$inputs['max']}";
            }

            if(array_key_exists('name', $inputs) && array_key_exists('min', $inputs) && count($inputs) == 3){
                $this->query .= " WHERE name LIKE '%{$inputs['name']}%' AND price >= {$inputs['min']}";
            }

            if(array_key_exists('name', $inputs) && array_key_exists('max', $inputs) && count($inputs) == 3){
                $this->query .= " WHERE name LIKE '%{$inputs['name']}%' AND price <= {$inputs['max']}";
            }
            
            return $this->db->query($this->query .= " ORDER BY price {$inputs['order']}")->result_array();
        }
    }
?>