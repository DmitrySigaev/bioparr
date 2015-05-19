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
<script>

 if (!window.chem)
    chem = {};

function errorHandler(e) {
  var msg = '';

  switch (e.code) {
    case FileError.QUOTA_EXCEEDED_ERR:
      msg = 'QUOTA_EXCEEDED_ERR';
      break;
    case FileError.NOT_FOUND_ERR:
      msg = 'NOT_FOUND_ERR';
      break;
    case FileError.SECURITY_ERR:
      msg = 'SECURITY_ERR';
      break;
    case FileError.INVALID_MODIFICATION_ERR:
      msg = 'INVALID_MODIFICATION_ERR';
      break;
    case FileError.INVALID_STATE_ERR:
      msg = 'INVALID_STATE_ERR';
      break;
    default:
      msg = 'Unknown Error';
      break;
  };

  console.log('Error: ' + msg);
}

var Test = window.open('accholine.mol');
</script>

<script  src='script/util/vec2.js'> </script>
<script  src='script/util/map.js'> </script>
<script  src='script/util/pool.js'> </script>

<script  src='script/util/set.js'>
/* Uncaught TypeError: Cannot read property 'empty' of undefinedchem.Struct.findConnectedComponent @ struct.js:895(anonymous function) @ struct.js:929util.Map.each @ map.js:30util.Pool.each @ pool.js:70chem.Struct.findConnectedComponents @ struct.js:927chem.Struct.markFragments @ struct.js:951chem.Molfile.parseCTFile @ molfile.js:62
*/
</script>

<script  src='/script/chem/struct.js'> </script>
<script  src='/script/chem/molfile.js'> </script>
<script  src='script/util/c_proto.js'> </script>

<script  src='script/util/common.js'> </script>
<script  src='/script/chem/sgroup.js'> </script>
<script  src='xml.js'> </script>

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
<input type="file" id="your-files" multiple>

<script>
var file_data;
var control = document.getElementById("your-files");
control.addEventListener("change", function(event) {
    // Когда происходит изменение элементов управления, значит появились новые файлы
    var i = 0,
        files = control.files,
        len = files.length;
 
    for (; i < len; i++) {
        console.log("Filename: " + files[i].name);
        console.log("Type: " + files[i].type);
        console.log("Size: " + files[i].size + " bytes");

      if(!!(files[i].name).match('.cml'))
      {
        var reader = new FileReader();
         reader.onloadend = function(e) {
         var file_data = this.result;
         jsonData = xml.xmlToJSON(file_data);
         console.dir(jsonData);
         console.log(JSON.stringify(jsonData));
        };
        reader.readAsText(files[i]);
       }
      
      if(!!(files[i].name).match('.mol'))
      {
        var reader = new FileReader();
         reader.onloadend = function(e) {
         var file_data = this.result;
         console.info(file_data);
         console.info(file_data.split('\n'));
         var mol = chem.Molfile.parseCTFile(file_data.split('\n'));
         console.info(mol);
        };
        reader.readAsText(files[i]);
       }
        
       
    }
 
}, false);



</script>

</body>
</html>
