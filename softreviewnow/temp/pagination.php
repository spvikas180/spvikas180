<div id="pagination">
    <?php
    $pagination_total_row = $pagination_data->num_rows;
    $total_pagination_number = ceil($pagination_total_row / $rowperpage);
    if ($total_pagination_number == $page) {
        $next_btn = '';
    } else {
        $next_btn = '<li><a href="' . $url_page . ($page + 1) . '" style="width:auto;">Next</a></li>';
    }
    if ($page == 1) {
        $pre_btn = '';
    } else {
        $pre_btn = '<li><a href="' . $url_page . ($page - 1) . '" style="width:auto;">Previous</a></li>';
    }
    ?>
    <?php
    if ($pagination_total_row > $rowperpage) {
        if ($total_pagination_number >= 10) {
            echo'<ul class="pagination text-center" style=" float: right;">';
            if ($page <= 4) {
                echo $pre_btn;
                for ($i = 1; $i <= 5; $i++) {
                    if ($i == $page) {
                        $active_class = 'active';
                    } else {
                        $active_class = '';
                    }
                    echo '<li class="' . $active_class . '"><a href="' . $url_page . $i . '">' . $i . '</a></li>';
                }
                echo '<li class=""><a>...</a></li>';
                echo '<li class=""><a href="' . $url_page . $total_pagination_number . '">' . $total_pagination_number . '</a></li>';
                echo $next_btn;
            } elseif ($page >= $total_pagination_number - 3) {
                echo $pre_btn;
                echo '<li class=""><a href="' . $url_page . '1' . '">1</a></li>';
                echo '<li class=""><a>...</a></li>';
                for ($i = $total_pagination_number - 4; $i <= $total_pagination_number; $i++) {
                    if ($i == $page) {
                        $active_class = 'active';
                    } else {
                        $active_class = '';
                    }
                    echo '<li class="' . $active_class . '"><a href="' . $url_page . $i . '">' . $i . '</a></li>';
                }
                echo $next_btn;
            } elseif ($page > 4 && $page < $total_pagination_number - 3) {
                echo $pre_btn;
                echo '<li><a href="' . $url_page . '1' . '">1</a></li>';
                echo '<li><a>...</a></li>';
                echo '<li><a href="' . $url_page . ($page - 1) . '">' . ($page - 1) . '</a></li>';
                echo '<li class="active"><a href="' . $url_page . $page . '">' . $page . '</a></li>';
                echo '<li><a href="' . $url_page . ($page + 1) . '">' . ($page + 1) . '</a></li>';
                echo '<li><a>...</a></li>';
                echo '<li><a href="' . $url_page . $total_pagination_number . '">' . $total_pagination_number . '</a></li>';
                echo $next_btn;
            }
            echo '</ul>';
        } else {
            ?>
            <ul class="pagination text-center" style=" float: right;">
                <?php
                echo $pre_btn;
                for ($i = 1; $i <= $total_pagination_number; $i++) {
                    if ($i == $page) {
                        $active_class = 'active';
                    } else {
                        $active_class = '';
                    }
                    ?>
                    <li class="<?php echo $active_class; ?>"><a href="<?php echo $url_page . $i ?>"><?php echo $i ?></a></li>
                    <?php
                }
                echo $next_btn;
                ?>
            </ul>
        <?php }
        ?>
    <?php } ?>
</div>