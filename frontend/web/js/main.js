function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $(input).siblings('img').attr('src', e.target.result).show();
            $(input).siblings('.select-text').hide();
            $(input).siblings('.name-text').addClass('loaded');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function alertPurchase(name,bought,bonus,cur,time) {
    var id = Date.parse(new Date);
    var name_html = '<p class="alert-text">'+name+'  <span>'+bought+'    '+cur+'</span></p>';
    var bonus_html = '<p class="alert-text">and get extra bonus <span>'+bonus+'  '+cur+'</span></p>';
    var time_html = '<p class="alert-sub-text">'+time+'</p>';
    var html = '<div style="display: none;" id='+id+' class="alert-purchase alert"><button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button><h4 class="alert-title">Token Purchase</h4>'+name_html+bonus_html+time_html+'</div>';

    $('body').append(html);
    $('#'+id).show(300);
    setTimeout(function () {
        $('#'+id).hide(300,function () {
            $('#'+id).remove();
        });

    },5000);
}

document.addEventListener('DOMContentLoaded',function () {
    var navbar =   $('#navbar-adaptive');
    navbar.on('show.bs.collapse',function () {
        navbar.addClass('opened');
    });
    navbar.on('shown.bs.collapse',function () {
        // console.log(2);
    });
    navbar.on('hide.bs.collapse',function () {
        navbar.removeClass('opened');
    });
    navbar.on('hidden.bs.collapse',function () {
        // console.log(4);
    });
});

window.addEventListener('load', function () {
    var styleJs = {
        heigth: 0,
        offer: function () {
            this.setHeigth($('#tab-bonus-1 .token-block-wrap'));
            this.setHeigth($('#tab-bonus-2 .token-block-wrap'));
        },
        setHeigth: function (items) {
            this.heigth = 0;
            items.each(function () {
                if ($(this).outerHeight() > styleJs.heigth) {
                    items.css({minHeight: '0'});
                    styleJs.heigth = $(this).outerHeight();
                }
            });
            if (this.heigth > 0) {
                items.css({minHeight: this.heigth + 'px'});
            }
        }
    };
    setTimeout(function () {
        styleJs.offer();
    },100);

    $(window).resize(styleJs.offer());
});
