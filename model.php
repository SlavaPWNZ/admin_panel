<?php
include_once 'dbase.php';

function save($id)
{   
	if(isset($_POST['title']) && $_POST['title']!='')
    {
        $title=$_POST['title'];
    }  else {
        $title='';
    }
	
	if(isset($_POST['header']) && $_POST['header']!='')
    {
        $header=$_POST['header'];
    }  else {
        $header='';
    }
	
	if(isset($_POST['body']) && $_POST['body']!='')
    {
        $body=$_POST['body'];
    }  else {
        $body='';
    }
	
	if(isset($_POST['body2']) && $_POST['body2']!='')
    {
        $body2=$_POST['body2'];
    }  else {
        $body2='';
    }
   
    $q="UPDATE pages SET  
             title='".mysql_escape_string($_POST['title'])."',
             header='".mysql_escape_string($_POST['header'])."',
			 body='".mysql_escape_string($_POST['body'])."',
			 body2='".mysql_escape_string($_POST['body2'])."',
			 date_edit='".date('Y-m-d H:i:s')."'
			 WHERE id='".$id."'";
			 
    $result=dbase::db()->query($q); 
}

function dell($id)
{
    $q="DELETE FROM pages WHERE id=".$id;
    $result=dbase::db()->query($q);
}

function get_pages_sql($search)
{   
    $q="SELECT * FROM pages WHERE title LIKE '%".$search."%' ORDER BY id DESC";    
    $result=dbase::db()->query($q);
    if (!$result->num_rows) return false;        
    for($i=0; $i<$result->num_rows; $i++)
    {
        $data[] = $result->fetch_assoc();
    }
    return $data;
}

function get_this_page_sql($id)
{
    $q="SELECT * FROM  pages WHERE id =".$id;    
    $result=dbase::db()->query($q);
    if (!$result->num_rows) return false;
    $data = $result->fetch_assoc();        
    return $data;
}

function create_new_page()
{
	$q="INSERT INTO pages (title, date_create, date_edit) VALUES ('NewPage', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
    dbase::db()->query($q);
}

function get_pages($search)
{
    $data=get_pages_sql($search);
	if ($data==false) return false;
    $str='';
    for($i=0; $i<count($data); $i++)
    {  
       $str=$str."<tr id=".$data[$i]['id'].">
	   <td>".$data[$i]['id']."</td>
	   <td>".$data[$i]['title']."</td>
	   <td>".$data[$i]['header']."</td>
	   <td>".$data[$i]['body']."</td>
	   <td>".$data[$i]['body2']."</td>
	   <td>".$data[$i]['date_create']."</td>
	   <td>".$data[$i]['date_edit']."</td>
	   <td><a href='edit.php?&id=".$data[$i]['id']."'><button>Редактировать</button></a></td>
	   <td><a onclick='dell(".$data[$i]['id'].")'><button>Удалить</button></a></td>
	   </tr>";	   
    }
    return $str;
}