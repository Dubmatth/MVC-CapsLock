$('document').ready(function (){

    $('#inputUsername').on('input', checkUsername);

    function checkUsername(){
        const $user_name = $('#inputUsername').val()
        const $invalidUsername = $('#invalidUsername')
        if ($user_name != ''){
            $.ajax({
                url: '../asset/ajax/rqUsername.php',
                type: 'GET',
                dataType: 'json',
                data: { user_name: $user_name },
                async: true
            }).done(function(result){
                if(!result[0]) {
                    $invalidUsername.text('Nom d\'utilisateur disponible !').css('color', 'green')
                } else {
                    $invalidUsername.text('Nom d\'utilisateur indisponible !').css('color', 'red')
                }
            })
        } else {
            $invalidUsername.empty()
        }
        
    }


});
