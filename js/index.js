$( document ).ready(function() {
   $('#rateit').on('click', function(){
        var x = $(this).rateit('value');
        console.log(x);
   });

    $('#id-test').on('change', function(){
        var val = $(this).val();
        console.log(val);
    });

    $('#title-test').click(function(){
        var val = $(this).val();
        console.log(val);
    });

    $('#id-test').on('blur', function(){
        var val = $(this).val();
        console.log(val);
    });

    $('#id-test').on('keydown', function(){
        var val = $(this).val();
        console.log(val);
    });

    $('#id-test').on('keyup', function(){
        alert('đã thả cc');
        // viet cc gi cung dc
    });

    $('#reduce-product').on('click', function(){
        var val = $('#qty-product').val();
        var res = parseInt(val) - 1;
        if(res <= 0) {
            res = 1;
        }
        $('#qty-product').val(res);
    });

    $('#increase-product').on('click', function(){
        var val = $('#qty-product').val();
        var res = parseInt(val) + 1;
        $('#qty-product').val(res);
    });

    var a = function(){
        console.log('định nghĩa trong document.ready');
    }
});

function test(){
    console.log("function định nghĩa ở ngoài document.ready");
}

$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
      autoplay: true
  });
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
        infinite: true,
        centerPadding: '0px'
});
