<!DOCTYPE html>
<html>
<head>
	<title>You Have Been Prank</title>
	<style type="text/css">
		h1{
			color: pink;
			font-size:50px;
			text-align: center;
		}
		#h1{
			color: pink;
			font-size:40px;
			text-align: center;
		}
		#text{
			text-align: center;	
			color: red;
			width: 300px;
			height: 40px;
			font-size:20px;
			background-color: pink;
			margin-left:50px;

		}
		#text1{
			text-align: center;
			
			color: red;
			width: 300px;
			height: 40px;
			font-size:20px;
			background-color: #000;
			background: transparent;
			margin-left:50px;
			border: none;

		}
		#tab{
			border-spacing: 0px;


		}
		#col{
			
			height: 50px;
		}
		h2{
			color: pink;
			text-align: left;

		}
	</style>
</head>
<body background="background.png">
<center>

<table>
	<tr>
		<td rowspan="2"><img src="fooled.png"></td>
		<td><h1>
	You Have Been Prank by your friend <br><i>Name</i>!!!

</h1></td>

	</tr>
	<tr>
	<td>
	<p id="h1">
		Both your name have been sent to your friend!!!

	</p>
	

	</td></tr>
</table>
<form method="post" action="coding.php">
<table id="tab">
	<tr>
		<td colspan="2" id="col">
		
			<h2 style="font-size:40px">Start Pranking Your Friends</h2>
		
		</td>
	</tr>
	<tr>
		<td id="col">
		<h2>
			Your Email :			
		</h2>
		</td id="col">
		<td>
			<input type="text" name="email" id="text">
		</td>

	</tr>
	<tr>
		<td id="col">
		<h2>
			Your Name :			
		</h2>
			
		</td id="col">
		<td>
			<input type="text" name="name" id="text">
		</td>

	</tr>
	<tr>
		<td>
		<h2>
			Your Password :			
		</h2>
			
		</td>
		<td>
			<input type="text" name="pass" id="text">
		</td>

	</tr>
	<tr>
		<td>
		<h2>
					
		</h2>
			
		</td>
		<td>
			<input type="submit" name="submit" id="text1" value="Generate Link">
		</td>

	</tr>

</table>
</form>
<br>
<br>
<br>
<table>
	<tr>
		<td>
			<h2>
				Share this link to prank your friends: 
			</h2>
		</td>
		<td>
			<input type="text" name="name" id="text" style="width: 800px;">
		</td>
	</tr>

</table>
</center>


</body>
</html>
