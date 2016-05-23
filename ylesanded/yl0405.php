
  <table border="1">
<?php
  echo "<tr>";
for ($i = 0; $i <= 10; $i++)
{
  if ($i == 0)
  {
    echo "<th>&nbsp;</th>";
  } else {
    echo "<th>$i</th>";
  }
}
    echo "</tr>";
for ($i = 1; $i <= 10; $i++)
{
    echo "<tr>";
    for ($j = 0; $j <= 10; $j++)
    {
      if ($j == 0)
      {
        echo "<th>" . $i . "</th>";
      } else {
        echo "<td>" . $i*$j . "</td>";
      }
    }
    echo "</tr>";
}
?>

</table>
