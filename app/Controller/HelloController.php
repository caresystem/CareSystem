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
        $this->set('message', 'Hello World!!!');
    }
}