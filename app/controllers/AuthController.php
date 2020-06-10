<?php


class AuthController extends Controller
{
    public function __construct(){
        $this->userModel = $this->model('User');
        
    }

    public function faker(){
        //        require the model
        require_once '../vendor/autoload.php';
        $faker = Faker\Factory::create();

        echo $faker->name . "\n";
        echo $faker->address . "\n";
    }

    public function register(){
        //writerRedirect();
//        check for post method
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//            process form data
            // echo "nishan";
            // exit();


//            Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'email' => trim($email),
                'pass' => $pass,
                'role' => $role,
                'email_err' => '',
                'pass_err' => '',
            ];
            // print_r($data);
            // exit();

//            validation
//            Validate name
            if (empty($name)){
                $data['name_err'] = 'Please enter name';
            }
//            validate email
            if (empty($email)){
                $data['email_err'] = 'Please enter email';
            }elseif ($this->userModel->checkEmail($email)){
                $data['email_err'] = 'This email already exists';
            }
//            validate password
            if (strlen($pass) < 6){
                $data['pass_err'] = 'Password must be atleast 6 characters';
            }

//            checking if errors are empty
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['pass_err'])){
//                Validated
//                password hash
                $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);
                echo "<pre>";
                print_r($data);
                echo "</pre>";
                exit();


//                Register User
                if ($this->userModel->register($data)){
//                    Success
                    header('location: /backend/dashboard');
                }else{
                    die('Something went wrong');
                }

            }else{
//                Load view with errors
                $this->view('/backend/signup', $data);
            }

        }
        else{
            $this->view('/backend/signup');
        }
    }
    public function login(){
        writerRedirect();
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//            Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            extract($_POST);
            $data = [
                'email' => trim($email),
                'pass' => $pass,
                'email_err' => '',
                'pass_err' => '',
            ];

//            validation
//            validate password
            if (empty($pass)){
                $data['pass_err'] = 'Please enter password';
            }
//            validate email
            if ($this->userModel->checkEmail($data['email'])){
                //user found
//                check if there's no error
                if (empty($data['pass_err'])){
                    $loggedInUser = $this->userModel->login($data['email'], $data['pass']);

                    if ($loggedInUser){
//                        create session
                        createAdminSession($loggedInUser);

//                        redirect to dashboard
                        header('location: /backend/dashboard');

                    }else{
                        $data['pass_err'] = 'Incorrect Password';
                    }
                }
            }else{
                $data['email_err'] = 'This email doesn\'t exist';
            }


//            checking if errors are empty
            if (empty($data['email_err']) && empty($data['pass_err'])){
                die('Success');
            }else{
//                Load view with errors
                $this->view('/backend/login', $data);
            }
        }else{
            $data = [
                'email' => '',
                'email_err' => '',
                'pass_err' => '',
            ];
            $this->view('/backend/login', $data);
        }
    }

}