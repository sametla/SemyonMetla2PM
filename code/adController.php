<?php

class AdController{
    private MySQLdb $mySqlRepository;
    private Front $view;
    private bool $error = false;

    public function __construct()
    {
        $this->view = new Front();
        try {
            $this->mySqlRepository = new MySQLdb();
        }catch (mysqli_sql_exception $e){
            $this->error = true;
        }
    }

    public function isError():bool {
        return $this->error;
    }

    public function post(){
        $ad = new Ad ($_POST["email"],$_POST["category"],$_POST["title"],$_POST["description"]);
        $this->mySqlRepository->createAd($ad);
        $this->view->advertsDisplay($this->mySqlRepository->getAds());
    }

    public function get(){
        $this->view->advertsDisplay($this->mySqlRepository->getAds());
    }

}