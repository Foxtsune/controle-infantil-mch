/*DATATABLE*/
function datatableApplyIndex() {
            $('#table_id').DataTable({
        	/*TRADUÇÕES*/
        	"language": {
    		    "sEmptyTable": "Nenhum registro encontrado",
    		    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
    		    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
    		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    		    "sInfoPostFix": "",
    		    "sInfoThousands": ".",
    		    "sLengthMenu": "_MENU_ Resultados por página",
    		    "sLoadingRecords": "Carregando...",
    		    "sProcessing": "Processando...",
    		    "sZeroRecords": "Nenhum registro encontrado",
    		    "sSearch": "Pesquisar",
    		    "oPaginate": {
    		        "sNext": "Próximo",
    		        "sPrevious": "Anterior",
    		        "sFirst": "Primeiro",
    		        "sLast": "Último"
    		    },
    		    "oAria": {
    		        "sSortAscending": ": Ordenar colunas de forma ascendente",
    		        "sSortDescending": ": Ordenar colunas de forma descendente"
    		    }
    		},/*SCROLLING*/
                "scrollY": false,
                "scrollX": "1000px",
                "scrollCollapse": true,
                "paging":         true,
                "columnDefs": [
                    { "width": "auto", targets: 0 },//img-edit 
                    { "width": "auto", targets: 1 },//age
                    { "width": "400px", targets: 2 },//name
                    { "width": "auto", targets: 3 },//inscription
                    { "width": "auto", targets: 4 },//birth
                    { "width": "400px", targets: 5 },//mother
                    { "width": "auto", targets: 6 },//situation
                    { "width": "auto", targets: 7 }//img-delete
                ],
                "fixedColumns": true
        });
};

function datatableApplyUsers() {
        $('#table_id').DataTable({
            /*TRADUÇÕES*/
            "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ Resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            },/*SCROLLING*/
                "scrollY": false,
                "scrollX": "1000px",
                "scrollCollapse": true,
                "paging":         true,
                "columnDefs": [
                    { "width": "auto", targets: 0 },//img-edit
                    { "width": "610px", targets: 1 },//nome
                    { "width": "610px", targets: 2 },//email
                    { "width": "auto", targets: 3 }//img-apagar
                ],
                "fixedColumns": true
        });
};


/*MODAL TRIGGER*/
$('#exampleModal').modal('show');

/*PHONE MASK*/
function setupPhoneMaskOnField(selector){
  var inputElement = $(selector)

  setCorrectPhoneMask(inputElement);
  inputElement.on('input, keyup', function(){
    setCorrectPhoneMask(inputElement);
  });
}

function setCorrectPhoneMask(element){
  if (element.inputmask('unmaskedvalue').length > 10 ){
    element.inputmask('remove');
    element.inputmask('(99) [9]9999-9999')
  } else {
    element.inputmask('remove');
    element.inputmask({mask: '(99) 9999-9999[9]', greedy: false})
  }
}

 function applyMask(){
    setupPhoneMaskOnField('#tel');
    setupPhoneMaskOnField('#tel2');
};