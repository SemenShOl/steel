<?php

class FW_Option_Type_Projects extends FW_Option_Type
{
    public function get_type() {
		return 'projects';
	}

	/**
	 * @internal
	 * {@inheritdoc}
	 */
	protected function _enqueue_static( $id, $option, $data ) {
	}

	/**
	 * @param string $id
	 * @param array $option
	 * @param array $data
	 *
	 * @return string
	 *
	 * @internal
	 */
	protected function _render( $id, $option, $data ) {
		$option['value'] = $data['value'];

		unset( $option['attr']['value'] );

		$html = '<input type="hidden" name="' . $option['attr']['name'] . '" value="">';

		$option['attr']['name'] .= '[]';
		// $option['attr']['multiple'] = 'multiple';

		// if ( ! isset( $option['attr']['size'] ) ) {
		// 	$option['attr']['size'] = '7';
		// }


        $args = array();
        $args['post_type'] = 'homes';
        $args['posts_per_page'] = -1;
        $args['order'] = 'DESC';

        $query = new WP_Query($args);
        if ($query->have_posts()) {
			$option['choices']['none'] = 'Не выбран';
            foreach ($query->posts as $key => $post) {
                $option['choices']['projects_' . $post->ID] = $post->post_title;
            }
        }


		$html .= '<select ' . fw_attr_to_html( $option['attr'] ) . '>' .
		         $this->render_choices( $option['choices'], $option['value'] ) .
		         '</select>';

		return $html;
	}

	/**
	 * @param array $option
	 * @param array|null|string $input_value
	 *
	 * @return array|null|string
	 *
	 * @internal
	 */
	protected function _get_value_from_input( $option, $input_value ) {
		if ( is_null( $input_value ) ) {
			$input_value = $option['value'];
		}

		// if ( ! is_array( $input_value ) ) {
		// 	$input_value = array();
		// }

		// if ( empty( $option['no-validate'] ) ) {
		// 	$all_choices = $this->get_choices( $option['choices'] );

		// 	foreach ( $input_value as $key => $value ) {
		// 		if ( ! isset( $all_choices[ $value ] ) ) {
		// 			unset( $input_value[ $key ] );
		// 		}
		// 	}

		// 	unset( $all_choices );
		// }

		return $input_value;
	}

	protected function render_choices( $choices, $value ) {
		if ( empty( $choices ) || ! is_array( $choices ) ) {
			return '';
		}

		$html = '';

		foreach ( $choices as $c_value => $choice ) {
			if ( is_array( $choice ) ) {
				if ( ! isset( $choice['attr'] ) ) {
					$choice['attr'] = array();
				}

				if ( isset( $choice['choices'] ) ) { // optgroup
					$html .= '<optgroup ' . fw_attr_to_html( $choice['attr'] ) . '>' .
					         $this->render_choices( $choice['choices'], $value ) .
					         '</optgroup>';
				} else { // choice as array (with custom attributes)
					$choice['attr']['value'] = $c_value;

					unset( $choice['attr']['selected'] ); // this is not allowed

					$html .= '<option ' . fw_attr_to_html( $choice['attr'] ) . ' ' .
					         ( in_array( $c_value, $value ) ? 'selected="selected" ' : '' ) . '>' .
					         htmlspecialchars( isset( $choice['text'] ) ? $choice['text'] : '', ENT_COMPAT, 'UTF-8' ) .
					         '</option>';
				}
			} else { // simple choice
				$html .= '<option value="' . esc_attr( $c_value ) . '" ' .
				         ( in_array( $c_value, $value ) ? 'selected="selected" ' : '' ) . '>' .
				         htmlspecialchars( $choice, ENT_COMPAT, 'UTF-8' ) .
				         '</option>';
			}
		}

		return $html;
	}

	/**
	 * @internal
	 */
	protected function _get_defaults() {
		return array(
			'value'   => array(),
			'choices' => array()
		);
	}





}

FW_Option_Type::register('FW_Option_Type_Projects');



