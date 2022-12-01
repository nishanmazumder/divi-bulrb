<?php

class DIBL_HelloWorld extends ET_Builder_Module {

	public $slug       = 'dibl_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'bdsoftcreation.com',
		'author'     => 'Nishan M',
		'author_uri' => 'bdsoftcreation.com',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'dibl-divi-blurb' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'dibl-divi-blurb' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dibl-divi-blurb' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new DIBL_HelloWorld;
