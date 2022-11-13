<html>
    <head>
        <meta charset="UTF-8">
        <title>Пользователи</title>
    </head>
    <body>
        <?php
		//require_once (__DIR__).'/../vendor/autoload.php';
		require_once 'user.php';
		require_once 'comment.php';
		$var5 = new User(1, 'Anna Anin', 'anna@ne.com', '1s2345678');
		var_dump($var5->getTime());
$var6 = new User(11111111, 'I!!', 'ii@ii@com', '1234');
//var_dump($var2->getTime());
$var7 = new User(2, 'Anton Anin', 'anton@ne.com', 'ant345678');
/*var_dump($var3->getTime());
		/*$var1 = new User(1, 'Anna Anin', 'anna@ne.com', '1s2345678');
		//$validator->validate($user1);
		$var2 = new User(11111111, 'I!!', 'ii@ii@com', '1234');
		$var3 = new User(2, 'Anton Anin', 'anton@ne.com', 'ant345678');
		$var1->getTime();
		$var2->getTime();
		$comment1=new Comment($var1,'hello, world');
		$comment2=new Comment($var2,'hey');
		$array[0]=$comment1;
		$array[1]=$comment2;
		//$time=mktime(09,10,00,10,10,2022);
		foreach ($array as $a){
          $time1=time($a->user->date_create);
            if(($time1-$time)>0){
            echo $a->comment."<br/>";
            }
		}*/
        ?>
    </body>
</html>