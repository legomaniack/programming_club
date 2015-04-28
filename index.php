<!doctype html>
<html>

<head>

	<title>unquote</title>

	<meta name="viewport" 
	content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

	<script src="../components/webcomponentsjs/webcomponents.js">
	</script>

	<link rel="import" href="../components/font-roboto/roboto.html">
	<link rel="stylesheet" href="style.css" type="text/css">
	
</head>

<body unresolved>

	<core-header-panel>

		<core-toolbar>
			<paper-tabs id="tabs" selected="all" self-end>
				<paper-tab name="all">All</paper-tab>
				<paper-tab name="favorites">Favorites</paper-tab>
			</paper-tabs>
		</core-toolbar>

		<!-- main page content will go here -->

	</core-header-panel>
	<script>
		var tabs = document.querySelector('paper-tabs');

		tabs.addEventListener('core-select', function() {
		console.log("Selected: " + tabs.selected);
		});
	</script>
</body>

</html>
