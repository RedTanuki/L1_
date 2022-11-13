<html>
    <head>
        <meta charset="UTF-8">
        <title>Пользователи</title>
    </head>
    <body>
<?php

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints as Assert;

class User 
{
    public $id;
    public $name;
    public $email;
    public $password;
	public $date_cr;

    // конструктор
    public function __construct($id, $name, $email, $password)
    {
        
            $this->id = $id; 
            $this->name = $name; 
            $this->email = $email;
            $this->password = $password;
        
        echo '<p></p>';
    }
	
	public function validation(){
		$validator = Validation::createValidator();
		$constraint = new Collection([    
			'id' => new Assert\Regex('/^[0-9]-_+$/'),
			'name' => new Assert\Regex('/^[A-Za-z]+\s[A-Za-z]+$/u'),   	
			'email' => new Assert\Email(),
			'password' => [
				new Assert\NotBlank(),
				new Assert\Length(['min' => 7]),
				new Assert\Length(['max' => 64])
			]
		]);
		$violations = $validator->validate($form, $constraint);
		$errors = [];
		if (0 !== count($violations)) {
			foreach ($violations as $violation) {
				$errors[] = array($violation->getPropertyPath() => $violation->getMessage()); //!
				//$errors[] = $violation->getPropertyPath() . ' : ' . $violation->getMessage();
			}
		}
		return $errors;
	}
	
	public function getTime(){
		return $date_cr = date("d.m.Y H:i:s", time());
    } 
}

class Comment {
	public $user;
	public $comment;
	public function __construct($user, $comment){
		$this->user=$user;
		$this->comment=$comment;   
	}  
}

var_dump($var1 = new User(1, 'Anna Anin', 'anna@ne.com', '1s2345678'));
var_dump($var1->getTime());
var_dump($var2 = new User(11111111, 'I!!', 'ii@ii@com', '1234'));
var_dump($var2->getTime());
//$var2->validation();
var_dump($var3 = new User(2, 'Anton Anin', 'anton@ne.com', 'ant345678'));
$comment1=new Comment($var1,'hello, world');
$comment2=new Comment($var2,'hey');
$array[0]=$comment1;
$array[1]=$comment2;
$time=mktime(0,0,0,13,11,2022);

foreach ($array as $all){
  $time1=time($var1->getTime());
	if(($time1-$time)>0){
	echo comment."<br/>";
	}
}
        ?>
    </body>
</html>

