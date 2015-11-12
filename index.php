<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>MyAngularLite</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="node_modules/angular/angular.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="logo-wrapper">
			<h1>MyAngularLite</h1>
			<p>Simply Shows the power of AngularJS</p>
			<br />
		</div>
		<div class="box" ng-app="">
			<h5>Round 1 - Hello (your name)</h5>
			<p>Name : <input type="text" ng-model="name"></p>
  			<h1>Hello {{name}}</h1>
  			Code:<br />
  			<code>
  				&lt;h5&gt;Round 1 - Hello (your name)&lt;/h5&gt;<br />
				&lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br />
  				&lt;h1&gt;Hello {{name}}&lt;/h1&gt;
  			</code>
  			<br /><br />
		</div>
		<div class="box">
			<h5>Round 2 - Securing Output</h5>
			<div data-ng-app="" data-ng-init="firstName='John'">
				<p>The name is <span data-ng-bind="firstName"></span></p>
			</div>
  			Code:<br />
  			<code>
  				&lt;h5&gt;Round 1 - Hello (your name)&lt;/h5&gt;<br />
				&lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br />
  				&lt;h1&gt;Hello {{name}}&lt;/h1&gt;
  			</code>
  			<br /><br />
		</div>
		<div class="box" ng-app="">
			<h5>Round 3 - Hello (your name)</h5>
			<p>Name : <input type="text" ng-model="name"></p>
  			<h1>Hello {{name}}</h1>
  			Code:<br />
  			<code>
  				&lt;h5&gt;Round 1 - Hello (your name)&lt;/h5&gt;<br />
				&lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br />
  				&lt;h1&gt;Hello {{name}}&lt;/h1&gt;
  			</code>
  			<br /><br />
		</div>
		<div class="box" ng-app="">
			<h5>Round 4 - Hello (your name)</h5>
			<p>Name : <input type="text" ng-model="name"></p>
  			<h1>Hello {{name}}</h1>
  			Code:<br />
  			<code>
  				&lt;h5&gt;Round 1 - Hello (your name)&lt;/h5&gt;<br />
				&lt;p&gt;Name : &lt;input type="text" ng-model="name"&gt;&lt;/p&gt;<br />
  				&lt;h1&gt;Hello {{name}}&lt;/h1&gt;
  			</code>
  			<br /><br />
		</div>
		<br />
		(c) jccultima123
		<br /><br /><br />
	</body>
</html>