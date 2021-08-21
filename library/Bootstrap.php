<?php

/**
 * Description of Bootstrap
 *
 * @ prichard
 */
class Bootstrap
{
    private $view = "views";
    private $index = "index";
    private $page;
    private $homePage;
    private $mover;
    public function __construct()
    {
        @$this->page = strtolower(filter_var($_GET['page'], FILTER_SANITIZE_STRING));
        $this->content = new Content();
        $this->mover = new Mover();
        $this->homePage = "saassap-recruitment";
    }
    public function init()
    {
        $page =  $this->page;
        $content = $this->content;
        $mover = $this->mover;

        include "$this->view/header.php";
        if (!empty($this->page) && $this->page != $this->homePage) {
            file_exists("$this->view/$this->page/$this->index.php") ? include "$this->view/$this->page/$this->index.php" : include "$this->view/$this->homePage/$this->index.php";
        } else {
            include "$this->view/$this->homePage/$this->index.php";
        }
        include "$this->view/footer.php";
    }
}
