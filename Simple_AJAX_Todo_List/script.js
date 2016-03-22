$(document).ready(function(){

    $.ajax({
        url: 'getlist.php',
        method: 'POST'
    }).success(function( html ) {
            $( "#list" ).append( html );
    });

    $('#add-btn').on('click', function(){
        var addTask = $('#name').val();
        var data = { task: addTask };
        $.ajax({
            url: 'addtask.php',
            method: 'POST',
            data: data
        }).done(function( html ) {
            $( "#list" ).append( html );
            $('#name').val('');
        });
    });

    $('#list').on('click', '.done-btn', function () {
        var task = $(this).closest('.task');
        if (task.hasClass('new')) {
            var id = task.attr('id');
            var data = {id: id};
            $.ajax({
                url: 'done.php',
                method: 'POST',
                data: data
            }).success(function () {
                task.addClass('done').removeClass('new');
            });
        }
    });

    $('#list').on('click', '.cancel-btn', function () {
        var task = $(this).closest('.task');
        var id = task.attr('id');
        var data = {id: id};
        $.ajax({
            url: 'cancel.php',
            method: 'POST',
            data: data
        }).success(function () {
            task.remove();
        });
    });
});