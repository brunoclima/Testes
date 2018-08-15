<?php
abstract class AbstractSocialShare {

    /**  
    * Authentication token  
    */  
    protected $token;
    
    /**  
    * Get token  
    * @return string  
    */  
    public function getToken()  
    {  
        return $this->token;
    }
    
    /**  
    * Share  
    * @return bool  
    */  
    abstract public function share();
    
}  var_dump(get_class_methods('AbstractSocialShare'));


?>