<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class applicantModel extends CI_Model 
{
  var $table = "stock";
  // var $table = "postmenu";

  function __construct()
  {
    parent::__construct();
    // $this->table = 'postmenu';
  }

  function getAll($limit = null)
  {
    if($limit != null)
    {
      $this->db->limit($limit['limit'],$limit['offset']);
    }
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->result();
    }
    return array();
  }

  function countAll()
  {
    return $this->db->count_all($this->table);
  }


  function addStock($data)
  {
    $this->db->insert($this->table,$data);
  }

  function update($data,$id)
  {
    $this->db->where("stock_id",$id);
    $this->db->update($this->table,$data);
  }


  function delete($id)
  {
    $this->db->where("stock_id",$id);
    $this->db->delete($this->table);
  }


  function getById($id)
  {
    $this->db->where("stock_id",$id);
    $q = $this->db->get($this->table);
    if($q->num_rows() > 0)
    {
      return $q->row();
    }
    return false;
  }

  // function updateStock($id){
  //   $this->db->select('stock_id')->from('stock')->where->('total_stock' = 'stock_out' + 'damage' + 'stock_in' + 'stock_remain');
  //   $query=$this->db->get();
  //   $sql = $query;
  //   $sql = 'UPDATE stock SET total_stock = stock_out+damage+stock_in+stock_remain';
  //   return $sql->result_array();

  //   $data['var1'] = "2";
  //   $data['var2'] = "4";

  //   $data['addTotal'] = $this->post1->add($data['var1'], $data['var2']);

  //   // 'SELECT stock_id, category_name, stock_name, total_stock, stock_in, damage, stock_remain, stock_out, date_posted 
  //   //    where
  //   //    total_stock = stock_out+damage+stock_in+stock_remain';
       

  // }

}


