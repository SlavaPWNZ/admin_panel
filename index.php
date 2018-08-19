<?php
session_start();
if (!isset($_SESSION['key']) && $_SESSION['key']!='YES') { header( "Location: login.php" ); }

include_once 'model.php';

if(isset($_POST['search']))
{
	$search=$_POST['search'];
} else {
    $search='';
}

if(isset($_GET['dell']))
{
    dell($_POST['id']);
}

if(isset($_GET['create_new_page']))
{
    create_new_page();
}

$result=get_pages($search);
include_once 'header.php';
?>
		<a onclick='create_new_page()'><button class="knopka1">Создать страницу</button></a>
		<br><br>		
        <div>
            Поиск страницы по тайтлу:
            <form action="#" method="post">
                <input name="search" size="12" type="text" placeholder="Введите текст...">
                <input type="submit" value="Искать">
            </form>				
			<br>
			<?php 
				if($result!=false)
                {
					echo "
					<table border='1px'>
						<tr>
							<td>ID</td>
							<td>Title</td>
							<td>Header</td>
							<td>Body</td>
							<td>Body2</td>
							<td>Дата создания</td>
							<td>Дата посл. изм.</td>
							<td>Редактировать </td>
							<td>Удалить</td>
						</tr> 
						$result				
					</table>
					";
				}
				else
				{
					echo 'Не найдено!';
				}
			?>
            
        </div>

</div>
</body>
</html>