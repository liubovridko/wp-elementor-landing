<?php
/**
 *  Custom Widget CF
 */

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class Custom_Widget extends Widget_Base {
    
 public function get_name() {
        return 'custom-widget';
    }

    public function get_title() {
        return 'Custom Widget';
    }

    public function get_icon() {
        return 'eicon-table';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Content',
            ]
        );

        $this->add_control(
            'table_data',
            [
                'label' => 'Table Data',
                'type' => Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'field_name',
                        'label' => 'Field Name',
                        'type' => Controls_Manager::TEXT,
                    ],
                    [
                        'name' => 'field_value',
                        'label' => 'Field Value',
                        'type' => Controls_Manager::TEXT,
                    ],
                ],
                'default' => [
                    [
                        'field_name' => 'Field 1',
                        'field_value' => 'Value 1',
                    ],
                    [
                        'field_name' => 'Field 2',
                        'field_value' => 'Value 2',
                    ],
                ],
                'title_field' => '{{{ field_name }}}',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        $table_data = $settings['table_data'];

        echo '<table>';

        foreach ($table_data as $item) {
            echo '<tr>';
            echo '<td>' . $item['field_name'] . '</td>';
            echo '<td>' . $item['field_value'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    }

    
}