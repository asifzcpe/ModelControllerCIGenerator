<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerModelGenerator extends CI_Controller {

/**
  * This controller is used to generate codeigniter controller
  * and model using command line
  * ------------------------------------------------------------------------------
  * For more information go https://github.com/asifzcpe/ModelControllerCIGenerator
  * ------------------------------------------------------------------------------
	*/
	public function controller($name){
    $this->make_controller_file($name);
	}

  public function make_controller_file($name){
    $path=APPPATH."controllers/$name.php";
    $make_controller=fopen($path,"w") or die('unable to create '.$name.php.' controller');
    $controller_template="<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

    class $name extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }
        public function index(){

        }
        public function create(){

        }
        public function save(){

        }
        public function show(\$id){

        }
        public function edit(\$id){

        }
        public function update(){

        }
        public function destroy(\$id){

        }
    }";

    fwrite($make_controller,$controller_template);
    fclose($make_controller);
    echo "$path controller has been created successfully".PHP_EOL;
  }
}
