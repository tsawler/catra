CKEDITOR.editorConfig = function (config) {
    config.allowedContent = true;
    config.extraAllowedContent = 'iframe[*]';
    config.enterMode = CKEDITOR.ENTER_BR;
    config.shiftEnterMode = CKEDITOR.ENTER_BR;
    config.filebrowserImageBrowseUrl = '/laravel-filemanager?type=Images';
    config.filebrowserBrowseUrl = '/laravel-filemanager?type=Files';
    config.extraPlugins = 'sitepages';

    config.toolbar_MyToolbar =
        [
            ['Source', 'Preview'],
            ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'],
            ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'RemoveFormat'],
            ['Image', 'Table', 'HorizontalRule'], ['Maximize'],
            ['Link', 'Sitepages', 'Unlink'],
            '/',
            ['FontSize', 'Styles', 'Format', 'TextColor'],
            ['Bold', 'Italic'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote']

        ];

    config.toolbar_MiniToolbar =
        [
            ['Bold', 'Italic', 'Sourcedialog'],
            ['FontSize', 'Styles', 'Format', 'TextColor'],
            ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'RemoveFormat'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'Image', 'Video', 'Link', 'Sitepages', 'Unlink']

        ];

    config.toolbar_QuickEdit =
        [
            ['Source'],
            ['Bold', 'Italic'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote', 'Maximize']

        ];

    config.toolbar_TinyToolbar =
        [
            ['Bold', 'Italic', 'Underline']

        ];
};

CKEDITOR.on('instanceReady', function (ev) {

    var blockTags = ['div', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'p', 'pre', 'li', 'blockquote', 'ul', 'ol',
        'table', 'thead', 'tbody', 'tfoot', 'td', 'th', 'br'];

    for (var i = 0; i < blockTags.length; i++) {
        ev.editor.dataProcessor.writer.setRules(blockTags[i], {
            indent: false,
            breakBeforeOpen: false,
            breakAfterOpen: false,
            breakBeforeClose: false,
            breakAfterClose: false
        });
    }
});