<?php

/**
 * Enable certain blocks
 */
function guidelines_child_allowed_block_types_all($allowed_blocks) {
    return $allowed_blocks;
}
add_filter('allowed_block_types_all', 'guidelines_child_allowed_block_types_all', 2);
