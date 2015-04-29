<!doctype html>
<html>

<head>

	<title>Westwood Programming Club</title>

	<meta name="viewport" 
	content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

	<script src="bower_components/webcomponentsjs/webcomponents.js">
	</script>

	<link rel="import" href="bower_components/font-roboto/roboto.html">
	<link rel="import"
	  href="bower_components/core-header-panel/core-header-panel.html">
	<link rel="import"
	  href="bower_components/core-toolbar/core-toolbar.html">
	<link rel="import"
	  href="bower_components/core-drawer-panel/core-drawer-panel.html">
	<link rel="import"
	  href="bower_components/paper-tabs/paper-tabs.html">
	  
	<style>
		html,body {
			height: 100%;
			margin: 0;
			background-color: #E5E5E5;
			font-family: 'RobotoDraft', sans-serif;
		}
		core-toolbar {
		  background: #03a9f4;
		  color: white;
		}
	</style>
	
</head>

<body unresolved>

	<core-drawer-panel>
		<core-header-panel drawer>
			<core-toolbar></core-toolbar>
			<div> Drawer content... </div>
		</core-header-panel>
		<core-header-panel main>
			<core-toolbar>
				<core-icon-button icon="menu" core-drawer-toggle></core-icon-button>
				<div>Title</div>
			</core-toolbar>
			<div> 
				Content
			</div>
		</core-header-panel>
	</core-drawer-panel>
	<script>
		var tabs = document.querySelector('paper-tabs');

		tabs.addEventListener('core-select', function() {
		console.log("Selected: " + tabs.selected);
		});
	</script>
</body>

</html>
