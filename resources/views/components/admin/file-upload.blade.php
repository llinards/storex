<input class="form-control file-upload" type="file" id="{{ $name }}" name="{{ $name }}[]" required="{{ $required }}">

<script type="module">
    const fileUpload = document.getElementById('{{$name}}');
    const fileId = fileUpload.getAttribute('id');
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateSize);
    const options = {
        server: {
            url: '/home/upload',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        },
        allowFileSizeValidation: true,
        allowReorder: true,
        allowImagePreview: true,
    };
    const optionsConfig = {
        "category_image": {
            labelIdle: 'Pievienot bildi',
            maxFileSize: '500KB',
            acceptedFileTypes: ['image/*'],
            allowImagePreview: false,
        },
    };
    if (optionsConfig[fileId]) {
        Object.assign(options, optionsConfig[fileId]);
    }
    options.required = fileUpload.getAttribute('required') === 'true';
    FilePond.create(fileUpload, options);
</script>
