<html>
<head>
	<title>Data</title>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</head>
<style type="text/css">
	table img{
		width: 200px;
	}
</style>
<body>
	<p>
		<button name="tambah">Tambah</button>
	</p>
	<p id="loading" style="display:none">
	Loading..............
	</p>
	
	<table border="1" cellpadding="5" cellspacing="0">
		<thead>
			<tr>
				<td></td>
				<td><input type="text" name="name"></td>
				<td><input type="text" name="deskripsi"></td>
				<td>
					<select name="kategori">
						<option value="-1">==</option>
					</select>
				</td>
				<td><input type="file" name="product_img"></td>
				<td><input type="submit" id="save" value="Tambah"></td>
			</tr>
			<tr>
				<th>No</th>
				<th>ProductName</th>
				<th>Category</th>
				<th>ProductDescription</th>
				<th>Picture</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			
		</tbody>
	</table>
	
</body>
</html>