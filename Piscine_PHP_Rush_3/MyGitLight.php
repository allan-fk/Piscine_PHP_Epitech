<?php
$tab = $argv;
$par = $argc;
static $i = 1;
function init()
{	
	global $tab,$par;
	if($par > 2 )
	{		
		if (!file_exists($tab[2])) {
			echo "could not access ".$tab[2]."\n";
		}
		else
		{
			if(is_writable($tab[2]) && is_readable($tab[2]))		
			{
				if (file_exists($tab[2].'/.MyGitLight')) {
					echo "this folder already has a MyGitLight\n";
				}
				else
				{	
					mkdir($tab[2].'/.MyGitLight', 0777, true);	
					mkdir($tab[2].'/.MyGitLight/add', 0777, true);
					mkdir($tab[2].'/.MyGitLight/commit', 0777, true);	
					mkdir($tab[2].'/.MyGitLight/log', 0777, true);	
					copy('MyGitLight.php', $tab[2].'/.MyGitLight/MyGitLight.php');	
				}						
			}
			else
			{
				echo "could not access folder : bad permissions\n";
			}
		}	
	}	
	else
	{
		echo "A folder is needed\n";
	}	
}
function args_add($tab)
{
	if(empty($tab[2]))
	{		
		add("../".basename(getcwd()));
	}			
	else
	{
		array_splice($tab, 0 , 2);	
		foreach($tab as $arg)		
		add($arg);
	}
	
}
function add($dir)
{
	if(is_dir($dir))
	{
		$ffs = scandir($dir);
		unset($ffs[array_search('.', $ffs, true)]);
		unset($ffs[array_search('..', $ffs, true)]);   
		unset($ffs[array_search('.MyGitLight', $ffs, true)]);   
		if(count($ffs) < 1)
		{
			return;			
		}		 
		foreach($ffs as $ff){      
			if(is_dir($dir.'/'.$ff))
			{
				add($dir.'/'.$ff);			
			}
			else
			{	
				if(is_dir($dir))
				{
					@mkdir('.MyGitLight/add/'.$dir, 0777, true);
					copy("$dir/$ff",'.MyGitLight/add/'.$dir."/".$ff);
				}	
			}
		}  
	}
	else
	{
	 copy("$dir",'.MyGitLight/add/'.$dir);	 
	}
}

function commit()
{	
	global $tab,$par,$i;
	if($par < 0)
	{
		echo "A commit message is needed\n";
	}
	else if($par >= 2)
	{		
		$phar = new PharData("./.MyGitLight/commit/".basename($tab[2]).".tar");
		$phar->buildFromDirectory("./.MyGitLight/add/");
		$file = fopen("./.MyGitLight/log/HEAD","a");
		fwrite($file , md5($tab[2])." ".$tab[2]."\n");	
	}	
}
function status()
{
	echo "modified:\n";
	echo "untracked:\n";
	echo "deleted:\n";
}
function gLog()
{
	if(file_exists("./.MyGitLight/log/HEAD"))
	{
		echo file_get_contents("./.MyGitLight/log/HEAD");
	}
}
function rm($dir)
{
	if(is_dir($dir))
	{
		$ffs = scandir($dir);
		unset($ffs[array_search('.', $ffs, true)]);
		unset($ffs[array_search('..', $ffs, true)]);   
		unset($ffs[array_search('.MyGitLight', $ffs, true)]);   
		if(count($ffs) < 1)
		{
			return;			
		}		 
		foreach($ffs as $ff){      
			if(is_dir($dir.'/'.$ff))
			{
				rm($dir.'/'.$ff);	
			}
			else
			{	
				if(is_dir($dir))
				{					
					unlink('.MyGitLight/add/'.$dir."/".$ff);	
					@rmdir('.MyGitLight/add/'.$dir);				
				}	
			}
		}   
	}
	else
	{
	 unlink(".MyGitLight/add/".$dir);
	}
}
function args_rm($tab)
{
	if(empty($tab[2]))
	{		
		add("../".basename(getcwd()));
	}			
	else
	{
		array_splice($tab, 0 , 2);	
		foreach($tab as $arg)		
		rm($arg);
	}
	
}
if($par >= 2 )
{
	switch($tab[1])
	{
		case "init":init();
			break;
		case "add":args_add($tab);
			break;
		case "commit":commit();
			break;
		case "status":status();
			break;
		case "log":gLog();
			break;
		case "rm":args_rm($tab);
			break;
		default: echo "Mauvaise commande\n";
		break;
	}
}	
?>
