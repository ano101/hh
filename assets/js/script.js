$( document ).ready(function() {
    $('#create_user').on('click', function (){
        $('.notify').hide();
        let data = {
            'action': 'add_user',
            'name': $('#name').val(),
            'salary': $('#salary').val(),
            'age': $('#age').val(),
        };
        if(data['name'] && data['salary'] && data['age']){
            $.ajax({
                url: '/ajax.php',
                method: 'post',
                data: data,
                success: function(data){
                    data = $.parseJSON(data);
                    console.log(data);
                    if(data['status'] == 'success'){
                        $('.notify').show();
                        $('.notify').html('<div class="alert alert-success">'+data['message']+'</div>');
                    } else {
                        $('.notify').show();
                        $('.notify').html('<div class="alert alert-danger">'+data['message']+'</div>');
                    }
                }
            });
        } else {
            $('.notify').show();
            $('.notify').html('<div class="alert alert-danger">Не все заполнено!</div>');
        }
    });
});