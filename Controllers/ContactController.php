<?php
require_once ROOT_PATH.'Controllers/Controller.php';
require_once ROOT_PATH. 'Models/Contact.php';
class ContactController extends Controller
{
    public function index(){
        $errorMessages = $_SESSION['errorMessages'] ?? [];
        $post = $_SESSION['post'] ?? [];

        $contactModel = new Contact();
        $allContacts = $contactModel->getAllContacts();

        $_SESSION['errorMessages'] = [];
        $_SESSION['post'] = [];
        $this->view('contact/index',['errorMessages' => $errorMessages, 'post' => $post, 'allContacts' => $allContacts]);
    }

    public function confimation(){

        if (empty($_POST['name'])) {
            $errorMessages['name'] = '氏名を入力してください。';
        }

        if (mb_strlen($_POST['name']) > 10) {
            $errorMessages['name'] = '氏名は10文字以内になるよう入力してください';
        }

        if (empty($_POST['kana'])) {
            $errorMessages['kana'] = 'フリガナを入力してください。';
        }

        if (mb_strlen($_POST['kana']) > 10) {
            $errorMessages['kana'] = 'フリガナは10文字以内になるよう入力してください';
        }

        if (empty($_POST['email'])) {
            $errorMessages['email'] = 'メールアドレスを入力してください。';
        }

        if (!empty($_POST['tel']) && !preg_match('/^[0-9]+$/', $_POST['tel'])){
            $errorMessages['tel'] = '電話番号は数字で入力しください';
        }
        
        if (empty($_POST['body'])) {
            $errorMessages['body'] = 'お問い合わせ内容を入力してください';
        }

        if (!empty($errorMessages)) {
            // バリデーション失敗
            $_SESSION['errorMessages'] = $errorMessages;
            $_SESSION['post'] = $_POST;
            header('Location: /contact/index');
        } else {
            $_SESSION['post'] = $_POST;

            $errorMessages = $_SESSION['errorMessages'] ?? [];
            $post = $_SESSION['post'] ?? [];
            $_SESSION['errorMessages'] = [];
            $_SESSION['post'] = [];
            $_SESSION['errorMessages'] = $errorMessages;
            $errorMessages = [];
            

            $this->view('contact/confimation', ['errorMessages' => $errorMessages, 'post' => $post]);
            
        }
    }
    public function create(){
        $contact = new Contact;
        $result = $contact->create(
            $_POST['name'],
            $_POST['kana'],
            $_POST['tel'],
            $_POST['email'],
            $_POST['body']
        );

        $this->view('contact/create-complete');
        
    }
    public function edit(){

        $errorMessages = $_SESSION['errorMessages'] ?? [];
        $post = $_SESSION['post'] ?? [];
        $_SESSION['errorMessages'] = [];
        $_SESSION['post'] = [];

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            $id = $_SESSION['id'];
        }

        $contact = new Contact;
        $result = $contact->getContactById($id);


        if(empty($errorMessages))
        {
            $this->view('contact/edit', ['data' => $result]);
        }else{
            $this->view('contact/edit', ['data' => $post, 'errorMessages' => $errorMessages]);
        }
    }
    public function update(){
        $id = $_POST['id'];
        $_SESSION['post'] = $_POST;
        $errorMessages = $_SESSION['errorMessages'] ?? [];
        $post = $_SESSION['post'] ?? [];
        $_SESSION['errorMessages'] = [];
        $_SESSION['post'] = [];
        $_SESSION['errorMessages'] = $errorMessages;
        $errorMessages = [];
        
        

        if (empty($_POST['name'])) {
            $errorMessages['name'] = '氏名を入力してください。';
        }

        if (mb_strlen($_POST['name']) > 10) {
            $errorMessages['name'] = '氏名は10文字以内になるよう入力してください';
        }

        if (empty($_POST['kana'])) {
            $errorMessages['kana'] = 'フリガナを入力してください。';
        }

        if (mb_strlen($_POST['kana']) > 10) {
            $errorMessages['kana'] = 'フリガナは10文字以内になるよう入力してください';
        }

        if (empty($_POST['email'])) {
            $errorMessages['email'] = 'メールアドレスを入力してください。';
        }


        if (!empty($_POST['tel']) && !preg_match('/^[0-9]+$/', $_POST['tel'])){
            $errorMessages['tel'] = '電話番号は数字で入力しください';
        }
        
        if (empty($_POST['body'])) {
            $errorMessages['body'] = 'お問い合わせ内容を入力してください';
        }

        if (!empty($errorMessages)) {
            $_SESSION['errorMessages'] = $errorMessages;
            $_SESSION['post'] = $_POST;
            $_SESSION['id'] = $id;
            header('Location: /contact/edit');
        } else {
            $contact = new Contact;
            
            $result = $contact->update(
                $_POST['id'],
                $_POST['name'],
                $_POST['kana'],
                $_POST['tel'],
                $_POST['email'],
                $_POST['body']
            );
            if($result === true){
                header('Location: /contact/index');
                exit();
            }
        }     
    }
    public function delete(){
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
        } else {
            $id = $_SESSION['id'];
        }
        $contact = new contact;
        $contact->deleteContactById($id);
        header('Location: /contact/index');
        exit();
    }
}