<!doctype html>
<html lang="en">
  <body>
    <h1>List of ALL my movies!!!</h1>
    <?php
      // Connect to database
      include("db.php");
	
      // Run SQL query
      $sql = "SELECT * FROM movies ORDER BY date_of_release";
      $results = mysqli_query($mysqli, $sql);
    ?>
	
<form action="search-movies.php" method="post">
  <input type="text" name="keywords" placeholder="Search">
  <input type="submit" value="Go!">
</form>

    <table>
      <?php while($a_row = mysqli_fetch_assoc($results)):?>
        <tr>
          <td><a href="movie-details.php?id=<?=$a_row['movie_id']?>"><?=$a_row['movie_name']?></a></td>
          <td><?=$a_row['price']?></td>
         </tr>
      <?php endwhile;?>
    </table>
  </body>
</html>