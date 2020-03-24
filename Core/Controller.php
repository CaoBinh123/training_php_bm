<?php
namespace Core;

    class Controller
    {
        public $vars = [];
        public $layout = "default";
        
        public function set($d) // set array
        {
            $this->vars = array_merge($this->vars, $d);
        }

        public function render($filename)
        {
            extract($this->vars);
            ob_start();
            $folder_name = str_replace("Controller", "", basename(get_class($this)));
            require(ROOT . "Views/" . $folder_name . "/" . $filename . ".php");
            $content_for_layout = ob_get_clean();
            if ($this->layout == false) {
                $content_for_layout;
            } else {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        protected function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value) {
                $form[$key] = $this->secure_input($value);
            }
        }
    }
