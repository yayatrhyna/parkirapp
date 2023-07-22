<?php
class Datawork extends CI_Model{
	public function check_data($table,$array){
        $data = $this->db->where($array)->get($table);
        if($data->num_rows() > 0){
            return true;
        }
        else{
            false;
        }
    }
    public function insert_data($table,$array){
        $data = $this->db->insert($table,$array);
    }
    public function calling_data($table, $cond=NULL, $order=NULL){
        if($cond!=NULL){
            $this->db->where($cond);
        }
        if($order!=NULL){
            $key = implode("", array_keys($order));
            $value = implode("", array_values($order));
            $this->db->order_by($key, $value);
        }
        $data = $this->db->get($table);
        return $data->result();
    }
    public function search_data($table,$cond=NULL){
        $data = $this->db->or_like($cond)->get($table);
        return $data->result();
    }
    public function delete_data($table,$cond){
        $data = $this->db->delete($table,$cond);
        if($data){
            return true;
        }
        else{
            return false;
        }
    }
    public function update_data($table,$array,$cond=NULL){
        $this->db->update($table,$array,$cond);
    }
    public function count_data($table,$cond){
        $data = $this->db->where($cond)->get($table);
        return $data->num_rows();
    }
    
    public function column_sum($column,$table){
        $this->db->select_sum($column);
        $data = $this->db->get($table)->row();
        return $data->$column;
    }

    public function entry_report(){
        $now = date("Y-m-d");
        $data = [];
        for($i = 0; $i < 10; $i++){
            $date = date("Y-m-d", strtotime($now. "-{$i} days"));
            $entries = $this->db->query("SELECT COUNT(id) as `count` FROM `add_vehicle` where date(`arrival_time`) = '{$date}'")->row()->count;
            $entries = $entries > 0 ? $entries : 0;
            $data[]  = ['x'=>(strtotime($date)*1000), 'y'=> intval($entries), 'label' => date("M d, Y", strtotime($date))];
        }
        return $data;
    }

}
?>