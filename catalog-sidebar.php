<aside class="catalog-sidebar">
    <h4>Категории</h4>


    <?php

        $allData = $GLOBALS['pageData']['allData'];
        $pageSlug = $GLOBALS['pageSlug'];

        function findObjectById($array, $id) {
            foreach ($array as $item) {
                if ($item['id'] === $id) {
                    return $item;
                }
                if (isset($item['childrenCategoryParsed'])) {
                    $result = findObjectById($item['childrenCategoryParsed'], $id);
                    if ($result !== null) {
                        return $result;
                    }
                }
            }
            
            return null;
        }

        

        $categoryArr = array();

        if (count($allData) > 0) {
            
            // Подготовка массива
            foreach ($allData as $key => $parentCat) {
                $data = array(
                    'id' => $parentCat['id'],
                    'name' => $parentCat['name'],
                    'href' => $parentCat['href'],
                    'childrenCategory' => array(),
                );

                if ($parentCat['href'] == $pageSlug) {
                    $data['active'] = true;
                }

                if ($parentCat['childrenCategory'] && count($parentCat['childrenCategory']) > 0) {
                    foreach ($parentCat['childrenCategory'] as $key => $subcat) {
                        $subcatData = findObjectById($allData, $subcat);
                        $subcatNewData = array(
                            'id' => $subcatData['id'],
                            'name' => $subcatData['name'],
                            'href' => $subcatData['href'],
                        );

                        if ($subcatData['href'] == $pageSlug) {
                            $subcatNewData['active'] = true;
                            $data['active'] = true;
                        }

                        array_push($data['childrenCategory'], $subcatNewData);
                    }
                }

                array_push($categoryArr, $data);
            }

            
            if (count($categoryArr) > 0) {
                echo '<div class="list">';

                foreach ($categoryArr as $key => $item) {
                    echo '<div class="item ' . (($item['active']) ? 'is-open' : '') . '" id="' . $item['id'] . '">';
                        echo '<div class="toggle">';
                            echo '<a href="'. home_url($item['href']) . '">' . $item['name'] . '</a>';
                            echo '<i></i>';
                        echo '</div>';

                        if (count($item['childrenCategory']) > 0) {
                            echo '<ul>';
                            foreach ($item['childrenCategory'] as $key => $subcat) {
                                echo '<li class="' . ($key >= 6 ? 'is-more is-hidden' : '') . '">';
                                    echo '<a href="'. home_url($subcat['href']) . '" class="' . (($subcat['active']) ? 'is-active' : '') . '">' . $subcat['name'] . '</a>';
                                echo '</li>';
                            }
                            if (count($item['childrenCategory']) > 6) {
                                echo '<li class="sub-toggle"><span>Показать все</span></li>';
                            }
                            echo '</ul>';
                        }
                    echo '</div>';
                }

                echo '</div>';
            }
        }


        // if (count($allData) > 0) {
        //     echo '<div class="list">';
        //     foreach ($allData as $key => $item) {

        //         echo '<div class="item" id="' . $item['id'] . '">';
        //             echo '<a href="'. home_url($item['href']) . '" class="toggle">' . $item['name'] . '</a>';
        //             // if ($GLOBALS['pageSlug'] != null) {

        //             // }

                    
        //             if ($item['childrenCategory'] && count($item['childrenCategory']) > 0) {
        //                 echo '<ul>';
        //                 foreach ($item['childrenCategory'] as $key => $subcat) {
        //                     $subcatData = findObjectById($allData, $subcat);
        //                     if ($subcatData) {
        //                         echo '<li>';
        //                             echo '<a href="'. home_url($subcatData['href']) . '">' . $subcatData['name'] . '</a>';
        //                         echo '</li>';
        //                     }
        //                 }
        //                 echo '</ul>';
        //             }
        //         echo '</div>';

        //     }
        //     echo '</div>';
        // }
    ?>
</aside>



