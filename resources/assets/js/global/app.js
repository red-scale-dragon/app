const dragonapp = ($ => {
	function init() {
		doAjaxSample();
	}
	
	function doAjaxSample() {
		$.post(ajax_url, {
			'action': 'dragonfw_dragonapp_get_dragon_names',
		}, res => {
			response = JSON.parse(res);
			console.log(response);
		});
	}
	
	return { init };
})(jQuery);

jQuery(document).ready(dragonapp.init);
