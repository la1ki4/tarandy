$(document).ready(
    function()
    {
        //При нажатии на крестик в модальном окне
        $('.popup__close').click(
            function(event)
            {
                //Закрываем модальное окно
                $('.popup').toggleClass('hidden__popup');
            }
        );
    }
);
