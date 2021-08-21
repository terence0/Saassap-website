<?php

/**
 * Description of Resource
 *
 * @author prichard
 */
class Content
{

    private $page;
    private $pageContent = array(
        "home" => array(
            "key" => "home",
            "name" => "Home",
            "description" => " ",
            "keywords" => ""
        ),
        "about" => array(
            "key" => "about",
            "name" => "About Us",
            "description" => "",
            "keywords" => ""
        ),
        "contact-us" => array(
            "key" => "contact-us",
            "name" => "Conatct",
            "description" => "contact",
            "keywords" => ""
        )
       
    );

    public function __construct()
    {
        $this->page = @filter_var($_GET['page'], FILTER_SANITIZE_STRING);
    }

    private function setPageContent($type = null)
    {
        return @$this->pageContent[$this->page][$type];
    }

    public function getPageName()
    {

        return $this->setPageContent("name");
    }

    public function getPageDescription()
    {

        return $this->setPageContent("description");
    }

    public function getPageKeyWords()
    {

        return $this->setPageContent("keywords");
    }


    public function getCurrentPage()
    {
        function url_origin($s, $use_forwarded_host = false)
        {
            $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on');
            $sp = strtolower($s['SERVER_PROTOCOL']);
            $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
            $port = $s['SERVER_PORT'];
            $port = ((!$ssl && $port == '80') || ($ssl && $port == '443')) ? '' : ':' . $port;
            $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
            $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
            return $protocol . '://' . $host;
        }

        function full_url($s, $use_forwarded_host = false)
        {
            return url_origin($s, $use_forwarded_host) . $s['REQUEST_URI'];
        }

        $absolute_url = full_url($_SERVER);

        $testurl = explode("/", $absolute_url);

        $current_url = $testurl[4];
        return $current_url;
    }
}