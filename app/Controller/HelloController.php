<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{    
    /**
     * indexƒAƒNƒVƒ‡ƒ“
     */
    public function index() {
        $this->set('message', 'Hello World!!!');
    }
}