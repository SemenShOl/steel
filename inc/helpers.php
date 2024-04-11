<?php
    if (!defined('ABSPATH')) {
        die('Direct access forbidden.');
    }

    /**
     * Theme’s helpers
     */

    // Support SVG mime types
    function cc_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
    add_filter('upload_mimes', 'cc_mime_types');


    // Get meta option from builder
    function get_meta_builder( $id, $shortcodeName ) {
        $meta = get_post_meta( absint( $id ), 'fw:opt:ext:pb:page-builder:json', true );
        $result = json_decode( $meta );

        foreach ( $result as $stdClass ) {
            if( $stdClass instanceof stdClass ) {
                if( $stdClass->shortcode === $shortcodeName ) {
                    return $stdClass->atts;
                }
            }
        }

        return null;
    }

    // Cut content on word count
    function content($post_id, $limit) {
        $content_post = get_post($post_id);

        $content = explode(' ', $content_post->post_content, $limit);

     
        if (count($content) >= $limit) {
            array_pop($content);
            $content = preg_replace('/[.+]/','', $content);
            $content = implode(" ",$content).'...';
        } else {
            $content = preg_replace('/[.+]/','', $content);
            $content = implode(" ",$content);
        } 

        $content = apply_filters('the_content', $content);
        $content = str_replace(']]>', ']]&gt;', $content);

        return $content;
    }


    
    if ( ! function_exists( 'ul_is_woocommerce_activated' ) ) {
        /**
         * Query WooCommerce activation
         */
        function ul_is_woocommerce_activated() {
            return class_exists( 'WooCommerce' ) ? true : false;
        }
    }






    function custom_catalog_404_template($template) {
        // global $wp_query;

        if (is_404() && strpos(explode('?', $_SERVER['REQUEST_URI'])[0], '/catalog/') !== false) {
            if (file_exists(get_template_directory() . '/single-catalog.php')) {
                return get_template_directory() . '/single-catalog.php';
            }
        }
    
        return $template;
    }
    add_filter('template_include', 'custom_catalog_404_template');


    // Поиск по массиву
    function searchInArray($array, $searchText, $searchField, &$results) {
        foreach ($array as $item) {
            if (is_array($item)) {
                if (isset($item[$searchField]) && trim($item[$searchField], '/') === trim($searchText, '/')) {
                    $results[] = $item;
                } else {
                    searchInArray($item, $searchText, $searchField, $results);
                }
            }
        }
    }

    // Поиск категорий и товаров по json файлу
    function getCatalogData($searchText = '', $searchField = 'href') {
        // $start = microtime(true);

        $path = realpath(__DIR__ . '/../assets/data'); 
        $file = 'result.json';
        $json = file_get_contents($path . '/' . $file);
        $json_data = json_decode($json, true);

        if ($json_data && count($json_data) > 0) {
            

            $data = array(
                'allData' => $json_data,                
                'selectData' => null  
            );

            if ($searchText != '') {
                $results = []; 

                searchInArray($json_data, $searchText, $searchField, $results);
                
                $data['selectData'] = $results[0];
            }

            return $data;
        }


        // echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
    }




    // add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
    // function add_admin_link($items, $args){
    //     // var_dump($args);
    //     // var_dump($args->theme_location);


    //     if( $args->theme_location == 'header-menu' ){
    //         $items .= '<li class="menu-item"><a title="Admin11111" href="'. esc_url( admin_url() ) .'">' . __( '1111111Admin' ) . '</a></li>';
    //     }
    //     return $items;
    // }




    // Пункты вложенного меню в каталоге
    function my_custom_menu_item($items, $args) {
        $parent_item_number = 2; // Порядок в меню
        $pos = nth_strpos($items, '</a>', $parent_item_number) + 4;

        // var_dump($GLOBALS['pageData']['allData']);

        if (!empty($GLOBALS['pageData']['allData'])) {
            $str_to_insert = '<ul class="sub-menu">';

            if (count($GLOBALS['pageData']['allData']) > 0) {
                foreach ($GLOBALS['pageData']['allData'] as $key => $item) {
                    // var_dump($item);x
                    $str_to_insert .= '<li><a href="' . $item['href'] . '">' . $item['name'] . '</a></li>';
                }
            }

            $str_to_insert .= '</ul>';

            $items = substr($items, 0, $pos) . $str_to_insert . substr($items, $pos);
        }
        return $items;
    }
    function nth_strpos($str, $substr, $n, $stri = false) {
        if ($stri)
        {
            $str = strtolower($str);
            $substr = strtolower($substr);
        }
        $ct = 0;
        $pos = 0;
        while (($pos = strpos($str, $substr, $pos)) !== false)
        {
            if (++$ct == $n)
            {
                return $pos;
            }
            $pos++;
        }
        return false;
    }
    add_filter('wp_nav_menu_items', 'my_custom_menu_item', 10, 2);



    add_filter( 'get_the_archive_title_prefix', function( $prefix ) {
        return '';
    } );



    class DB {
		private $db;

		public function __construct() {
            // $servername = "localhost";
            // $username = "root";
            // $password = "root";
            // // $database = "metall_catalog"; 
            // $database = "metall_catalog1"; 

            // Beget
            $servername = "localhost";
            $username = "y101gkdw_metcat";
            $password = "LhdR&4xD";
            $database = "y101gkdw_metcat";

            $this->db = new mysqli($servername, $username, $password, $database);

            if ($this->db->connect_error) {
                echo '<div style="margin-top:30px;">Товары не найдены:<br> ' . $this->db->connect_error . '</div>';
            }

            // $this->db->close();
		}
        public function query($sql, $params = []) {

            $queryAll = $this->db->query($sql);
            $totalCount = 0;

            if ($queryAll) {
                $totalCount = $queryAll->num_rows;
            }

            // Фильтрация 
            if ($params['filters'] != null && count($params['filters']) > 0) {
                foreach ($params['filters'] as $key => $filter) {
                    if ($key == 0) {
                        $sql .= "WHERE ";
                    }
                    if ($key > 0) {
                        $sql .= ' AND ';
                    }

                    $sql .= "`" . $filter['title'] . "` = '" . $filter['value'] . "' ";
                }
            }

            // Offset/Limit
            if (is_int($params['offset']) && is_int($params['limit'])) {
                $sql .= ' LIMIT ' . $params['offset'] . ', ' . $params['limit'];
            }


            $query = $this->db->query($sql);
            $result = array(
                'status' => 'error'
            );
            
            if ($query) {
                $result = array(
                    'totalCount' => $totalCount,
                    'count' => $query->num_rows,
                    'data' => $query->fetch_all(MYSQLI_ASSOC),
                    'status' => 'success'
                );
            }

            return $result;
		}
        public function getProducts($table, $sql = '', $params = [])
		{
			return $this->query("SELECT * FROM $table " . $sql, $params);
		}
        public function getFiltersData($table)
		{
			return $this->query("SELECT * FROM $table LIMIT 20000");
		}
	}

    function getCategoryProducts($slug, $args) {
        $data = array();

        $db = new DB;

        $params = array(
            'offset' => $args['offset'],
            'limit' => $args['limit'],
        );

        if ($args['filters'] != null && count($args['filters']) > 0) {
            $params['filters'] = $args['filters'];
        }

        $data = $db->getProducts($slug, '', $params);

        return $data;
    }

    function getFiltersData($slug) {
        $db = new DB;
        $data = $db->getFiltersData($slug);

        $filtersArr = array();

        if (count($data['data']) > 0) {
            foreach ($data['data'] as $key1 => $row) {

                // Заголовок фильтр
                if ($key1 == 0) {
                    foreach ($row as $key2 => $col) {
                        if ($key2 != 'id' && $key2 != 'Товар' && $key2 != 'createdAt' && $key2 != 'updatedAt') {
                            // $val = $col;

                            if (strlen($col) > 1) {
                                // if ((int)$col > 0) $val = (int)$col;
                                $filtersArr[$key2] = array($col);
                            }
                        }
                    }
                } else {
                    if (count($row) > 0) {
                        foreach ($row as $key2 => $col) {
                            if ($key2 != 'id' && $key2 != 'Товар' && $key2 != 'createdAt' && $key2 != 'updatedAt') {
                                if (count($filtersArr[$key2]) > 0) {
                                    if(!in_array($col, $filtersArr[$key2])) {
                                        // $val = $col;

                                        if (strlen($col) > 1) {
                                            // if ((int)$col > 0) $val = (int)$col;
                                            array_push($filtersArr[$key2], $col);

                                            sort($filtersArr[$key2]);
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $filtersArr;
    }



    