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
	  href="bower_components/core-icons/core-icons.html">
	<link rel="import"
	  href="bower_components/paper-icon-button/paper-icon-button.html">
	  
	<link rel="import"
	  href="components/content-card.html">
	
	<style>
		html,body {
			height: 100%;
			margin: 0;
			background-color: #EEEEEE;
			font-family: 'RobotoDraft', sans-serif;
		}
		core-header-panel {
			height: 100%;
			overflow: auto;
			-webkit-overflow-scrolling: touch; 
		}
		core-toolbar {
		  background: #03a9f4;
		  color: white;
		}
		.app-drawer{
			background: #FAFAFA;
		}
		.content {
			width: 80%;
			margin: 50px auto;
		}
		
		@media (min-width: 481px) {
			.content {
				width: 500px;
			}
		}
	</style>
	
</head>

<body unresolved>
	<core-drawer-panel forceNarrow>
		<core-header-panel drawer class="app-drawer">
			<core-toolbar></core-toolbar>
			<div> Drawer content... </div>
		</core-header-panel>
		<core-header-panel main>
			<core-toolbar>
				<paper-icon-button icon="menu" core-drawer-toggle></paper-icon-button>
				<div>Title</div>
			</core-toolbar>
			<div class="content" layout vertical center> 
				<content-card 
					img="https://placekitten.com/g/600/500">
					<h2>This is a card with a cat</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing
					elit, sed do eiusmod tempor incididunt ut labore et
					dolore magna aliqua. Ut enim ad minim veniam, quis 
					nostrud exercitation ullamco laboris nisi ut aliquip 
					ex ea commodo consequat.
					</p>
				</content-card>
			</div>
		</core-header-panel>
	</core-drawer-panel>
	<script>
		
	</script>
</body>

</html>
