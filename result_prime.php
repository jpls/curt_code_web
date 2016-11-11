<?php
/***************************************
* Result page of the 1000 prime numbers beginning with 2.
****************************************/


/**
 * Require necessary function to get the prime numbers
 * GetPrime_ & Table_Group_Prime
 */
require_once("function_.php");
 /**
 * Sanitize user data
 *
 *	//headers to make sure the client browser recognizes
 * 	//the data as JSON
 *	//tells the browser to expect something it can work with in Javascript.

 */
header("Content-Type: application/json");
/**
 * Serializing  user data
 * See definition of function file @function_.php 
 * Line 8 GetPrime_ & Table_Group_Prime
 *
 */
$table=Table_Group_Prime();
$json = json_encode($table);
echo $json;
?>