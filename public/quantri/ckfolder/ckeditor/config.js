/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.skin='office2013',
	config.basicEntities = true,
    config.entities = true,
    config.allowedContent = true,
    config.fillEmptyBlocks = true,
    config.fullPage = true,
    config.enterMode = CKEDITOR.ENTER_BR,	
	config.filebrowserBrowseUrl = PUBLIC+'ckfinder/ckfinder.html',
	config.forcePasteAsPlainText = true     
	
};
CKEDITOR.dtd.$removeEmpty['i'] = false;
CKEDITOR.dtd.$removeEmpty['span'] = false;
