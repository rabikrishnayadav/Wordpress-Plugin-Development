// alert("Block, Alert");

(function(blocks, element){
	var el = element.createElement;
	var admin_style = {

		backgroundColor: 'green',
		padding: '20px',
		color: 'black'
	}

	var frontend_style = {

		backgroundColor: 'gold',
		padding: '20px',
		color: 'black'
	}
	blocks.registerBlockType('vswp-plugin-dev/vswp-block01', {

		title: 'VSWP Block',
		icon: 'admin-home',
		category: 'layout',
		edit: function(){

			return el('p',{style: admin_style},"Hello I'm in Editor")
		},
		save: function(){

			return el('p',{style: frontend_style},"Hello I'm in Frontend")
		}
	});
}(window.wp.blocks, window.wp.element));