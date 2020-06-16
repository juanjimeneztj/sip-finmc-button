<?php
namespace JuanJimenezTJFinMCButton\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class sip_finmc_button extends Widget_Base {

	public function get_name() {
		return 'sip-finmc-button';
	}

	public function get_title() {
		return __( 'Juan Jimenez FinMC Button', 'sip-finmc-button' );
	}

	public function get_icon() {
		return 'eicon-button';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	public function get_script_depends() {
		return [ 'sip-finmc-button' ];
	}

	protected function _register_controls() {
		//Empieza primera seccion del content
        $this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'sip-finmc-button' ),
			]
		);

		$this->add_control(
			'title',
			[
				'label' => __( 'Text Button', 'sip-finmc-button' ),
				'type' => Controls_Manager::TEXT,
                'placeholder' => 'Example Text'
			]
		);
        
        $this->add_control(
			'btn_url',
			[
				'label' => __( 'Link', 'sip-finmc-button' ),
				'type' => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'sip-finmc-button' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);

		$this->end_controls_section();
        //termina primera seccion del content

		$this->start_controls_section(
			'section_style_text',
			[
				'label' => __( 'Text Styles', 'sip-finmc-button' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'max-width',
			[
				'label' => __( 'Max-width', 'sip-finmc-button' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 100,
				'max' => 1600,
				'step' => 1,
				'default' => 850,
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'max-width: {{VALUE}}px;',
                ],
			]
		);
        
        $this->add_control(
			'font_family',
			[
				'label' => __( 'Font Family', 'sip-finmc-button' ),
				'type' => Controls_Manager::FONT,
				'default' => "'Open Sans', sans-serif",
			]
		);
        
        $this->add_responsive_control(
			'fsize',
			[
				'label' => __( 'Font-size', 'sip-finmc-button' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 5,
				'max' => 300,
				'step' => 1,
				'default' => 19,
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn-title' => 'font-size: {{VALUE}}px;',
                ],
                'devices' => [ 'desktop', 'tablet', 'mobile' ],
				'prefix_class' => 'juanjimeneztj-fsize-%s',
			]
		);
        
        $this->add_control(
			'text_color',
			[
				'label' => __( 'Text Color', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn-title' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'text_color_hover',
			[
				'label' => __( 'Text Color Hover', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#505ac7',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn:hover .juanjimeneztj-finmc-btn-title' => 'color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'alignment',
			[
				'label' => __( 'Alignment', 'sip-finmc-button' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => __( 'Left', 'sip-finmc-button' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => __( 'Center', 'sip-finmc-button' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => __( 'Right', 'sip-finmc-button' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
                'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'text-align: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'text_transform',
			[
				'label' => __( 'Text Transform', 'sip-finmc-button' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => __( 'None', 'sip-finmc-button' ),
					'uppercase' => __( 'UPPERCASE', 'sip-finmc-button' ),
					'lowercase' => __( 'lowercase', 'sip-finmc-button' ),
					'capitalize' => __( 'Capitalize', 'sip-finmc-button' ),
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-finmc-btn-title' => 'text-transform: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'text_weight',
			[
				'label' => __( 'Text Weight', 'sip-finmc-button' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'normal',
				'options' => [
					'normal' => __( 'normal', 'sip-finmc-button' ),
					'lighter' => __( 'lighter', 'sip-finmc-button' ),
					'bold' => __( 'bold', 'sip-finmc-button' ),
				],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-finmc-btn-title' => 'font-weight: {{VALUE}};',
				],
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_background',
			[
				'label' => __( 'Background Styles', 'sip-finmc-button' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'bg_color',
			[
				'label' => __( 'Background Color', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#505ac7',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'background-color: {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'bg_color_hover',
			[
				'label' => __( 'Background Color Hover', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#ffffff',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn:hover' => 'background-color: {{VALUE}};',
                ]
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_border',
			[
				'label' => __( 'Border Styles', 'sip-finmc-button' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
        
        $this->add_control(
			'border_color',
			[
				'label' => __( 'Border Color', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#505ac7',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'border: 3px solid {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'border_color_hover',
			[
				'label' => __( 'Border Color Hover', 'sip-finmc-button' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#505ac7',
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn:hover' => 'border: 3px solid {{VALUE}};',
                ]
			]
		);
        
        $this->add_control(
			'border_radius',
			[
				'label' => __( 'Border-radius', 'sip-finmc-button' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 0,
				'max' => 100,
				'step' => 1,
				'default' => 0,
                'selectors' =>[
                    '{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'border-radius: {{VALUE}}px;',
                ],
			]
		);
        
        $this->end_controls_section();
        
        $this->start_controls_section(
			'section_style_padding',
			[
				'label' => __( 'Margins Styles', 'sip-finmc-button' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

        $this->add_control(
			'padding',
			[
				'label' => __( 'Padding', 'sip-finmc-button' ),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
                'default' => ['top' => '15', 'right'=>'15', 'bottom'=> '15', 'left'=> '15','unit' => 'px'],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ]
			]
		);
        
        $this->add_control(
			'margin',
			[
				'label' => __( 'Margin', 'sip-finmc-button' ),
                'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
                'allowed_dimensions' => ['top', 'bottom'],
                'default' => [ 'top' => '0', 'right'=>'auto', 'bottom'=> '0', 'left'=> 'auto'],
				'selectors' => [
					'{{WRAPPER}} .juanjimeneztj-finmc-btn' => 'margin: {{TOP}}{{UNIT}} auto {{BOTTOM}}{{UNIT}} auto;',
                ]
			]
		);
        
        $this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
        $target = $settings['btn_url']['is_external'] ? ' target="_blank"' : '';
		$nofollow = $settings['btn_url']['nofollow'] ? ' rel="nofollow"' : '';
        
        echo '<div><a class="juanjimeneztj-finmc-btn" href="'.$settings['btn_url']['url'].'" '.$target.' '.$nofollow.'">';
            echo '<span class="juanjimeneztj-finmc-btn-title" style="font-family: ' . $settings['font_family'] . ';">';
                echo $settings['title'];
            echo '</span>';
        echo '</a></div>';
	}

	protected function _content_template() {
		?>
		<#
		var target = settings.btn_url.is_external ? ' target="_blank"' : '';
		var nofollow = settings.btn_url.nofollow ? ' rel="nofollow"' : '';
		#>
		
		<div><a href="{{ settings.btn_url.url }}"{{ target }}{{ nofollow }} class="juanjimeneztj-finmc-btn">
            <span class="juanjimeneztj-finmc-btn-title" style="font-family: {{ settings.font_family }};">
                {{{ settings.title }}}
            </span>
		</a></div>
		<?php
	}
}
