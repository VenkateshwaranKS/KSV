<html>
<head>
	<title>
		quiz
	</title>
	<link rel="stylesheet" type="text/css" href="ps-stylesheet.css" media="all">
<style type="text/css">
#wrapper{
	width: 950px;
	height: auto;
	padding:13px;
	margin-right: auto;
	margin-left: auto;
	background-color: #fff;
}
</style>
</head>
<body>

<div id="header">
<h1>Data Structure Quiz</h1>
</div>
<?php 
	$rid=rand(1,3);
	echo $rid;
?>
<ol>
<h1 style="color:white"><marquee scroll="left"><center>Start Quiz!!!</center></marquee></h1>
<div id="wrapper">
	<center><font face='Andalus' size="5">DS Quiz by <b>Success.com</b></font></center>
<?php 
if($rid==1){
	echo"

	<form action='process.php' method='post' id='quizform' id='1'>
	 <ol>
	
	<li>
	<h3>The element stored in the left subtree of x are ?</h3>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='A'/>
	<label for='answerOneA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='B'/>
	<label for='answerOneB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerOne' id='answerOne' value='C'/>
	<label for='answerOneC'>C)None</label>
    </div>
	</li>

	
	<li>
	<h3>The elements stored in the right subtree of x are?</h3>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='A'/>
	<label for='answerTwoA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='B'/>
	<label for='answerTwoB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerTwo' id='answerTwo' value='C'/>
	<label for='answerTwoC'>C)None</label>
    </div>
	</li>
	

	<li>
	<h3>Divide-and-conquer is a ------ technique for designing algorithms?</h3>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='A'/>
	<label for='answerThreeA'>A)bottom-up</label>
    </div>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='B'/>
	<label for='answerThreeB'>B)top-down</label>
    </div>
	
    <div>
	<input type='radio' name='answerThree' id='answerThree' value='C'/>
	<label for='answerThreeC'>C)None</label>
    </div>
	</li>
	<li>
	<h3> -----is an extremely well-known instance of divide-and-conquer paradigm.?</h3>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='A'/>
	<label for='answerFourA'>A)binary search</label>
    </div>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='B'/>
	<label for='answerFourB'>B)sequential-search</label>
    </div>
	
    <div>
	<input type='radio' name='answerFour' id='answerFour' value='C'/>
	<label for='answerFourC'>C)None</label>
    </div>
	</li>
	
	
	<li>
	<h3>Inorder walk takes --- time to walk a tree of n nodes ?</h3>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='A'/>
	<label for='answerFiveA'>A)n</label>
    </div>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='B'/>
	<label for='answerFiveB'>B)n-1</label>
    </div>
	
    <div>
	<input type='radio' name='answerFive' id='answerFive' value='C'/>
	<label for='answerFiveC'>C)None</label>
    </div>
	</li>
	
	</ol>
	<input type='submit' value='Submit Quiz'/>
	</form>";
}
if($rid==2){
	echo"

	<form action='process.php' method='post' id='quizform' id='2'>
	 <ol>
	
	
	<li>
	<h3>The elements stored in the right subtree of x are?</h3>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='A'/>
	<label for='answerTwoA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='B'/>
	<label for='answerTwoB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerTwo' id='answerTwo' value='C'/>
	<label for='answerTwoC'>C)None</label>
    </div>
	</li>
	

	<li>
	<h3>Divide-and-conquer is a ------ technique for designing algorithms?</h3>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='A'/>
	<label for='answerThreeA'>A)bottom-up</label>
    </div>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='B'/>
	<label for='answerThreeB'>B)top-down</label>
    </div>
	
    <div>
	<input type='radio' name='answerThree' id='answerThree' value='C'/>
	<label for='answerThreeC'>C)None</label>
    </div>
	</li>
	<li>
	<h3>The element stored in the left subtree of x are ?</h3>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='A'/>
	<label for='answerOneA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='B'/>
	<label for='answerOneB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerOne' id='answerOne' value='C'/>
	<label for='answerOneC'>C)None</label>
    </div>
	</li>

	<li>
	<h3> -----is an extremely well-known instance of divide-and-conquer paradigm.?</h3>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='A'/>
	<label for='answerFourA'>A)binary search</label>
    </div>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='B'/>
	<label for='answerFourB'>B)sequential-search</label>
    </div>
	
    <div>
	<input type='radio' name='answerFour' id='answerFour' value='C'/>
	<label for='answerFourC'>C)None</label>
    </div>
	</li>
	
	
	<li>
	<h3>Inorder walk takes --- time to walk a tree of n nodes ?</h3>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='A'/>
	<label for='answerFiveA'>A)n</label>
    </div>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='B'/>
	<label for='answerFiveB'>B)n-1</label>
    </div>
	
    <div>
	<input type='radio' name='answerFive' id='answerFive' value='C'/>
	<label for='answerFiveC'>C)None</label>
    </div>
	</li>
	
	</ol>
	<input type='submit' value='Submit Quiz'/>
	</form>";
}
if($rid==3){
	echo"

	<form action='process.php' method='post' id='quizform' id='3'>
	 <ol>
	
	
	
	<li>
	<h3>The elements stored in the right subtree of x are?</h3>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='A'/>
	<label for='answerTwoA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerTwo' id='answerTwo' value='B'/>
	<label for='answerTwoB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerTwo' id='answerTwo' value='C'/>
	<label for='answerTwoC'>C)None</label>
    </div>
	</li>
	
<li>
	<h3>The element stored in the left subtree of x are ?</h3>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='A'/>
	<label for='answerOneA'>A)<=</label>
    </div>
	
	<div>
	<input type='radio' name='answerOne' id='answerOne' value='B'/>
	<label for='answerOneB'>B)>=</label>
    </div>
	
    <div>
	<input type='radio' name='answerOne' id='answerOne' value='C'/>
	<label for='answerOneC'>C)None</label>
    </div>
	</li>
	
	<li>
	<h3>Inorder walk takes --- time to walk a tree of n nodes ?</h3>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='A'/>
	<label for='answerFiveA'>A)n</label>
    </div>
	
	<div>
	<input type='radio' name='answerFive' id='answerFive' value='B'/>
	<label for='answerFiveB'>B)n-1</label>
    </div>
	
    <div>
	<input type='radio' name='answerFive' id='answerFive' value='C'/>
	<label for='answerFiveC'>C)None</label>
    </div>
	</li>
	

	<li>
	<h3>Divide-and-conquer is a ------ technique for designing algorithms?</h3>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='A'/>
	<label for='answerThreeA'>A)bottom-up</label>
    </div>
	
	<div>
	<input type='radio' name='answerThree' id='answerThree' value='B'/>
	<label for='answerThreeB'>B)top-down</label>
    </div>
	
    <div>
	<input type='radio' name='answerThree' id='answerThree' value='C'/>
	<label for='answerThreeC'>C)None</label>
    </div>
	</li>
	<li>
	<h3> -----is an extremely well-known instance of divide-and-conquer paradigm.?</h3>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='A'/>
	<label for='answerFourA'>A)binary search</label>
    </div>
	
	<div>
	<input type='radio' name='answerFour' id='answerFour' value='B'/>
	<label for='answerFourB'>B)sequential-search</label>
    </div>
	
    <div>
	<input type='radio' name='answerFour' id='answerFour' value='C'/>
	<label for='answerFourC'>C)None</label>
    </div>
	</li>
	
	</ol>
	<input type='submit' value='Submit Quiz'/>
	</form>";
}
?>
</div>
</body>
</html>