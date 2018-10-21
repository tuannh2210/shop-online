<?php
namespace App\Controller;

use App\Model\ForgotPassword;
use App\Model\User;
use App\Controller\BaseController;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ForgotPasswordController extends BaseController
{
	function forgotPassword(){
		
		return $this->render("auth/forgot-password");
	}
	function sendForgotEmail(){
		$email = $_POST['email'];
		$user = User::where(['email', '=', $email])->first();
		if(!$user){
			 header('location: ' . getUrl("forgot-password?msg= Da gui email, ban vui long kiem tra de lay lai mat khau "));
			die;
		}
		$forgotModel = ForgotPassword::where(['email', '=', $email])->first();
		if($forgotModel){
			$forgotModel->delete();
		}
		$forgotModel = new ForgotPassword();
		$forgotModel->email = $email;
		$token = md5($email.microtime());
		$forgotModel->token = $token;
		$forgotModel->created_date = date('Y-m-d H:i:s'); 
		$forgotModel->created_date=time();
		$b = time();
		$forgotModel->insert();

		$mail = new PHPMailer(true);

		$email = $email; // email nhan 
		$name = $user->name; // ten ng nhan
		$email_from = 'tuannhph04848@fpt.edu.vn'; // email gui va nhan reply
		$name_from = 'Admin';
		$email_reply = 'tuannh2210@gmail.com';
		$name_reply = 'tuan'; 

		try {
		    //Server settings
		    // $mail->SMTPDebug = 3;                                 // Enable verbose debug output
		    $mail->isSMTP();// Set mailer to use SMTP
		    $mail->Host = "smtp.gmail.com";// Specify main and backup SMTP servers
		    $mail->SMTPAuth = true; // Enable SMTP authentication
		    $mail->Username = 'tuannhph04848@fpt.edu.vn';                 // SMTP username
		    $mail->Password = 'Deonoi123'; // SMTP password
		    $mail->SMTPSecure = "ssl"; // Enable TLS encryption, `ssl` also accepted
		    $mail->Port=465;
		    //Recipients
		 	$mail->AddAddress($email, $name);
			$mail->SetFrom($email_from, $name_from);
		    $mail->addReplyTo('tuannh2210@gmail.com', 'Tuanth');
		    //Attachments
		    // $mail->addAttachment('./public/img/1.jpg');         // Add attachments
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Test send email from localhost';
		    $mail->Body = '
	            <h1>Hello '.$user->name.'</h1>
	            <strong>Bấm vào đay để thay đỏi mật khẩu</strong><br>
	            <a href="'.getUrl('reset-password?token='.$token).'">Click hear</a>
	            <p>Duong dan nay chi ton tai trong 24gio.</p>
	      	';
	        
		    $mail->send();
			 header('location: ' . getUrl("forgot-password?msg=Message has been sent "));
		} catch (Exception $e) {
		    echo 'Message could not be sent.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		}
	}
	
	function resetPass(){
		$token = $_GET['token'];
		$forgotModel = ForgotPassword::where(['token', '=', $token])->first();
		return $this->render('auth/reset-pass', compact('token','forgotModel'));


		// kiểm tra thời gian hiện tại và thời gian created_date có nhiều hơn 24h hay không?
		// nếu lớn hơn thì đưa ra thông báo link này đã hết hạn
		// nếu nhỏ hơn 24h thì tiến hành hiển thị form để người dùng tạo mật khẩu mới đi kèm với hidden field chứa token
		
		// submit form để đổi mật khẩu của người dùng. Nhớ cần mã hóa md5
	}
	function saveResetPass(){
		$forgotModel = ForgotPassword::findOne($_POST['token']);
		$forgotModel->password = $_POST['password'];
		$model->update();
		return $this->redirect("login");
	}
}
  ?>
