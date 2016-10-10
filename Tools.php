<?php
ob_start();
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');
class Tools extends CI_Controller {
/**
  * This controller is used to generate codeigniter controller
  * and model using command line
  * ------------------------------------------------------------------------------
  * For more information go https://github.com/asifzcpe/ModelControllerCIGenerator
  * ------------------------------------------------------------------------------
  */
	public function api($name){
    	$this->make_controller_file($name);
			$this->make_model_file($name);
	}
  public function make_controller_file($name){
  	$controller_name=ucfirst($name)."Controller.php";
  	$controller_class=ucfirst($name)."Controller";
    $path=APPPATH."controllers/$controller_name";
    $make_controller=fopen($path,"w") or die('unable to create '.$controller_name.' controller');
    $controller_template="<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
    class $controller_class extends CI_Controller {
        public function __construct() {
            parent::__construct();
        }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		//

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  \$id
	 * @return Response
	 */
	public function show(\$id){
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  \$id
	 * @return Response
	 */
	public function edit(\$id){
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  \$id
	 * @return Response
	 */
	public function update(\$id){
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  \$id
	 * @return Response
	 */
	public function destroy(\$id){
		//
	}

    }";
    fwrite($make_controller,$controller_template);
    fclose($make_controller);
    echo "$path controller has been created successfully".PHP_EOL;
  }

	public function make_model_file($name){
		$model_name=ucfirst($name).".php";
  	$controller_class=ucfirst($name);
    $path=APPPATH."models/$model_name";
    $make_model=fopen($path,"w") or die('unable to create '.$model_name.' model');
    $model_template="<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
    class ".ucfirst($name)." extends CI_Model {
        public function __construct() {
            parent::__construct();
        }

    }";
    fwrite($make_model,$model_template);
    fclose($make_model);
    echo "$path model has been created successfully".PHP_EOL;
	}
}
ob_flush();
