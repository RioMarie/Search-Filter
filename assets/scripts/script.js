$(document).ready(function(){
    $.get('items/partial_index', function(result){
        $('#table').html(result);
    });

    $(document).on('change', 'form', function(){
        var form = $(this);
        $.post(form.attr('action'), form.serialize(), function(result){
            $('#table').html(result);
        });
        return false;
    });
});