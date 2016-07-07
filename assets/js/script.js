/*
 * Máscaras de Formulário
 */
$('#data_nascimento').mask('00/00/0000');
$('#end_cep').mask('00000-000');

$('#telefone1, #telefone2').mask('(00) 00000-0009').keypress(function () {
    console.log($(this).val());
    if ($(this).val().length == 15) // Celular com 9 dígitos -> (00) 00000-0000
        $(this).mask('(00) 00000-0009');
    else
        $(this).mask('(00) 0000-00009');
});