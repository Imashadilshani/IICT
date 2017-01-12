<?php


session_start();


//Including Files 
include_once '../../classes/dbcon.php';

//set validation error flag as false
//$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash_password = md5($password);


//echo $firstname;


// $sql= mysql_query("INSERT INTO login_details(username,password) VALUES('" . $username . "', '" . md5($password) . "')");
$sql=@mysql_query("SELECT * FROM student_registration WHERE email='".$email."' AND password='".$hash_password."' ");

$sql2=@mysql_query("SELECT * FROM admin WHERE email='".$email."' AND password='".$hash_password."' ");
//$sql1=@mysql_query("SELECT * FROM admin WHERE email='".$email."' AND password='".$hash_password."' ");


/*function validate1(){
    $this->db->select('*');
    $this->db->from('student_registration');

    $this->db->where('email', $this->input->post('email'));
    $this->db->where('password', $this->input->post('password'));

    $query=$this->db->get();

    if($query->num_rows()==1)
    {
        $row = $query->row_array();
        return $row;
    }
    else
    {
        return false;
    }
}

function validate2(){
    $this->db->select('*');
    $this->db->from('admin');

    $this->db->where('email', $this->input->post('email'));
    $this->db->where('password', $this->input->post('password'));

    $query=$this->db->get();

    if($query->num_rows()==1)
    {
        $row = $query->row_array();
        return $row;
    }
    else
    {
        return false;
    }
}


public function validate(){
    echo "aaa";
    $query1=$this->logDB->validate1();
    $query2=$this->logDB->validate2();

    if($query1){
        $data1=array(
            'email'=>$this->input->post('email'),
            'is_logged_in' =>true
            );
    $this->session->set_userdata($data1);
    redirect('../home');
    }

}
*/

//echo $sql;

$rows1 = @mysql_num_rows($sql);
$rows2 = @mysql_num_rows($sql2);

if{($rows1==1)
    if($rows1==1){
    echo "Logged in successful.";
    header("Location:../../pages/home.php");
	} else{
    echo "Wrong Credentials!!";
    header("Location:login.php"); /* Redirect browser */
	exit();
	}
}

else{
    echo "Logged in successful.";
    header("Location:../../pages/Admindashboard.php");
    } else{
    echo "Wrong Credentials!!";
    header("Location:login.php"); /* Redirect browser */
    exit();
    }
}

@mysql_close($con);
}
?>



