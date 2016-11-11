<?php
/******************************************************
* Perform query to retrieve array of associated results
* @access public
* @param none
* @return array table column => column value
*******************************************************/

function Table_Group_Prime(){
// function line @24
$table_Prime=GetPrime_();
$group_Table=array();
// Add multidimensional  of Prime into One Associative Array [Prime]
$group_Table["Prime"]=$table_Prime;
return $group_Table;
}

/**
* function to calculate the prime numbers
* @access public
* @param none
* @return array table column => column value
*/

function GetPrime_()
{
$number = 2 ;
//@return array table
$table_number=array();
$index=0;
while ($number < 1000 )
{
				$div_count=0;
				
				 // find remainder for each division of other numbers with the stored number using a loop.
				for ( $i=1;$i<=$number;$i++)
				{
						// check the total counter for the remainder
						if (($number%$i)==0)
						{
							$div_count++;
						}
				}
		
				// if value less than three, its a primer number
				if ($div_count<3)
				{
						$table_number[$index]["key"]=$index;
						$table_number[$index]["value"]=$number;
						//Have indexes only for primer number
						$index=$index+1;
				}
						$number=$number+1;
			
}
return $table_number;
}
?>