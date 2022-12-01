<?php
require "config/config.php";
//require_once("queries/adminCheck.php");
?><h1>Administrator Panel</h1><?php
$sql= "SELECT * from user";
$pre = $pdo->prepare($sql); //on prévient la base de données qu'on va executer une requête
$pre->execute();//on l'execute
$data = $pre->fetchAll(PDO::FETCH_ASSOC);// on stocke les données dans une variable (ici $data)

?><h2>look at all these idiots</h2>
<?php
foreach($data as $userData){
?>
</br>
<?php
    echo "user id: ".$userData['id']."| user name : ".$userData['username']."| is an admin ? ";
    echo $userData['admin'] == 1?'yes':'no';
    ?>
    <form method="post" action="queries/adminToggle.php">
        <input type='hidden' name='userId' value="<?php echo $userData['id'] ?>" />
        <button type='submit'>Toggle admin</button>
    </form>
    <form method="post" action="queries/userDelete.php">
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
    <input name="h1" value=<?php echo $data['h1']?>>h1</input><br/>
    <input name="h2_1" value=<?php echo $data['h2_1']?>>first article card</input>
    <textarea name="p1" ><?php echo $data['p1']?></textarea><br/>
    <input name="h2_2" value=<?php echo $data['h2_2']?>>second article card</input>
    <textarea name="p2" ><?php echo $data['p2']?></textarea><br/>
    <input name="h2_3" value=<?php echo $data['h2_3']?>>third article card</input>
    <textarea name="p3" ><?php echo $data['p3']?></textarea><br/>
    <input type="submit" value="ok this is cooler now">
</form>


<h2>make the goddamn article yourself if you're so good at it</h2>
<!-- exactly what it sounds like 
make-a-bear but shittier and without any fun whatsoever
-->
<h2>check out those sick articles</h2>
<!-- the shit you've done so far

uh make it call the database to get all the data on each page, and let it be editable
-->
<?php
?>