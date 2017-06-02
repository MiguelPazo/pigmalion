$(document).ready(function () {
    $('.btn-action').click(function () {
        divParent = $(this).parent().parent();
        data = divParent.find('.before').val();

        if ($.trim(data) != '') {
            $('.btn-action').prop('disabled', true);
            url = $(this).attr('rel');

            $.ajax({
                type: 'GET',
                url: url,
                data: {data: data},
                success: function (response) {
                    divParent.find('.after').val(response);
                    $('.btn-action').prop('disabled', false);
                },
                error: function (xhr, statusText) {
                    divParent.find('.after').val('error');
                    $('.btn-action').prop('disabled', false);
                }
            });
        }
    });
})