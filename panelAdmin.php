<?php
    require_once "config/config.php";
    $page = "panel-admin";
    if(isset($_SESSION['user']) && $_SESSION['user']['admin']==1){

    }else{
        header('Location: index.php');
        exit();
    } ?>

<a href='index.php'>pls let me leave</a>
<?php
//require_once("queries/adminCheck.php");
?><h1>Administrator Panel</h1><?php
$sql= "SELECT * from user";
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)

?><h2>All the users</h2>
<?php
foreach($data as $userData){
?>
</br>
<?php
    echo "user id: ".$userData['id']."| user name : ".$userData['username']."| is an admin ? ";
    echo $userData['admin'] == 1?'yes':'no';
    ?>
    <form method="post" action="../queries/adminToggle.php">
        <input type='hidden' name='userId' value="<?php echo $userData['id'] ?>" />
        <button type='submit'>Toggle admin</button>
    </form>
    <form method="post" action="../queries/userDelete.php">
        <input type='hidden' name='userId' value="<?php echo $userData['id'] ?>" />
        <button type='submit'>Delete user</button>
    </form>
    
    <?php
};
?>

<h2>Modify the main page</h2>
<?php
  $sql = "SELECT * FROM home";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $homedata = $pre->fetch(PDO::FETCH_ASSOC);
?>
<form method="post" action="queries/homeEdit.php" enctype="multipart/form-data">
    <h3>Title</h3>
    <input name="h1" value="<?php echo $homedata['h1']?>"/><br/>
    <h3>Project Card 1</h3>
    <input name="h2_1"value="<?php echo $homedata['h2_1']?>"/><br/>
    <textarea name="p1" ><?php echo $homedata['p1']?></textarea><br/>
    <h3>Project Card 2</h3>
    <input name="h2_2" value="<?php echo $homedata['h2_2']?>"/><br/>
    <textarea name="p2" ><?php echo $homedata['p2']?></textarea><br/>
    <h3>Project Card 3</h3>
    <input name="h2_3" value="<?php echo $homedata['h2_3']?>"/><br/>
    <textarea name="p3" ><?php echo $homedata['p3']?></textarea><br/> 
    <h4>Images</h4>
    <input type="file" name="img_1"/><br>
    <input type="file" name="img_2"/><br>
    <input type="file" name="img_3"/><br>
    <input type="submit" value="Modify">
</form>

<?php
  $sql = "SELECT * FROM projects";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);
?>


<h2>Modify your projects</h2>
<?php foreach($data as $project){ ?>
    <form action="queries/update_project.php" method="post" enctype="multipart/form-data">
        <h3>Main title</h3>
        <input type='hidden' name='projectId' value="<?php echo $project['id'] ?>" />
        <input type="text" name="h1" value="<?php echo $project['h1'] ?>"/>

        <h3>First card</h3>
        <input type="text" name="span1" value="<?php echo $project['span1'] ?>"/> <br>
        <textarea type="text" name="p1"><?php echo $project['p1'] ?></textarea>

        <h3>Second Card</h3>
        <input type="text" name="span2" value="<?php echo $project['span2'] ?>"/><br>
        <textarea type="text" name="p2"><?php echo $project['p2'] ?></textarea>

        <h3>Third Card</h3>
        <input type="text" name="span3" value="<?php echo $project['span3'] ?>"/><br>
        <textarea type="text" name="p3"><?php echo $project['p3'] ?></textarea>
        
        <h3>Fourth Card</h3>
        <input type="text" name="span4" value="<?php echo $project['span4'] ?>"/><br>
        <textarea type="text" name="p4"><?php echo $project['p4'] ?></textarea>

        <h3>Carousel</h3>

        <h4>Images Title</h4>
        <input type="text" name="h2_1" value="<?php echo $project['h2_1'] ?>"/><br>
        <input type="text" name="h2_2" value="<?php echo $project['h2_2'] ?>"/><br>
        <input type="text" name="h2_3" value="<?php echo $project['h2_3'] ?>"/><br>
        <input type="text" name="h2_4" value="<?php echo $project['h2_4'] ?>"/>

        <h4>Button</h4>
        <input type="text" name="a_title" value="<?php echo $project['a_title'] ?>"/><br>
        <input type="text" name="a_link" value="<?php echo $project['a_link'] ?>"/><br>

        <h4>Images</h4>
        <input type="file" name="img1"/><br>
        <input type="file" name="img2"/><br>
        <input type="file" name="img3"/><br>
        <input type="file" name="img4"/><br>

        <input type="submit" value="Modify"/>
    </form>

<?php } ?>

<?php
  $sql = "SELECT * FROM projects";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Create your project</h2>
<form action="queries/add_project.php" method="post" enctype="multipart/form-data">
        <h3>Main title</h3>
        <input type="text" name="h1"/>

        <h3>First card</h3>
        <input type="text" name="span1"/> <br>
        <textarea type="text" name="p1"></textarea>

        <h3>Second Card</h3>
        <input type="text" name="span2"/><br>
        <textarea type="text" name="p2"></textarea>

        <h3>Third Card</h3>
        <input type="text" name="span3"/><br>
        <textarea type="text" name="p3"></textarea>
        
        <h3>Fourth Card</h3>
        <input type="text" name="span4"/><br>
        <textarea type="text" name="p4"></textarea>

        <h3>Carousel</h3>

        <h4>Images Title</h4>
        <input type="text" name="h2_1"/><br>
        <input type="text" name="h2_2"/><br>
        <input type="text" name="h2_3"/><br>
        <input type="text" name="h2_4"/>

        <h4>Button</h4>
        <input type="text" name="a_title"/><br>
        <input type="text" name="a_link"/><br>

        <h4>Images</h4>
        <input type="file" name="img1"/><br>
        <input type="file" name="img2"/><br>
        <input type="file" name="img3"/><br>
        <input type="file" name="img4"/><br>

        <input type="submit" value="Create"/>
    </form>