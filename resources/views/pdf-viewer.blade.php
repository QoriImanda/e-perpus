<!-- resources/views/pdf/viewer.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Viewer</title>
    <!-- Load PDF.js Express Viewer -->
    <!-- Sertakan PDF.js -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist/build/pdf.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.15.6/pdf.min.js"></script>
    <!-- CSS for PDF.js viewer -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.15.6/pdf_viewer.css" rel="stylesheet">
    <style>
        /* Style untuk kontainer PDF viewer */
        #pdf-viewer {
            width: 100%;
            height: 600px; /* Sesuaikan dengan ketinggian yang diinginkan */
        }
    </style>

    <!-- CSS untuk styling PDF.js Express Viewer -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('pdfjs-express/lib/pdf.viewer.css') }}"> --}}
</head>

<body>

    <h4>sdadas</h4>

    <div id="pdf-viewer"></div>




    <script>
        // URL ke PDF yang ingin Anda tampilkan
        const pdfUrl = "http://127.0.0.1:8000/File/Buku/202406142124_LAPORAN%20MONEV%20UPM%20GENAP%20PGSD%202022-2023%20OK.pdf";

        // Muat dokumen PDF menggunakan PDF.js
        const loadingTask = pdfjsLib.getDocument(pdfUrl);
        loadingTask.promise.then(function(pdfDoc) {
            // Resolusi halaman PDF yang ingin Anda tampilkan
            const pageNumber = 1;

            pdfDoc.getPage(pageNumber).then(function(page) {
                const scale = 1.5;
                const viewport = page.getViewport({ scale });

                // Membuat kanvas untuk menampilkan halaman PDF
                const canvas = document.createElement('canvas');
                const context = canvas.getContext('2d');
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Menambahkan kanvas ke div yang telah Anda siapkan sebelumnya
                document.getElementById('pdf-viewer').appendChild(canvas);

                // Render halaman PDF ke kanvas
                const renderContext = {
                    canvasContext: context,
                    viewport: viewport
                };
                const renderTask = page.render(renderContext);
                renderTask.promise.then(function() {
                    console.log('Halaman PDF berhasil dirender');
                });
            });
        }).catch(function(reason) {
            // Handle error saat memuat PDF
            console.error('Gagal memuat PDF: ' + reason);
        });
    </script>


</body>

</html>
