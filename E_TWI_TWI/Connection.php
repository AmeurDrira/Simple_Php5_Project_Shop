<?php
class Connection
{
		public $cnx=null;
		public function __construct()
		{	 
			try
			{		
				$this->cnx =  new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
				$this->cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
			}
			catch( PDOException $e )
			{ 
			}
		} 
		public function MAJQuery($sql)
		{
			$nb=$this->cnx->exec($sql);
		}
		public function getAll($sql)
		{
				return $this->cnx->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		}
		
				public  function ajouter($bd,$u)
		{	
			$sql="INSERT INTO user VALUES (null,'".$u->email."','".$u->pwd."','".$u->name."')";
			$res=$bd->cnx->exec($sql);
			return $res;	
		}
}
$bd=new Connection();
?>