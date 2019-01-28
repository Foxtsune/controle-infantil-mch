/*DATATABLE*/
function Datatable() {
    $('#table_id').DataTable({
    	/*TRADUÇÕES*/
    	"language": {
		    "sEmptyTable": "Nenhum registro encontrado",
		    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
		    "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
		    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
		    "sInfoPostFix": "",
		    "sInfoThousands": ".",
		    "sLengthMenu": "_MENU_ resultados por página",
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
		"scrollY":        "400px",
		"scrollX":        "1000px",
        "scrollCollapse": true,
        "paging":         true,
        "columnDefs": [
            { "width": "auto", targets: 0 },//img
            { "width": "230px", targets: 1 },//nome
            { "width": "auto", targets: 2 },//dtCad
            { "width": "auto", targets: 3 },//dtNasc
            { "width": "230px", targets: 4 },//Pai
            { "width": "230px", targets: 5 },//Mae
            { "width": "230px", targets: 6 },//Logradouro
            { "width": "auto", targets: 7 },//numero
            { "width": "230px", targets: 8 },//Bairro
            { "width": "100px", targets: 9 },//Telefone
            { "width": "100px", targets: 10 },//Telefone
            { "width": "auto", targets: 11 },//Contato
            { "width": "auto", targets: 12 },//Zoneamento
            { "width": "auto", targets: 13 }//Situacao
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