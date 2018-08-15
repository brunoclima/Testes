<?php
class Entity {

    protected $meta;
    
    public function __construct(array $meta)  
    {  
        $this->meta = $meta;  
    }
}
    
class Tweet extends Entity {
    
    protected $id;  
    protected $text;
    
    public function __construct($id, $text, array $meta)  
    {  
        $this->id = $id;  
        $this->text = $text;
    
        parent::__construct($meta);  
    }
}
?>