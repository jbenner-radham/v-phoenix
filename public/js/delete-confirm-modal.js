// http://heera.it/bootstrap-3-delete-confirm-dialog

$('#confirm-delete').on('show.bs.modal', function (e) {
    $message = $(e.relatedTarget).attr('data-message');
    $(this).find('.modal-body p').text($message);
    $title = $(e.relatedTarget).attr('data-title');
    $(this).find('.modal-title').text($title);

    // Pass form reference to modal for submission on yes/ok
    var form = $(e.relatedTarget).closest('form');
    console.dir(form);
    $(this).find('.modal-footer #confirm').data('form', form);
});

<!-- Form confirm (yes/ok) handler, submits form -->
$('#confirm-delete').find('.modal-footer #confirm').on('click', function(){
    $(this).data('form').submit();
});