<?php
/**
 * /app/Controller/HelloController.php
 */
class HelloController extends AppController
{    
    /**
     * index�A�N�V����
     */
    public function index() {
        $this->set('message', 'Hello World!!!');
    }
}