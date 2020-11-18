<?php

class Database{

  public static $INSTANCE = null;
  private $mysqli,
          $HOST = 'localhost',
          $USER = 'root',
          $PASS = '',
          $DBNAME = 'seminar';

  public function __construct(){ //otomatis dijalankan ketika membuat objek
    $this->mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DBNAME);
  }

  public static function getInstance(){
    if (!isset(self::$INSTANCE)) {
      self::$INSTANCE = new Database();
    }
    return self::$INSTANCE;
  }

  public function insert($table, $fields = array()){
    //ngambil kolom
    $column = implode(", ", array_keys($fields));

    //ngambil nilai
    $valuesArrays = array();
    $i = 0;
    foreach ($fields as $key => $values) {
      if (is_int($values)){
        $valuesArrays[$i] = $this->escape($values);
      }
      else{
        $valuesArrays[$i] = "'".$this->escape($values) ."'";
      }
      $i++;
    }

    $values = implode(", ", $valuesArrays);
    $query = "INSERT INTO $table ($column) VALUES ($values)";
    return $this->run_query($query, 'gagal memasukkan data');
  }

  public function get_info($table, $column, $value){
      if (!is_int($value))
        $value = "'". $value ."'";

      $query = "SELECT * FROM $table WHERE $column = $value";
      $result = $this->mysqli->query($query);
      while ($row = $result->fetch_assoc()){
        return $row;
      }
  }

  public function run_query($query, $msg){
    if ($this->mysqli->query($query)) return true;
    else die($msg);
  }

  public function escape($name){
    return $this->mysqli->real_escape_string($name);
  }
}

?>
