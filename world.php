<?php
mysql_connect(
getenv("IP"),
"dukiemar"
);
mysql_select_db("world");

$check=$_REQUEST["check"];
$LOOKUP = $_REQUEST['lookup'];
$term = $_REQUEST['term'];

if ($check!==true && $term==="")
{
 echo("nothing found");}
 
else
{
# execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
print $results;
# loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}}

?>
