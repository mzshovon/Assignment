<?php
    /*
     * Main core class
     * Creates URL and loads core controller
     * */


    class Core{
        protected $currentController = 'FrontendController';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
//            print_r($this->getUrl());
            $url = $this->getUrl();

            //echo 'Session Language : '. $_SESSION["lang"];
            //echo "<br>";
            //echo 'Session url : '. $url;
            //print_r($url);
            //exit();

            //get params
            if(is_array($url)) {
                $this->params = $url ? array_values($url) : [];
            }

//            checks for the controller from url[0]
            if(is_array($url)) {
                if (file_exists('../app/controllers/' . ucwords($url[0]) . 'Controller.php')) {
//                if controller exists set current controller
                    $this->currentController = ucwords($url[0]) . 'Controller';
                    unset($url[0]);
                }
            }

//            require current controller
            require_once '../app/controllers/'. $this->currentController . '.php';

            //Instatiate the controller
            $this->currentController = new $this->currentController;

//            check for methods from url[1]
            if(is_array($url)) {
                if (isset($url[1])) {
                    //check to see if method exists in controller
                    if (method_exists($this->currentController, $url[1])) {
                        $this->currentMethod = $url[1];
                        unset($url[1]);
                    }else{
                        $this->currentMethod = 'Return404Page';
                    }
                }
            }elseif($url != null){
                if (isset($url)) {
                    //check to see if method exists in controller
                    if (method_exists($this->currentController, $url)) {
                        $this->currentMethod = $url;
                        unset($url);
                    }else{
                        $this->currentMethod = 'Return404Page';
                    }
                }

            }


            //call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        }

        public function getUrl(){
            if (isset($_GET['url'])){
                if(!isset($_SESSION)){
                    session_start();
                }
                $url = $_GET['url'];
                $length = strlen($url);
                if($length <= 2){
                    if($url == 'en'){
                        $_SESSION["lang"] = "en";
                    }elseif ($url == 'ar'){
                        $_SESSION["lang"] = "ar";
                    }else{
                        $_SESSION["lang"] = "en";
                    }
                }else {
                    if (preg_match("/en+\//", $url)) {
                        $_SESSION["lang"] = "en";
                        $url = str_replace("en/", "", $url);
                    }
                    else if (preg_match("/ar+\//", $url)) {
                        $_SESSION["lang"] = "ar";
                        $url = str_replace("ar/", "", $url);
                    } else {
                        $_SESSION["lang"] = "en";
                    }
                    $url = $this->sanitizeUrl($url);
                }
                return $url;
            }else{
                if(!isset($_SESSION)){
                    session_start();
                }
                $_SESSION["lang"] = "en";

            }
        }
        public function sanitizeUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            if (strpos($url, '/') !== false) {
                $url = explode('/', $url);
            }
            return $url;
        }
    }