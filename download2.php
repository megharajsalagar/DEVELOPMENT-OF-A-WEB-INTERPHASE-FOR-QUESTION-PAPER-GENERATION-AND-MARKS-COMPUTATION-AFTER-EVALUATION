	<?php
				
				
				$conn = new mysqli("localhost:3307","root","","myminiproject");
				
				$sk = $_GET['ename'];
				$sql="Select * from questionpaper where FileName=".$sk."";
				$result = mysqli_query($conn, $sql);
				$rowcount=mysqli_num_rows($result);
				if($rowcount>0)
				{
				while($row = mysqli_fetch_array($result)){
					echo "<li><a target='_blank' href='download3.php?SlNo=".$row['SlNo']."'>Download ".$row['FileName']."</a></li>";
				}
				}
				else
				{
					echo" Question Paper  not Found";
				}
				header('refresh:5;url=GQP.php');
			
			?>