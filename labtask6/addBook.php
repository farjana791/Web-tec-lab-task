<?php
   if (isset[$_POST["submit"]]) {
       
   }
}
?>
<html>
	<title>Add Book</title>
	<body>
		<form action="" method="post">
		<table style="background-color: lightgray; width: 150px;">
			<tr>
				<td>
					<img src="resources/book.jpg">
					<h1 align="center">Add a Book</h1>
		       </td>
	        </tr>
	        <tr>
	        	<td>
	        		Book Name
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="name">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Category
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<select name="category">
	        			<option>Thrilling</option>
	        			<option>Science fiction</option>
	        			<option>Literature</option>
	        		</select>
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Description
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<textarea name="description"></textarea>
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		Edition
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="edition">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		ISBN
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="isbn">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		pages
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="page">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		price
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="text" name="price">
	        	</td>
	        </tr>
	        <tr>
	        	<td>
	        		<input type="submit" name="submit">
	        	</td>
	        </tr>
		</table>
	</form>
	</body>
</html>