<?php
function laby($str = NULL,$str2 = NULL)                                                                                                                                                   
{
	static $count = 2;
	static $count2 = 2;
	static $j = 0;	
	system("stty -icanon");
	if(!is_string($str))
		return false;
	$str=str_replace("2", "|", $str);
	$str=str_replace("0", " ", $str);
	$str=str_replace("1", "-", $str);	
	if(!is_string($str2))
	{
		$strlen = strlen( $str );
		for( $i = 0; $i <= $strlen; $i++ ) {
				$char = substr( $str, $i, 1 );
				if($char == "\n")
				{
					break;
				}
		}
		$j = $i;
		echo substr_replace($str, 'x', $count,1);	
	}
	else
	{	
		$count2 =$count;
		switch($str2)
		{
				case "up":	
					$char = substr( $str, $count2 -= $j+1, 1 );				
					if($char == " ")
						echo substr_replace($str, 'x',$count -= $j+1,1);	
					else		
						echo substr_replace($str, 'x',$count,1);	
					break;
				case "down":
					$char = substr( $str, $count2 += $j+1, 1 );	
					if($char == " ")
						echo substr_replace($str, 'x',$count+= $j+1,1);
					else		
						echo substr_replace($str, 'x',$count,1);	
					break;
				case "left":
					$char = substr( $str, $count-1, 1 );	
					if($char == " ")
						echo substr_replace($str, 'x', --$count,1);	
					else		
						echo substr_replace($str, 'x',$count,1);	
					break;
				case "right":
					$char = substr( $str, $count+1, 1 );	
					if($char == " ")
						echo substr_replace($str, 'x', ++$count,1);	
					else		
						echo substr_replace($str, 'x',$count,1);	
					break;
		}
	}
	while ($c = fread(STDIN, 1)) {
		if($c == "z")
		{
			system('clear');
			laby($str,"up");				
		}
		else if($c == "q")
		{
			system('clear');
			laby($str,"left");
		}
		else if($c == "s")
		{
			system('clear');
			laby($str,"down");			
		}
		else if($c == "d")
		{
			system('clear');
			laby($str,"right");						
		}
		else 
		{
			system('clear');
			laby($str);				
		}
	}
}
?>
