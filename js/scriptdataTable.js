
$(document).ready(function() {
    // Inicialización de DataTable
    var table = $('#example').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing": "Procesando...",
        },
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        dom: 'Bfrtilp',
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="bi bi-filetype-csv"></i>',
                titleAttr: 'Exportar a Excel',
                className: 'btn btn-success'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="bi bi-filetype-pdf"></i>',
                titleAttr: 'Exportar a PDF',
                className: 'btn btn-danger'
            },
            {
                extend: 'print',
                text: '<i class="bi bi-printer"></i>',
                titleAttr: 'Imprimir',
                className: 'btn btn-secondary'
            },
            {
                extend: 'colvis',
                text: 'Filtrar Columnas',
                className: 'btn btn-light'
            },
        ]
    });






});


   
//    const btnAbrirModal = document.querySelector("#abrir-modal");
//    const btnCerrarModal = document.querySelector("#cerrar-modal");
//    const modal = document.querySelector("#modal");

//    btnAbrirModal.addEventListener('click', function(){
//        modal.showModal();
//    })
//    btnCerrarModal.addEventListener('click',function(){
//        modal.close();
//    })
