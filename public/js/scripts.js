$(document).ready(function() {
    $(document).on('click','.btn.btn-lg.btn-primary',function(event){
        var oldlink = $('input[name=start_url]').val();

        if(oldlink != '') {
            $.ajax({
                url: '/add-short',
                data: {
                    'link': oldlink
                },
                type: 'GET',
                success: function (data) {
                    console.log(data);
                    alert('Ваша короткая ссылка: http://short_link.createwebpages.ru/'+data);
                }
            });
        }else{
            alert('Вы не ввели ссылку');
        }

        event.preventDefault();
    });
});
