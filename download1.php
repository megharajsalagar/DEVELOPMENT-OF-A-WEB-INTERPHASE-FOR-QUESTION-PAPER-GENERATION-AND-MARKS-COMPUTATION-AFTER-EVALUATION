	<?php
				
				include 'download.php';
				$conn = new mysqli("localhost:3307","root","","myminiproject");
				
				$sk = $_POST['ename'];
				$sql="Select * from questionbank where FileName=".$sk."";
				$result = mysqli_query($conn, $sql);
				$rowcount=mysqli_num_rows($result);
				if($rowcount>0)
				{
				while($row = mysqli_fetch_array($result)){
					echo "<html><li><a target='_blank' href='download.php?SlNo=".$row['SlNo']."'>Download ".$row['FileName']."</a></li></html>";
				}
				}
				else
				{
					echo" Question Bank  not Found";
				}
				header('refresh:5;url=GQB.php');
			?>