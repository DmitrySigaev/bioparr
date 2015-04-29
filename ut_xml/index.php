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

var foo = {
  x: 10,
  y: 20
};

console.info("test");


var a = {
  x: 10,
  calculate: function (z) {
    return this.x + this.y + z;
  }
};

var b = {
  y: 20,
  __proto__: a
};
 
var c = {
  y: 30,
  __proto__: a
};

var b1 = Object.create(a, {y: {value: 30}});
var c1 = Object.create(a, {y: {value: 40}});

 
// вызываем унаследованный метод
console.info(b.calculate(30)); // 60
console.info(c.calculate(40)); // 80

 console.info( foo );

console.info(b1.calculate(30)); // 60
console.info(c1.calculate(40)); // 80
 console.info( c );

  
var strXML = "<root>" +
        "<group>" +
            "<item name=\"test1\">test data 1</item>"+
            "<item name=\"test2\">test data 2</item>"+
            "<item name=\"test3\">test data 3</item>"+
        "</group>"+
    "</root>";
    jsonData = xml.xmlToJSON(strXML);
    console.dir(jsonData);
    console.log(JSON.stringify(jsonData));

 
</script>
</head>
<body>
	<div id='conversation'>&nbsp;</div>
	<input type='text' id='message'>
</body>
</html>
