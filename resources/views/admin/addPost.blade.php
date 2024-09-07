@extends('layouts.admin')

@section('content')
<!-- Mostra messaggi di successo -->
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<!-- Mostra messaggi di errore -->
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<!-- Mostra URL dell'immagine se è stato caricato correttamente -->
@if (session('image_url'))
<div class="alert alert-info">
    Immagine caricata: <a href="{{ session('image_url') }}" target="_blank">{{ session('image_url') }}</a>
</div>
@endif
    <div class="containerAddPhotosVideoNavbar">
        <div id="contTopheaderPhotosAddBtn" class="contLeft">
            <span id="contTopheaderPhotosAdd" class="d-none">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
        </div>
        <div class="contCenter">
            <span id="contCenterheaderPhotosAdd">Crea un nuovo Post</span>
        </div>
        <form action="{{ route('addPost.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="contRight">
                <button type="submit" id="contRightheaderPhotosAdd" class="d-none">Next</button type="submit">
                <input type="file" name="image" accept="image/*" multiple id="file" style="display: none;">

            </div>

        </form>
    </div>

    <div class="containerAddPhotosVideoMain">
        <div id="previewText">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                    <path
                        d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                </svg>
            </span>
            <span class="title mt-2">Sposta foto e video qui</span>

            <label for="file" class="custom-file-label mt-3">Seleziona dal computer</label>
        </div>

        <!-- Area di anteprima delle immagini -->
        <div class="mainContainerImagePreviewContainer">
            <div id="imagePreviewContainer" class="">
                <div id="imagePreview"></div>
            </div>
        </div>

        <!-- Bottoni per modificare la dimensione dell'immagine -->
        <div id="ContainerAspectRatioButtonsId" class="ContainerAspectRatioButtons">
            <div id="openAspectRatioButtons" class="circleAspectRatioButtons">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707m4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707" />
                </svg>
            </div>
            <input type="range" id="zoom" min="0.5" max="2" step="0.1" value="1">Zoom
            <button id="reset">Reset</button>


            <div id="aspectRatioButtons" class="aspectRatioButtons">
                <button data-ratio="original">
                    <span>Stories</span><span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-image" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                            <path
                                d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                        </svg>
                    </span>
                </button>
                <button data-ratio="1:1">
                    <span>Post 1:1</span><span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-app" viewBox="0 0 16 16">
                            <path
                                d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                        </svg>
                    </span>
                </button>
                <button data-ratio="4:5">
                    <span>4:5</span><span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                            <path
                                d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0z" />
                        </svg>
                    </span>
                </button>
                <button data-ratio="16:9">
                    <span>16:9</span><span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                            class="bi bi-aspect-ratio" viewBox="0 0 16 16">
                            <path
                                d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z" />
                            <path
                                d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <!-- Nuove funzioni -->
        <div id="editor-controls" class="editor-controls">

            <button id="rotateLeft">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z" />
                    <path
                        d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466" />
                </svg>
            </button>
            <button id="rotateRight">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                    class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z" />
                    <path
                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466" />
                </svg>
            </button>
        </div>



        <canvas id="canvas" style="display:none;"></canvas>
    </div>

    <style>
        /* Stile del contenitore dell'immagine */
        #imagePreviewContainer {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            border: 2px solid #ccc;
            /* Bordi */
            background-size: calc(100% / 3) calc(100% / 3);
            /* Dimensione della griglia */
            background-image: linear-gradient(to right, #ddd 1px, transparent 1px),
                linear-gradient(to bottom, #ddd 1px, transparent 1px);
            transition: .5s ease-in-out;
            padding-bottom: 80vh;
        }

        #imagePreview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <script>
        const fileInput = document.getElementById('file');
        const form = document.getElementById('imageForm');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const imagePreview = document.getElementById('imagePreview');
        const previewText = document.getElementById('previewText');
        const aspectRatioElem = document.getElementById('aspectRatioButtons');
        const aspectRatioButtons = document.getElementById('openAspectRatioButtons');
        const ContainerAspectRatioButtons = document.getElementById('ContainerAspectRatioButtonsId');
        const editorControls = document.getElementById('editor-controls');
        const contCenterheaderPhotosAdd = document.getElementById('contCenterheaderPhotosAdd');
        const contTopheaderPhotosAdd = document.getElementById('contTopheaderPhotosAdd');
        const contRightheaderPhotosAdd = document.getElementById('contRightheaderPhotosAdd');
        const goBackNoImgBtn = document.getElementById('contTopheaderPhotosAddBtn');

        let originalImage = null;
        let rotation = 0;
        let zoomLevel = 1;
        let aspectRatioButtonsFlag = false;


        // click sul documento
        document.addEventListener('click', function() {
            if (aspectRatioButtonsFlag) {
                aspectRatioButtonsFlag = false;
                aspectRatioElem.style.display = 'none';
            };
        });

        // pulsante per apreire aspectRatioButtons
        aspectRatioButtons.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            aspectRatioButtonsFlag = !aspectRatioButtonsFlag;



            aspectRatioButtonsFlag ? aspectRatioElem.style.display = 'flex' :
                aspectRatioElem.style.display = 'none';
        });

        // Quando l'utente seleziona un'immagine
        fileInput.addEventListener('change', function(event) {
            const files = event.target.files;

            // Reset dell'anteprima
            imagePreview.innerHTML = '';
            previewText.style.display = 'none';
            ContainerAspectRatioButtons.style.display = 'flex';
            editorControls.style.display = 'flex';
            rotation = 0; // Reset della rotazione
            zoomLevel = 1; // Reset dello zoom
            contCenterheaderPhotosAdd.innerHTML = 'Raccolta';
            contTopheaderPhotosAdd.classList.remove('d-none');
            contRightheaderPhotosAdd.classList.remove('d-none');

            // resetta i files per tornare indietro
            goBackNoImgBtn.addEventListener('click', function() {
                fileInput.value = null;
                location.reload();
            })

            // se l'array di immagini è vuoto
            if (files.length < 1) {
                previewText.style.display = 'block';
                return;
            }

            // Anteprima dell'immagine selezionata
            const file = files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.position = 'absolute';
                img.style.top = '0';
                img.style.left = '0';
                img.style.zIndex = '-1';
                originalImage = img; // Salva l'immagine originale

                imagePreview.appendChild(img);
            };

            reader.readAsDataURL(file);
        });

        // Funzione per ridimensionare il contenitore dell'immagine
        function resizeContainer(ratio) {
            let newWidth, newHeight;

            switch (ratio) {
                case '1:1':
                    newWidth = '100%';
                    newHeight = '100%'; // Quadrato
                    break;
                case '4:5':
                    newWidth = '100%';
                    newHeight = '125%'; // Rapporto 4:5
                    break;
                case '16:9':
                    newWidth = '100%';
                    newHeight = '56.25%'; // Rapporto 16:9
                    break;
                default:
                    newWidth = '100%';
                    newHeight = '80vh'; // Dimensione originale
            }

            // Applica le nuove dimensioni al contenitore
            imagePreviewContainer.style.paddingBottom = newHeight;
        }

        // Ruota l'immagine a sinistra
        document.getElementById('rotateLeft').addEventListener('click', function() {
            rotation -= 90;
            applyImageTransformations();
        });

        // Ruota l'immagine a destra
        document.getElementById('rotateRight').addEventListener('click', function() {
            rotation += 90;
            applyImageTransformations();
        });

        // Zoom dell'immagine
        document.getElementById('zoom').addEventListener('input', function(event) {
            zoomLevel = event.target.value;
            applyImageTransformations();
        });

        // Reset dell'immagine (rotazione e zoom)
        document.getElementById('reset').addEventListener('click', function() {
            rotation = 0;
            zoomLevel = 1;
            applyImageTransformations();
        });

        // Aggiungi un listener agli eventi click sui bottoni delle proporzioni
        document.querySelectorAll('.aspectRatioButtons button').forEach(button => {
            button.addEventListener('click', function() {
                const ratio = button.getAttribute('data-ratio');
                resizeContainer(ratio);
            });
        });

        // Funzione per applicare le trasformazioni dell'immagine
        function applyImageTransformations() {
            if (!originalImage) return;
            originalImage.style.transform = `rotate(${rotation}deg) scale(${zoomLevel})`;
        }
    </script>
@endsection
