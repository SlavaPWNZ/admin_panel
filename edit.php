<?php
session_start();
if (!isset($_SESSION['key']) && $_SESSION['key']!='YES') { header( "Location: login.php" ); }

include_once 'model.php';

if(isset($_GET['save']) && $_GET['save']==1) save($_GET['id']);
if(isset($_GET['id'])) $data=get_this_page_sql($_GET['id']);
if($data==false) header( "Location: index.php" );

include_once 'header.php';
?>
	<a href="./"><input class="knopka2" type="submit" value="На главную"></a>    
	<div>
	<h3>Редактрование страницы «<?php echo $data['title'] ?>»:</h3>
        <form action="edit.php?save=1&id=<?php echo $_GET['id'] ?>" method="post">
             <table border='2'>   
                <tr><td>Title:</td><td><textarea rows="6" cols="41" name="title" type="text"><?php echo $data['title']?></textarea></td></tr>
                <tr><td>Header:</td><td><textarea rows="6" cols="41" name="header" type="text"><?php echo $data['header']?></textarea></td></tr>
                <tr><td>Body:</td><td><textarea rows="6" cols="41" name="body" type="text"><?php echo $data['body']?></textarea></td></tr>
                <tr><td>Body2:</td><td><textarea rows="6" cols="41" name="body2" type="text"><?php echo $data['body2']?></textarea></td></tr>                    
             </table>
			<br>
			<input class="knopka1" type="submit" value="Сохранить">
        </form>
                
     </div>
	 
</div>
</body>
</html>