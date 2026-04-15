<?php
if(isset($_POST["tab"]) && !empty($_POST["tab"]) && isset($_POST["lim"]) && !empty($_POST["lim"]))
{
$tab = $_POST["tab"];
$limit = $_POST["lim"];

echo "<table border='1' cellpadding='15' cellspacing='0'>";
echo "<tr>
<th>Number</th>
<th>Multiply</th>
<th>Result</th>
</tr>";

for($i = 1; $i <= $limit; $i++)
{
echo "<tr>";
echo "<td>$tab</td>";
echo "<td>$i</td>";
echo "<td>" . ($tab*$i) . "</td>";
echo "</tr>";
}

echo "</table>";
}
else
{
?>
<html>
<body>
<form method="post">
Table: <input type="number" name="tab" required><br><br>
Limit: <input type="number" name="lim" required><br><br>
<input type="submit" value="Submit">
</form>

</body>
</html>
<?php
}
?>