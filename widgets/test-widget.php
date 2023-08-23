<?php
class Elementor_oEmbed_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'oembed';
	}

	public function get_title() {
		return __( 'oEmbed', 'plugin-name' );
	}

	public function get_icon() {
		return 'fa fa-code';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'plugin-name' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'url',
			[
				'label' => __( 'URL to embed', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'url',
				'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
			]
		);

		$this->add_control(
			'link',
			[
				'label' => __( 'Link to embed', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'input_type' => 'Link',
				'placeholder' => __( 'https://your-link.com', 'plugin-name' ),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		echo '<div class="oembed-elementor-widget">You typed url is : '.$settings['url'].'<br> Yout Link is: '.$settings['link'].'</div>';

	}

}