<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>autocomplete demo</title>
  <link rel="stylesheet" href="auto/jquery-ui.css">
  <script src="auto/jquery-1.9.1.js"></script>
  <script src="auto/jquery-ui.js"></script>
</head>
<body>
 
<label for="autocomplete">Select a programming language: </label>
<input id="autocomplete">
 
<script>
$( "#autocomplete" ).autocomplete({
  source: [ "c++", "java", "php", "coldfusion", "javascript", "asp", "ruby" ]
});
</script>
 
</body>
</html>