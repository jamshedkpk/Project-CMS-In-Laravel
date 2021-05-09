require('./bootstrap');
require('tinymce/themes/silver');
const tinymce=require('tinymce');
import tinymce from 'tinymce';
tinymce.init
({
selector:'textarea#myTextarea',
height:600,	
});
