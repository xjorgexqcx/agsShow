<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <style type="text/css">
    body{
    	margin: 0;
	    text-align: center;
	    width: 100%;
	    /*background-color: rgba(0,0,0,0.5);*/
    }
    .mdl-progress {
	    height: 6px;
	    width: 400px;
	    margin: 0 auto;
	    margin-top: 37px;
		}
    </style>
</head>
<body>
	<!-- Simple MDL Progress Bar --><!-- MDL Progress Bar with Indeterminate Progress -->
<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate progress-demo"></div>
</script>

<!-- MDL Progress Bar with Buffering -->
<div id="p3" class="mdl-progress mdl-js-progress progress-demo"></div>
<script>
  document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
    this.MaterialProgress.setProgress(33);
    this.MaterialProgress.setBuffer(87);
  });
</script>
</body>
</html>