
<html>
<body>
	<h1>Hello world</h1>

	<button onclick="getDateTime()">Get date and time</button>
	<div id="dt"></div>
	<script>
		function getDateTime() {
			var d=new Date();
			var ori = document.location.origin;
			checkSameOrigin();
		}
		
		function checkSameOrigin() {
			alert(document.cookie);
			var loc = window.parent.document.location.host;
			var ori = document.location.origin;
			document.getElementById("dt").innerHTML = "<br>Location: " + loc + "<br>Origin: " + ori;
		}
	</script>

</body>
</html>