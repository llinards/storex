<textarea
    id="description-text-area"
    name="{{ $name }}"
    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
></textarea>

<script type="module">
    const LICENSE_KEY = 'GPL';
    const editorConfig = {
        toolbar: {
            items: ['bold', 'italic', 'underline', 'superscript', '|', 'link', 'blockQuote'],
            shouldNotGroupWhenFull: false
        },
        plugins: [AutoLink, Autosave, BlockQuote, Bold, Essentials, Italic, Link, Paragraph, Superscript, Underline],
        initialData:
            '<h2>Congratulations on setting up CKEditor 5! 🎉</h2>',
        licenseKey: LICENSE_KEY,
        link: {
            addTargetToExternalLinks: true,
            defaultProtocol: 'https://',
            decorators: {
                toggleDownloadable: {
                    mode: 'manual',
                    label: 'Downloadable',
                    attributes: {
                        download: 'file'
                    }
                }
            }
        },
        placeholder: 'Type or paste your content here!'
    };

    ClassicEditor.create(document.querySelector('#description-text-area'), editorConfig);
</script>
