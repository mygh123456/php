<?php
require_once "connet.php";
require_once 'mysqlconfig.php';
$ma1=new DB();
$link=$ma1->connect();
$id=$_POST['id'];
$password=$_POST['password'];
$confirmPassword=$_POST['confirmPassword'];
if($password!=$confirmPassword){
	echo "<script>alert('输入的密码和确认的密码不相等');location='register.php';</script>";;
}
$alt="select * from tbl_ms where username='$id'";
$res = $ma1->print1($link,$alt);
$preg_phone='/^1[34578]\d{9}$/ims';
 if(preg_match($preg_phone,$id))  {
if($id!=null&&$password!=null){
   $ma=new DB();
   $link=$ma->connect();
   $sql = "insert into tbl_ms (username,password) values('$id','$password')"; 
   for ($i=0; $i < count($res); $i++) {
	   if($id!=$res[$i]['username']){
	   $res = $ma->insert($link,$sql);
	   };
       if($id==$res[$i]['username']){
           echo "<script>alert('注册失败，该账号已被注册！');location='register.php';</script>";
       }
   }
}
else{
    echo "<script>alert('注册失败，请输入账号和密码');location='register.php';</script>";
}
}else{
   echo "<script>alert('注册失败，请使用手机号注册！');location='register.php';</script>";
}
?>