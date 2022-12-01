<a href='index.php'>pls let me leave</a>
<?php
require "config/config.php";
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

<h2>change the main page</h2>
<h3>text and stuff</h3>
<?php
  $sql = "SELECT * FROM home";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $data = $pre->fetch(PDO::FETCH_ASSOC);
?>
<form method="post" action="queries/homeEdit.php">
    <textarea name="h1" ><?php echo $data['h1']?></textarea><br/>
    <textarea name="h2_1" ><?php echo $data['h2_1']?></textarea><br/>
    <textarea name="p1" ><?php echo $data['p1']?></textarea><br/>
    <textarea name="h2_2" ><?php echo $data['h2_2']?></textarea><br/>
    <textarea name="p2" ><?php echo $data['p2']?></textarea><br/>
    <textarea name="h2_3" ><?php echo $data['h2_3']?></textarea><br/>
    <textarea name="p3" ><?php echo $data['p3']?></textarea><br/>
    <input type="submit" value="ok good">
</form>

<form method="post" action="queries/upload_files.php">
    
</form>


<h2>Modify your projects</h2>
<?php foreach($data as $project){ ?>
    <form action="update_project.php" method="post">
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

        <input type="submit" value="Modify all the texts and link"/>
    </form>

    <form method="post" action="upload_file.php" enctype="multipart/form-data">
        <h4>Images</h4>
        <input type="file" name="img1"/><br>
        <input type="file" name="img2"/><br>
        <input type="file" name="img3"/><br>
        <input type="file" name="img4"/><br>
        <input type="submit" value="Modify the images"/>
    </form>

<?php } ?>

<?php
?>