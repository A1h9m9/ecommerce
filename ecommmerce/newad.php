<?php
ob_start();
session_start();
$pageTitle='items';
if(isset($_SESSION['username'])){
   include 'init.php';
   if(isset($_GET['do'])){
    $do= $_GET['do'];
    }else{
        $do='Add';
    }

    //manage page;
    if($do =='Add'){?>
        <!-- start name -->
        <h1 class="text-center">Add new items</h1>
        <div class="container">
        <form class="form-horizontal" action="?do=Insert" method="POST">
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('name')?></label>
                <div class="col-sm-10">
                    <input type="text" name="name"  class="form-control" placeholder=" name the item" /> 
            </div>
                    </div>
                    <!-- end name -->
                    
         <!-- start  description-->
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('description')?></label>
                <div class="col-sm-10">
                    <input type="text" name="description"  class="form-control" placeholder=" description of item" /> 
            </div>
                    </div>
                    <!-- end description -->
                <!-- start price -->
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('price')?></label>
                <div class="col-sm-10">
                    <input type="text" name="price"  class="form-control" placeholder=" Add price " /> 
            </div>
                    </div>
                    <!-- end price -->
                    
                            <!-- start country_made -->
            <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('country_made')?></label>
                <div class="col-sm-10">
                    <input type="text" name="country_made"  class="form-control" placeholder=" country of the items " /> 
            </div>
                    </div>
                    <!-- end country_made--> 
                        <!-- start status -->
                        <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('status')?></label>
                <div class="col-sm-10">
                    <select  name="status"class="form-select" aria-label="Disabled select example"  > 
                    <option value="0">--</option>
                    <option value="1">New</option>
                    <option value="2">Like New</option>
                    <option value="3">used</option>
    </select>
            </div>
                    </div>
                    <!-- end status-->
                <!-- start status -->
                <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('rating')?></label>
                <div class="col-sm-10">
                    <select  name="rating" class="form-select" aria-label="Disabled select example" > 
                        <option value="1">*</option>
                        <option value="2">**</option>
                        <option value="3">***</option>
                        <option value="4">****</option>
                        <option value="5">*****</option>

    </select>
            </div>
                    </div>
                    <!-- end status-->  
                        <!-- start member  -->
                    <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('MEMBERS')?></label>
                <div class="col-sm-10">
                    <select  name="MEMBERS" class="form-select" aria-label="Disabled select example" > 
                        <option value="0">--</option>
                        <?php 
                        $stmt=$con->prepare("SELECT * FROM users");
                        $stmt->execute();
                        $users = $stmt->fetchAll();
                        foreach($users as $user){
                            echo "<option value='".$user['userID'] . "'>". $user['username'] . "</option>";
                        }
                        ?>
    </select>
            </div>
                    </div>
                    <!-- end member-->  
                                        <!-- start cat  -->
                                        <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo lang('CATEGORIES')?></label>
                <div class="col-sm-10">
                    <select  name="CATEGORIES" class="form-select" aria-label="Disabled select example" > 
                        <option value="0">--</option>
                        <?php 
                        $stmt=$con->prepare("SELECT * FROM categories");
                        $stmt->execute();
                        $users = $stmt->fetchAll();
                        foreach($users as $user){
                            echo "<option value='".$user['id'] . "'>". $user['name'] . "</option>";
                        }
                        ?>
    </select>
            </div>
                    </div>
                    <!-- end cat-->  
                    <!-- start -->
                    <div class="form-group form-group-lg">
                <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" value="Add items"  class="btn btn-outline-primary">
            </div>
                    </div>
                 </form>
                     </div>
                     <!-- end -->
                    
<?php
    }elseif($do == 'Insert'){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            echo'<h1 class="text-center">Update items</h1>';                          
            echo "<div class='container'>";
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $country_made = $_POST['country_made'];
                $status =$_POST['status'];
                $rating =$_POST['rating'];
                $MEMBERS = $_POST['MEMBERS'];
                $CATEGORIES = $_POST['CATEGORIES'];
                //validate the form;
                $formErrors=array();
                if(empty($name)){
                    $formErrors[] = '<div class="alert alert-danger">you must put the name of item </div>';
                }
                if(empty($description)){
                    $formErrors[] = '<div class="alert alert-danger">you must put description of item  </div>';
                }
                if(empty($price)){
                    $formErrors[] = '<div class="alert alert-danger">you must put price of item</div>';
                }
                if(empty($country_made)){
                    $formErrors[] = '<div class="alert alert-danger">you must put country_made of item </div>';
                }
                if(empty($status)){
                    $formErrors[] = '<div class="alert alert-danger">you must put status of item </div>';
                }
                if(empty($rating)){
                    $formErrors[] = '<div class="alert alert-danger">you must put rating of item </div>';
                }
                if($CATEGORIES == 0 ){
                    $formErrors[] = '<div class="alert alert-danger">you must put CATEGORIES of item </div>';
                }
                foreach($formErrors as $error){
                    echo $error . '<br/>';
                }
                // no error Update;
                if(empty($formErrors)){
                        $stmt=$con->prepare("INSERT INTO items(name, description, price, add_date, country_made, status, rating, cat_id, member_id )VALUES(:zname, :zdescription, :zprice, now(),:zcountry_made, :zstatus, :zrating, :zcat_id, :zmember_id)");
                        $stmt->execute(array(
                            'zname' => $name ,
                            'zdescription' => $description ,
                            'zprice' => $price , 
                            'zcountry_made' => $country_made ,
                            'zstatus' => $status ,
                            'zrating' => $rating ,
                            'zcat_id' => $CATEGORIES,
                            'zmember_id'=>$_SESSION['userID'],
                        ));
                        if($stmt->rowcount() > 0){
                            $themassge=  'Add your information is done!';
                            up($themassge, 2); 
                }
                
                    }
    
            }else{
                $errormassages = 'sorry you cant browes this page';
                up($errormassages, 2);
    
            }
            echo "</div>";
    }
    include  $tpl . 'footer.php';
}else{
    header('Location:index.php');
    
    exit();

}