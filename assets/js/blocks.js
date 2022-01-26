// alert("Block, Alert");

(function(blocks, element){
	var el = element.createElement;
	blocks.registerBlockType('vswp-plugin-dev/vswp-block01', {

		title: 'VSWP Block',
		icon: 'admin-home',
		category: 'layout',
		edit: function(prop){

			return el('p',{className: prop.className},"Hello I'm in Editor")
		},
		save: function(prop){

			return el('p',{className: prop.className},"Hello I'm in Frontend")
		}
	});
}(window.wp.blocks, window.wp.element));