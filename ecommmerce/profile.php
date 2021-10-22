<?php
ob_start();
session_start();
$pageTitle='profile page';
include 'init.php';
if(isset($_SESSION['user'])){
    $geta=$con->prepare("SELECT * FROM users WHERE username = ?");
    $geta->execute(array($_SESSION['user']));
    $row=$geta->fetch();
?>
<div class="container ">
    <div class="row align-items-center g-lg-5 co">
      <div class="col-lg-7 text-center text-lg-start">
      <h1 class="display-4 fw-bold lh-1 mb-3">profile settings</h1>

      </div>
<div class="card">
  <div class="card-header">
    Profile Information
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <?php 
    echo'<i class="fas fa-sign-in-alt"></i>';
echo 'login name' . " ".':' . $row['username'];echo'</br>';
echo '<i class="fas fa-envelope-square"></i>';
echo 'Email' . " ".':' . $row['Email'];echo'</br>';
echo'<i class="fas fa-file-signature"></i>';
echo 'Fullname' . " ".':' . $row['Fullname'];echo'</br>';
echo'<i class="fas fa-calendar-week"></i>';
echo 'RegDate' . " ".':' . $row['Date'];echo'</br>';
?>
</h5>
    <p class="card-text"></p>
    <a href="edit.php?do=edit" class="btn btn-primary">Go Update information</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
 Ads
  </div>
  <div class="card-body">
    <h5 class="card-title">
    <?php
foreach(getitems('member_id ',$row['userID']) as $item){
echo  '<div class="card" style="width: 18rem;">';
echo '<span class="prive-tag">'.$item['price'].'</span>';
echo '<div class="card-body">';
echo  '<h3 class="card-title">'.$item['name'].'</h3>';
echo   '<p class="card-text">'.$item['description'].'</p>';
echo    '<a href="#" class="btn btn-primary">Go somewhere</a>';
echo  '</div>';
echo '</div>';
}
?>
    </h5>
    <p class="card-text"></p>
    <a href="newad.php?do=Add" class="btn btn-primary">creat new ad</a>
  </div>
</div>
<div class="card">
  <div class="card-header">
  latsetcomment
  </div>
  <div class="card-body">
    <h5 class="card-title">
  <?php
  $stmt2=$con->prepare('SELECT comment FROM comment WHERE user_id = ? ');
    $stmt2->execute(array($row['userID']));
  $comment=$stmt2->fetchAll();
if(! empty($comment)){
  foreach($comment as $comme){
  echo '<p>' . $comme['comment'] .'</p>';
  }
}else{
  echo'sorry i cant find any comment to show';
}
?>
    </h5>
    <p class="card-text"></p>
  
  </div>
</div>
<?php
}else{
    header('Location:login.php');
    exit();
}
include  $tpl . 'footer.php';