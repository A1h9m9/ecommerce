<?php
$pageTitle='members';
session_start();
if(isset($_SESSION['username'])){
   include 'init.php';
     
   if(isset($_GET['do'])){
    $do= $_GET['do'];
    
    }else{
        $do='manage';

    }
    //manage page;
    if($do =='edit'){
        $user=isset($_GET['userID']) && is_numeric($_GET['userID'])?  intval($_GET['userID']) : 0;

        // cheack the id is number and get the value id 
  
  
        $stmt=$con->prepare('SELECT * FROM users WHERE userID = ? LIMIT 1');
        $stmt -> execute(array($user));
        $row=$stmt->fetch();
        $count= $stmt->rowcount();
      if($count > 0){?> 
          <h1 class="text-center">Edit members</h1>
          <div class="container">
          <form class="form-horizontal" action="?do=Update" method="POST">
              <input type="hidden" name="userid" value="<?php echo $user ?>">
              <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo lang('USERNAME')?></label>
                  <div class="col-sm-10">
                      <input type="text" name="Username" value='<?php echo $row['username']?>' class="form-control"/>
              </div>
                      </div>
            
                      </div>
                      <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo lang('EMAIL')?></label>
                  <div class="col-sm-10">
                      <input type="text" name="email" value='<?php echo $row['Email']?>' class="form-control"/>
              </div>
                      </div>
                      <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo lang('FULLNAME')?></label>
                  <div class="col-sm-10">
                      <input type="text" name="fullname" value='<?php echo $row['Fullname']?>' class="form-control"/>
              </div>
                      </div>
                      <div class="form-group form-group-lg">
                  <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" value="save"  class="btn btn-outline-primary">
              </div>
                      </div>
                   </form>
                       </div>
                       <?php
    }else{
        
    }
}elseif($do == 'Update'){
    echo'<h1 class="text-center">Update members</h1>';
    echo "<div class='container'>";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['userid'];
        $username = $_POST['Username'];
        $email=$_POST['email'];
        $fullname=$_POST['fullname'];

        //validate the form;
        $formErrors=array();
        if(strlen($username) < 4){
            $formErrors[] = '<div class="alert alert-danger">you cant put the username less than 4 </div>';
        }
        if(strlen($username) > 7){
            $formErrors[] = '<div class="alert alert-danger">you cant put the username bigger than 7 </div>';
        }
        if(empty($username)){
            $formErrors[] = '<div class="alert alert-danger">you must put the username </div>';
        }
        if(empty($email)){
            $formErrors[] = '<div class="alert alert-danger">you must put the email address </div>';
        }
        if(empty($fullname)){
            $formErrors[] = '<div class="alert alert-danger">you must put your fullname </div>';
        }
        
        foreach($formErrors as $error){
            echo $error . '<br/>';
        }
        // no error Update;
        if(empty($formErrors)){
            $stmt2=$con->prepare("SELECT *  FROM  users  WHERE username = ?  AND  userID != ? ");
            $stmt2->execute(array($username, $id));
            $count=$stmt2->rowcount();
            if($count == 1){
                $errormassages = 'sorry this username is exist';
                up($errormassages, 2);
            }else{
                $stmt=$con->prepare("UPDATE users SET username = ?, Email = ?, Fullname = ?,  WHERE userID = ?");
                            $stmt->execute(array($username, $email, $fullname, $id));
                            if($stmt->rowcount() > 0){
                                $themassge=  'update your information is done!';
                                up($themassge, 2);
                            }
            }
      
            }

    }else{
    }
         $errormassages = 'sorry you cant browes this page';
         up($errormassages, 2);
    }
    echo "</div>";
}
