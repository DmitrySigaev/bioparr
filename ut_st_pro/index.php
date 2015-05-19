<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>CML Parser</title>
<style>
	body {width:960px;margin:auto}
	#conversation {height:500px;border:1px solid #000}
	input {width:100%}
</style>
<script src='xml.js'>

</script>
<script>

String.prototype.strip = function() {
   return this.replace(/^\s+/,"").replace(/\s+$/,"");
   //return this.replace(/\s*$/, '').replace(/^\s*/, '');
};


var MyStr = "    Test String   ";
console.info(MyStr);

var MyTest = MyStr.strip();

console.info(MyTest);

 
</script>
</head>
<body>
Finish!
</body>
</html>
