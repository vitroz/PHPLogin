<?php
class Admin{
/* User Login */
public function userLogin($usernameEmail,$password)
{
try{
		$db = getDB();
		$hash_password= hash('sha256', $password); //Password encryption 
		$stmt = $db->prepare("SELECT uid FROM usuario_adm WHERE (name=:usernameEmail or email=:usernameEmail) AND pass=:hash_password"); 
		$stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
		$stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
		$stmt->execute();
		$count=$stmt->rowCount();
		$data=$stmt->fetch(PDO::FETCH_OBJ);
		$db = null;
		if($count){
			$_SESSION['uid']=$data->uid; // Storing user session value
			return true;
		}else{
			return false;
		} 
	}
	catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}';
	}

}

/* User Details */
public function userDetails($uid){
	try{
		$db = getDB();
		$stmt = $db->prepare("SELECT email,name FROM usuario_adm WHERE uid=:uid"); 
		$stmt->bindParam("uid", $uid,PDO::PARAM_INT);
		$stmt->execute();
		$data = $stmt->fetch(PDO::FETCH_OBJ); //User data
		return $data;
		}catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}';
		}
	}
}
?>