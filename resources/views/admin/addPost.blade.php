@extends('layouts.admin')

@section('content')
    <div class="containerAddPhotosVideoNavbar">
        <span>Crea un nuovo Post</span>
    </div>

    <div class="containerAddPhotosVideoMain">
        <div id="wereNothing">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-image"
                    viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                    <path
                        d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                </svg>
            </span>
            <span class="title mt-2">Sposta foto e video qui</span>
    
            <label for="file" class="custom-file-label mt-3">Seleziona dal computer</label>
            <input type="file" name="files[]" accept="image/*" multiple id="file" style="display: none;">
        </div>

        <!-- Area di anteprima delle immagini -->
        <div id="imagePreviewContainer" class="mt-4">
            <span id="previewText"></span>
            <div id="imagePreview"></div>
        </div>
    </div>

    <script>
        document.getElementById('file').addEventListener('change', function(event) {
            const imagePreviewContainer = document.getElementById('imagePreview');
            const previewText = document.getElementById('previewText');
            const files = event.target.files;
            const containerEmpty = document.getElementById('wereNothing');
            console.log(containerEmpty);

            // Resetta l'area di anteprima
            imagePreviewContainer.innerHTML = '';
            previewText.style.display = 'none';
            containerEmpty.style.display = 'none';

            // Se non ci sono file, mostra il messaggio predefinito
            if (files.length === 0) {
                previewText.style.display = 'block';
                return;
            }

            // Crea un'anteprima per ogni immagine selezionata
            Array.from(files).forEach(file => {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.maxWidth = '250px'; // Imposta larghezza massima per l'anteprima
                    img.style.margin = '10px';
                    imagePreviewContainer.appendChild(img);
                };

                reader.readAsDataURL(file); // Legge il file come URL base64 per l'anteprima
            });
        });
    </script>
@endsection
