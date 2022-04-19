<?php

include "nav.php";

echo'<link rel="stylesheet" href="../css/bootstrap.min.css">
	 <link rel="stylesheet" href="../css/style.css">
	 <link rel="stylesheet" href="../css/normalize.css">
     <link rel="stylesheet" href="../css/main.css">';

echo '<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<br><p style="font-size:38px;">Output</p>
				</div>
			</div>
		</div>
	</header>';

    
    putenv("PATH=C:\Program Files\CodeBlocks\MinGW\bin");
	$CC="gcc";
	$out="a.exe";
	$code=$_POST["message"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	// fwrite($file_in,$input);
	fclose($file_in);
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		// if(trim($input)=="")
		// {
		// 	$output=shell_exec($out);
		// }
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		//echo "<pre>$output</pre>";
		echo'<textarea readonly rows="10" cols="70" class="form-control,text_edit"  id="my_text"
			maxlength="999" style="resize:none;margin-top:10px;margin-left:200px;">'.$output.'</textarea>';
		//echo '<textarea id="div" class="form-control" name="output" rows="10" cols="50">'."$output".'</textarea>';
        //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		echo '<textarea readonly rows="10" cols="70" class="form-control,text_edit"  id="my_text"
		maxlength="999" style="resize:none;margin-top:10px;margin-left:200px;">'.$error.'</textarea>';
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
		echo'<textarea readonly rows="10" cols="70" class="form-control,text_edit"  id="my_text"
		maxlength="999" style="resize:none;margin-top:10px;margin-left:200px;">'.$output.'</textarea>';
		// echo '<textarea>'."$output".'</textarea>';

                //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo'<textarea readonly rows="10" cols="70" class="form-control,text_edit"  id="my_text"
		maxlength="999" style="resize:none;margin-top:10px;margin-left:200px;">'.$error.'</textarea>';
	}
	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>
