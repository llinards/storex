@props(['image' => '', 'id' => '', 'name' => '', 'required' => ''])
<input
    class="form-control file-upload"
    type="file"
    id="{{ $name }}"
    name="{{ $name }}[]"
    required="{{ $required }}"
    image="{{ $image }}"
/>

<script type="module">
    const fileUpload = document.getElementById('{{ $name }}');
    const fileId = fileUpload.getAttribute('id');
    const files = fileUpload.getAttribute('image');

    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateSize);

    console.log(files);

    const existingImages = [];

    if (files) {
        existingImages.push(files);
    }

    // Build the FilePond files array from the existingImages array
    const preloadedFiles = existingImages.map((imageUrl) => ({
        source: imageUrl,
        options: {
            type: 'local', // Mark as preloaded
        },
    }));

    const options = {
        server: {
            {{--url: '/{{ app()->getLocale() }}/home/upload',--}}
            process: '/{{ app()->getLocale() }}/home/file/store',
            revert: '/{{ app()->getLocale() }}/home/file/destroy',
            load: '/storage/',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
        },
        allowFileSizeValidation: true,
        allowReorder: true,
        allowImagePreview: true,
        files: preloadedFiles,
    };

    const optionsConfig = {
        category_image: {
            labelIdle: 'Pievienot bildi',
            maxFileSize: '500KB',
            acceptedFileTypes: ['image/*'],
        },
        product_images: {
            labelIdle: 'Pievienot bildes',
            maxFileSize: '500KB',
            acceptedFileTypes: ['image/*'],
            allowMultiple: true,
        },
    };

    if (optionsConfig[fileId]) {
        Object.assign(options, optionsConfig[fileId]);
    }

    FilePond.create(fileUpload, options);
</script>
