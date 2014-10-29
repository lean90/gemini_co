<?php
namespace services;

use repository\RepositoryTurn;
use repository\RepositoryRoom;
use models\Entities\Turn;
use repository\RepositoryUser;
class ServiceMatching extends ServiceBase {
    /**
     * 
     * @var RepositoryRoom
     */
    protected $repositorRoom;
    
    /**
     * 
     * @var RepositoryTurn
     */
    protected $repositoryTurn;
   
    /**
     * 
     * @var ServiceGenerateResult
     */
    protected $serviceGenerateResult;
    
    /**
     * 
     * @var RepositoryUser
     */
    protected $repositoryUser;
    
    /**
     * 
     * @param RepositoryRoom $repositorRoom
     * @param RepositoryTurn $repositoryTurn
     */
    function __construct(RepositoryRoom $repositorRoom,RepositoryTurn $repositoryTurn,ServiceGenerateResult $serviceGenerateResult ){
        $this->repositorRoom = $repositorRoom;
        $this->repositoryTurn = $repositoryTurn;
        $this->serviceGenerateResult = $serviceGenerateResult;
    }
    
    /**
     * 
     */
    private function MatchingTurn($turnId){
        
    }
}
?>