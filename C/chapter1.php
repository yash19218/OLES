<html>

<head>
    <meta charset="utf-8">
    <title>eLearning - Free Educational Responsive Web Template </title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="../css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <?php
		include "nav.php";
	?>
    <header id="head" class="secondary">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1>C</h1>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 col-md-push-2" style="margin-bottom:10px;">
                <h1>What is C?</h1><br>
                <p>In earlier days, every language was designed for some specific purpose. For example FORTRAN (Formula
                    Translator) was used for scientific and mathematical applications, COBOL (Common Business Oriented
                    Language) was used for business applications. So need of such a language was felt which could
                    withstand
                    most of the purposes. "Necessity is the mother of invention". From here the first step towards C was
                    put forward by Dennis Ritchie.
                    The C language was developed in 1970's at Bell laboratories by Dennis Ritchie. Initially it was
                    designed
                    for programming in the operating system called UNIX. After the advent of C, the whole UNIX operating
                    system was rewritten using it. Now almost tlvc entire UNIX operating system and the tools supplied
                    with it including the C compiler itself are written in C.
                    The C language is derived from the B language, which was written by Ken Thompson at AT&T Bell
                    laboratories. The B language was adopted from a language called BCPL (Basic Combined Programming
                    Language), which was developed by Martin Richards at Cambridge University
                <p>
                    <hr>
                <h1>Characteristic of C</h1>
                <p>It is a middle level language. It has the simplicity of a high level language as well as the power of
                    ;
                    low level language. This asp;ct of C makes it suitabl~ for writing both application' programs and
                    systen
                    programs. Hence it is an excellent, efficient and general-purpose language for most of the
                    application
                    I such as mathematical, scientific, business and system software applications.
                    C is small language, consisting of only 32 English words known as keywords (if, else, for, break
                    etc.:
                    The power of C is augmen,ted by the library functions provided with it. Moreover, the langua'ge i
                    extendible since it allows the users to add their own library functions to the library. \
                    C contains control constructs needed to write a structured program hence it is considered a
                    structure
                    programming language. It includes structures for selection (if.. .else, switch), repetition (while,
                    fo
                    do... while) and for loop exit\ (break). . .
                    The programs w~itten in C aile portable i.e. programs written for one type of computer or operatin
                    system can be run\on anothet type of computer or operating system.</p>
                <h4>Structure of a C program</h4>
                <pre>Comments
Preprocessor directives
Global variables 
main( )function
{
local variables
statements
......... 
......... 
}
func 1(){
local variables
statements
......... 
......... 
}
func 2(){
local variables
statements
......... 
......... 
}
</pre>
                <h4><b>Example of Simple C program</b></h4>
                <?php 
echo '<pre>';
$str = '#include <stdio.h>
#include <conio.h>
void main()
{
	printf("hello");
}';
echo htmlspecialchars($str);
echo '<br><a href="compiler.php" class="btn">Try it Yourself>></a>';
echo '</pre>';
?>
                <h1>Example Explained</h1>
                <ul>
                    <li>The
                        <?php $str='#include '; echo 'In the C Programming Language, the'. $str.' directive tells the preprocessor to insert the contents of another file into the source code at the point where the #include directive is found.' ?>
                    </li>
                    <li>The <?php $str='<stdio.h> & <conio.h>'; echo htmlspecialchars($str);?>are the header files</li>
                    <li>The <?php $str='printf'; echo htmlspecialchars($str); ?> prints the content</li>

                </ul>
                <hr>
                <h1>Environments Of C</h1>
                <p>The steps for the execution of C program are as-</p>
                <ol>   
					<li>Program creation</li>
                    <li>Program compilation</li>
                    <li>Program execution</li></ol>
                    The C programs are written in :mostly two environments, UNIX and MS-DOS.
               
               
                <form method="post" action="">
                    <h1>Answer the following question correct answer will lead you to next chapter.</h1>
                    <h3><label>1) When was C Language Developed?</label>
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="1983">1983</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="1970">1970</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="optradio" value="1990">1990</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

                </form>
                <?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="1970")
		{
			//echo 'true';
			echo '<a href="chapter2.php" class="btn">Next</a>';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>
            </div>
            <div class="col-md-2 col-md-pull-9" style="margin-top:10px;">

                <?php include "sidebar.php"; ?>
            </div>
        </div>

    </div>



</body>

</html>