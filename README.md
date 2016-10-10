# ModelControllerCIGenerator
this can be used to create model and controller with predefined model and controller template using CLI like in laravel

# How to use the controller 
1. Download or clone the Tools.php file and keep it into your base controller folder 

2. go to cmd and browse your codeigniter folder 

3. run the following code on cmd:

  <code>php index.php tools api "your controller name"<code>
  
  That's it. A controller and a model of your given name have been created on your controller folder and model folder respectively
  
  For example: I write the following controller:
  <code>php index.php tools api "User"</code>
  It will create a controller name UserController.php and a model User.php 
  
  Note#1: This only works on MVC not on HMVC but Features for HMVC will be added soon as well as for creating model.
  <br>
  Note#2: If you are using any ACL technique, please register Tools controller to your ACL.
  
  
