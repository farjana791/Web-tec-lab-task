<?php
  if (!isset($_COOKIE["username"])) {
    header("Location: Login.php");
  }
?>

<style>
	table, tr, td {
		border: 1px solid black;
		padding: 5px;
	}
</style>

<html>
	<title>Dashboard</title>
	<body>
		<?php
               $books = simplexml_load_file("books.xml");
               if (count($books->name) == 0) {
               	 echo "<h1>No books to show</h1>";
               }
               else { ?>
			            <table style="">
						<tr>
							<td>
								<a href="addBook.php"> Add a new book </a>
							</td>
						</tr>
						<tr style="text-transform: uppercase; text-decoration: underline; color: green;">
							<td> sr no. </td>
							<td> name </td>
							<td> publisher </td>
							<td> isbn </td>
							<td> price </td>
							<td> image </td>
							<td> delete </td>
						</tr>

					</table>
               <?php }
			?> 

	</body>
</html>