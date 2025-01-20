import * as FilePond from 'filepond';
import 'filepond/dist/filepond.min.css';
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';
import FilePondPluginImagePreview from 'filepond-plugin-image-preview';
import 'filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css';
import FilePondPluginFileValidateSize from 'filepond-plugin-file-validate-size';
import {
    AutoLink,
    Autosave,
    BlockQuote,
    Bold,
    ClassicEditor,
    Essentials,
    Italic,
    Link,
    List,
    Paragraph,
    Superscript,
    Underline,
} from 'ckeditor5';
import 'ckeditor5/ckeditor5.css';

import 'bootstrap-icons/font/bootstrap-icons.css';

window.FilePond = FilePond;
window.FilePondPluginFileValidateType = FilePondPluginFileValidateType;
window.FilePondPluginImagePreview = FilePondPluginImagePreview;
window.FilePondPluginFileValidateSize = FilePondPluginFileValidateSize;

window.ClassicEditor = ClassicEditor;
window.AutoLink = AutoLink;
window.Autosave = Autosave;
window.BlockQuote = BlockQuote;
window.Bold = Bold;
window.Essentials = Essentials;
window.Italic = Italic;
window.Link = Link;
window.List = List;
window.Paragraph = Paragraph;
window.Superscript = Superscript;
window.Underline = Underline;
