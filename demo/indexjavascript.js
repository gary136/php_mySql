$(function () {
    
    $("#Taichung").on('select', function () {
        $('#d1').val('Taichung 1')
        $('#d2').val('Taichung 2')
        $('#d3').val('Taichung 3')
      });
    $("#test").on('click', function () {
        $('#d1').text('Taichung 1')
        $('#d2').text('Taichung 2')
        $('#d3').text('Taichung 3')
    });
    console.log($('#city option:selected').val())
    if ($('#city option:selected').val() == 'Taichung') {
        console.log($('#city option:selected').val())
        $('#d1').text('Taichung 1')
        $('#d2').text('Taichung 2')
        $('#d3').text('Taichung 3')
    }
});