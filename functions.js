/* Add default properties to all blocks */
/*function addBackgroundColorStyle( props ) {
    return lodash.assign( props, { style: { backgroundColor: 'red' } } );
}

wp.hooks.addFilter(
    'blocks.getSaveContent.extraProps',
    'tntf/add-background-color-style',
    addBackgroundColorStyle
);*/

/* Add both normal and full-width background color styles to paragraph blocks */
wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 		'normal',
    label: 		'Normal',
    isDefault: 	true
} );
wp.blocks.registerBlockStyle( 'core/paragraph', {
    name: 		'full-background',
    label: 		'Full Background Color',
    isDefault: 	false
} );