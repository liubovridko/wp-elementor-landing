<?php
/**
 *  Custom Field Widget 
 */

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class Custom_Field_Widget extends Widget_Base {
	public function get_name() {
        return 'custom-field-widget';
    }

    public function get_title() {
        return 'Custom Field Widget';
    }

    public function get_icon() {
        return 'eicon-table';
    }

    public function get_categories() {
        return [ 'general' ];
    } 

	private function get_post_types() {
    $post_types = get_post_types(['public' => true], 'objects');

    $options = [];
    foreach ($post_types as $post_type) {
        $options[$post_type->name] = $post_type->label;
    }

    return $options;
   }

  private function get_posts_by_type() {
    $settings = $this->get_settings_for_display();

    $post_type = $settings['post_type'];

    $posts = get_posts([
        'post_type' => $post_type,
        'numberposts' => -1,
    ]);

    $options = [];
    foreach ($posts as $post) {
        $options[$post->ID] = $post->post_title;
    }

    return $options;
}

   protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Content',
            ]
        );
		$this->add_control(
		    'post_type',
		    [
		        'label' => 'Post Type',
		        'type' => Controls_Manager::SELECT,
		        'options' => $this->get_post_types(),
		        'default' => 'post',
		    ]
		);

		$this->add_control(
		    'post_id',
		    [
		        'label' => 'Post',
		        'type' => Controls_Manager::SELECT2,
		        'options' => $this->get_posts_by_type(),
		        'default' => '',
		        'condition' => [
		            'post_type!' => '',
		        ],
		    ]
		);
		 $this->end_controls_section();
    }

    protected function render() {
    $settings = $this->get_settings_for_display();

    $post_id = $settings['post_id'];
    $post_type = $settings['post_type'];

    if (empty($post_id)) {
        echo 'Please select a post';
        return;
    }

    // Получение кастомных полей выбранного поста
    $custom_fields = get_fields($post_id);

    // Вывод значений и названий кастомных полей в виде таблицы
    echo '<table>';
    foreach ($custom_fields as $field_name => $field_value) {
        echo '<tr>';
        echo '<td>' . $field_name . '</td>';
        echo '<td>' . $field_value . '</td>';
        echo '</tr>';
    }
    echo '</table>';
  }
}