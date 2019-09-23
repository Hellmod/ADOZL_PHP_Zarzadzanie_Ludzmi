<?php
	@session_start(); 
	require_once('baza.php');	
?>
<html>
<body>


TEST </br></br>

<a href="wyl.php">wyloguj</a>
<a href="index.php">login</a>
<a href="test.php">test</a>
<br/>
<input type="checkbox" class="12" />
<input type="checkbox" class="a21" />
<input type="checkbox" class="a21" />
<input type="checkbox" class="12" />
<input type="checkbox" name="a21" value="1" class="a21"/>

<body>
</html>
<script>


var checkboxs = document.getElementsByTagName('input');
for(i=0; i<checkboxs.length; i++ ) {
    checkboxs[i].onclick = function(a) {
       //if(a.ctrlKey) {
		var x=document.getElementsByClassName(this.className);
		if(this.checked){
			for(j=0; j<x.length; j++ ) 
				x[j].disabled = true;
			
			this.disabled = false;
		}
		else{
			for(j=0; j<x.length; j++ ) 
				x[j].disabled = false;
		
			//this.disabled = true;
		}
       // }
    }
}
	

</script>