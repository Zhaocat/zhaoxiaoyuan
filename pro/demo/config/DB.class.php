<?php

class DB{
	
	public $dbHost ="localhost";
	public $dbUser ="root";
	public $dbPwd ="root";
	public $dbName ="pro";
	public $dbCHarset ="utf8";
	public $link ="";
	function __construct($dbHost,$dbUser,$dbPwd,$dbName,$dbCharset){
		
		$this->dbHost =$dbHost;
		$this->dbUser =$dbUser;
		$this->dbPwd =$dbPwd;
		$this->dbName =$dbName;
		$this->dbCharset =$dbCharset;	
	
	$this->links=mysql_connect($dbHost,$dbUser,$dbPwd)or die(mysql_error());
	mysql_query("set names".$this->dbCharset);
	mysql_select_db($this->dbName,$this->links);
	}
	function query($sql){
		return mysql_query($sql);
	}
	
	function numRows($sql){
		$result =$this->query($sql);
		return mysql_num_rows($result);	
	}
	
	function affectedRows(){
		return mysql_affected_rows();
	}
	
	function fetchOne($sql){
		$result=$this->query($sql);
		$rs=mysql_fetch_assoc($result);
		return $rs;
	}
	function fetchAll($sql){
		$result=$this->query($sql);
		$rows=array();
		while(($rs=mysql_fetch_assoc($result))!=false){
		//while($rs=mysql_fetch_assoc($result)){
			$rows[]=$rs;
		}
		return $rows;
	}
	function __destruct(){
		$this->dbHost =NULL;
		$this->dbUser =NULL;
		$this->dbPwd =NULL;
		$this->dbName =NULL;
		$this->dbCharset =NULL;
		mysql_close();
	}
	}
	$db=new DB("localhost","root","root","pro","utf8");
	//$sql="insert into admin(aName,aPwd) values('张三','123457')";
	//$db->query($sql);
	//$sql="select * from admin";
	//$count=$db->numRows($sql);
	//echo $count;
	//$sql="select * from admin where aId=1";
	//		$rs=$db->fetchOne($sql);
	//print_r($rs);
	$sql="select * from admin";
	$rs=$db->fetchAll($sql);
	//print_r($rs);
	