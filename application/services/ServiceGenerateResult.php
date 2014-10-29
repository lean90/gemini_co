<?php
namespace services;

class ServiceGenerateResult extends ServiceBase {
    /**
     * 
     * @var int
     */
    protected $sumIn;
    
    /**
     * 
     * @var array
     */
    protected $contains;
    
    /**
     * 
     * @var int
     */
    protected $maximun;
    
    /**
     * maximun Executed time
     * @var int
     */
    protected $executeTime;
	/**
     * @return the $sumIn
     */
    public function getSumIn( ){
        return $this->sumIn;
    }

	/**
     * @return the $contains
     */
    public function getContains( ){
        return $this->contains;
    }

	/**
     * @return the $maximun
     */
    public function getMaximun( ){
        return $this->maximun;
    }

	/**
     * @return the $executeTime
     */
    public function getExecuteTime( ){
        return $this->executeTime;
    }

	/**
     * @param number $sumIn
     */
    public function setSumIn($sumIn){
        $this->sumIn = $sumIn;
    }

	/**
     * @param multitype: $contains
     */
    public function setContains($contains){
        $this->contains = $contains;
    }

	/**
     * @param number $maximun
     */
    public function setMaximun($maximun){
        $this->maximun = $maximun;
    }

	/**
     * @param number $executeTime
     */
    public function setExecuteTime($executeTime){
        $this->executeTime = $executeTime;
    }

    /**
     * 
     * @param integer $sumIn
     * @param array $contains
     * @param integer $maximun
     * @param integer $executeTime
     */
    function getMactingResult($sumIn, $contains, $maximun, $executeTime){
        $this->sumIn = $sumIn;
        $this->contains =  $contains;
        $this->maximun = $maximun;
        $this->executeTime = $executeTime;
        $arr = array();
        while(count($arr) < 80){
            $integer = $this->ramdom();
            if(!in_array($integer, $arr)){
                array_push($arr, $integer);
            }
        }
    }
    
    function ramdom(){
        return rand(1,80);
    }
}
?>