<html>
  <head></head>

       <body>
	        <?php
			$mark=90;
			if($mark>=90)
			{
				echo "your marks: $mark: Grade : A+";
			}
			else if($mark>=80&& $mark<90)
			{
				echo "your marks:$mark: Grade : A";
			}
			else if($mark>=70&& $mark<80)
			{
				echo "your marks:$mark: Grade : B";
			}
			else if($mark>=60&& $mark<70)
			{
				echo "your marks:$mark: Grade : C";
			}
			else 
			{
				echo "Else The Grade is:F";
			}
			?>
	   
	   
	   </body>

</html>