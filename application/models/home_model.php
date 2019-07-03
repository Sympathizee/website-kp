<?php
class home_model extends CI_Model{  
  function clogin($table,$where){
     return $this->db->get_where($table,$where);
  }

  function cloginAdmin($table,$where){
     return $this->db->get_where($table,$where);
  }

  function register($dataUser){
    $this->db->insert('user',$dataUser);
  }

  function addObat($dataUser){
    $this->db->insert('obat',$dataUser);
  }

  function isDuplicate($email){     
    $this->db->get_where('user', array('emailUser' => $email), 1);
    return $this->db->affected_rows() > 0 ? TRUE : FALSE;         
  }

  function insertTransaksi($dataTransaksi){
    $this->db->insert('transaksi',$dataTransaksi);
  }

  function insertTransaksiResep($dataTransaksi){
    $this->db->insert('transaksiResep',$dataTransaksi);
  }

  function getQtyItem($id){
    $this->db->select('banyakObat')
          ->from('shoes')
          ->where('shoeId =',$id);
    return $this->db->get()->row();
  }

  function getLenUser(){
    return $this->db->get('user')->num_rows();
  }

  function getLenObat(){
    return $this->db->get('obat')->num_rows();
  }

  function getLenResep(){
    return $this->db->get('transaksiResep')->num_rows();
  }

  function getLenTransaksi(){
    return $this->db->get('transaksi')->num_rows();
  }

  function getTransaksi(){
    $this->db->select('*')
          ->from('transaksi')
          ->join('obat','idObat')
          ->where('idUser',$this->session->userdata('id'));
    return $this->db->get();
  }

  function getTransaksiResep(){
    return $this->db->get('transaksiResep');
  }

  function getItem(){
    $this->db->select('*')
    ->from('obat');
    return $this->db->get();
  }

  function getSearch($search){
    $this->db->select('*')->from('obat')->like('namaObat',$search);
    return $this->db->get();
  }

  function getTable($table){
    $this->db->select('*')->from($table);
    return $this->db->get();
  }
  function getLast($table,$key,$select){
    $this->db->select($select)->from($table)->order_by($key,'desc')->limit(1);
    return $this->db->get();
  } 

  function updateObat($data){
    return $this->db->replace('obat' , $data);
  }
  function deleteObat($id){
    $this->db->delete('obat', array('idObat' => $id));
  }

  function updateStatus($data){
    return $this->db->replace('transaksi', $data);
  }

}
?>