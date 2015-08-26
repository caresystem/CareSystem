<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{    
    /**
     * indexアクション
     */
    public function index() {
        $this->set('buttonName', 'スロットをまわす！');
        
        for($i=0;$i<3;$i++){  
           $numberArray[$i] = rand(1,9);  
        }  
        $this->set('numberArray', $numberArray);
    }
}