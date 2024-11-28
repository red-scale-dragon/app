<div id="dragon-test">
	<h1>Dragon Test</h1>
	<p>Every year we need to test our dragons to see if they've changed their names or colors.</p>
	<ul>
		<li>Page URL: {{ $page_url }}</li>
		<li>Shortcode URL: {{ $shortcode_url }}</li>
		<li>Shortcode Content: {{ $content }}</li>
	</ul>
	<div class="notice notice-success" role="alert">
		<p>Success notice! (See \App\Providers\AssetsServiceProvider)</p>
	</div>
	<div class="row">
		<div class="col-6">
			Left Side (Configured in \App\Controllers\ExampleController)
		</div>
		<div class="col-6">
			Right Side
		</div>
	</div>
</div>
