@props(['images' => [], 'id' => '', 'name' => '', 'required' => ''])

<input
    class="form-control file-upload"
    type="file"
    id="{{ $name }}"
    name="{{ $name }}[]"
    required="{{ $required }}"
    data-images="{{ json_encode($images) }}"/>

<script type="module">
    const fileUpload = document.getElementById('{{ $name }}');
    const fileId = fileUpload.getAttribute('id');
    const images = JSON.parse(fileUpload.getAttribute('data-images'));

    FilePond.registerPlugin(FilePondPluginFileValidateType);
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateSize);
    
    const existingImages = [];

    if (Array.isArray(images)) {
        images.forEach(image => {
            if (image) {
                existingImages.push(image);
            }
        });
    }

    const preloadedFiles = existingImages.map((imageUrl) => ({
        source: imageUrl,
        options: {
            type: 'local', // Mark as preloaded
        },
    }));

    const options = {
        server: {
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
