$(document).ready(
    function()
    {
        $('.header_burger').click(

            function(event)
            {
                //Eсли бургер меню не нажато, и при этом меню сайта не открыто
                if(!($('.header_burger').hasClass('active')) && !($('.smallMenu').hasClass('active')))
                {
                    $('.header_burger, .smallMenu, .footer').addClass('active');
                    $('body').addClass('lock');

                }

                //Eсли бургер меню нажато, и при этом меню навигации сайта открыто
                else if(($('.header_burger').hasClass('active')) && ($('.smallMenu').hasClass('active')))
                {
                    $('.header_burger, .smallMenu, .footer').removeClass('active');
                    $('body').removeClass('lock');
                }

                //Eсли бургер меню нажато, и при этом меню авторизации открыто 
                else if(($('.header_burger').hasClass('active')) && ($('.userMenu').hasClass('active')))
                {
                    $('.header_burger, .userMenu, .footer').removeClass('active');
                    $('body').removeClass('lock');
                }
                
            }
        );

        $('.userPhoneMenu').click(

            function(event)
            {   
                //Eсли бургер меню нажато, и при этом меню авторизации открыто 
                if(!($('.header_burger').hasClass('active')) && !($('.userPhoneMenu').hasClass('active')))
                {
                    $('.header_burger, .userMenu, .footer').addClass('active');
                    $('body').addClass('lock');
                }

                //Eсли бургер меню нажато, и при этом меню авторизации открыто 
                else if(($('.header_burger').hasClass('active')) && ($('.userMenu').hasClass('active')))
                {
                    $('.header_burger, .userMenu, .footer').removeClass('active');
                    $('body').removeClass('lock');
                }
                //Eсли бургер меню нажато, меню навигации открыто, но не открыто меню авторизации
                else if(($('.header_burger').hasClass('active')) && !($('.userMenu').hasClass('active')) && ($('.smallMenu').hasClass('active')))
                {
                    $('.smallMenu').removeClass('active');
                    $('.userMenu').addClass('active');
                }
            }
        );
    }
);
