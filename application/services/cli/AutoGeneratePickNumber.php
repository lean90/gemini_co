<?php
namespace services\cli;
/**
 * Giải thuật sắp xếp chỉnh hợp
 * Chỉ có thể lấy sắp xếp 20 chữ số
 * Chỉnh hợp k phần tử trong tập n. 
 * @author ANLT
 * @since 20141020
 */
class AutoGeneratePickNumber {
    public $n = 80, $k = 20;
    public $a = array(), $c = array();
    public  $count = 0;
    
    /**
     * db instance
     * @var \Doctrine
     */
   protected $db;
   function __construct(\Doctrine $db){
       $this->db = $db;
   }
   
   function start(){
       for($i = 0; $i<= $this->n;$i++){
            array_push($this->a, $i+1);
       }
       array_push($this->c, $this->a[0]);
       $this->tr(1);
   }
   
    function tr($num){
       for($i = $num ; $i < $this->n ; $i++){
           if(in_array($this->a[$i], $this->c) || $this->a[$i] < $this->c[$num-1]){
                continue;
           }
           if($num == $this->k){
               $this->exportResult();
               return;
           }else{
                $this->c[$num] = $this->a[$i];
                $this->tr($num+1);
           }
       }
    }
    
    function exportResult(){
        $this->count++;
        $ar = implode(",",$this->c);
        //TODO: insert database;
        $countFormat = number_format($this->count);
        echo "Have : {$countFormat} Records - {$ar}\r";
    }
   
}
?>