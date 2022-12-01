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


<h2>Projects</h2>
<h3>change the main title</h3>
<h2>make the goddamn article yourself if you're so good at it</h2>

<h2>check out those sick articles</h2>

<?php
?>