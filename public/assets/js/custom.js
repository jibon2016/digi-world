
// Splide Customization Script
document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        type   : 'loop',
        perPage: 5,
        perMove: 1,
        autoplay: true,
        autoWidth: true,
    } );
    splide.mount();
} );

//Hide The Lodear
$('.drops').hide()

// Price Range
const rangeInput = document.querySelectorAll(".range-input input");
const priceInput = document.querySelectorAll(".price-input input");
const progress = document.querySelector(".slider .progress")
let priceGap = 1000;
priceInput.forEach(input =>{
    input.addEventListener("input", e=>{
        let minVal = parseInt(priceInput[0].value);
        let maxVal = parseInt(priceInput[1].value);

        if((maxVal - minVal >= priceGap) && maxVal <= 10000){
            if (e.target.className === "input-min"){
                rangeInput[0].value = minVal;
                progress.style.left = (minVal/ rangeInput[0].max) * 100 + "%";
            }else {
                rangeInput[1].value = maxVal;
                progress.style.right =100 - (maxVal/ rangeInput[1].max) * 100 + "%";
            }
        }
    })
})

//For Range Filter
rangeInput.forEach(input =>{
    input.addEventListener("input", e=>{
        let minVal = parseInt(rangeInput[0].value);
        let maxVal = parseInt(rangeInput[1].value);

        if(maxVal - minVal < priceGap){
            if (e.target.className === "range-min"){
                rangeInput[0].value = maxVal - priceGap;
            }else {
                rangeInput[1].value = minVal + priceGap;
            }
        }else {
            priceInput[0].value = minVal;
            priceInput[1].value = maxVal;
            progress.style.left = (minVal/ rangeInput[0].max) * 100 + "%";
            progress.style.right =100 - (maxVal/ rangeInput[1].max) * 100 + "%";
        }
    })
})


//Loader JS
function toggleLoader(toggleValue)
{
    if(toggleValue)
    {
        console.log('lodear ON');
        // Turn off  Scroll
        $('html, body').css({
            overflow: 'hidden',
            height: '100%'
        });
        $('.drops').show()
    } else {
        console.log('lodear off');
        // Turn on  Scroll
        $('html, body').css({
            overflow: 'auto',
            height: 'auto'
        });
        $('.drops').hide()
    }
}

// For Search Filter
$( document ).ready(function() {
    $(".search-input").click(function (eve) {
        $(".search-dropdown-menu").css({"display": "block", "top": "47px", "left": "0px"});
        document.addEventListener('click', function(event) {
            if(event.target !== eve.target){
                $(".search-dropdown-menu").css({"display": "none"});
            }
        });

    });

    // $(".search-input").focusout(function (event) {
    //     $(".search-dropdown-menu").css({"display": "none", "top": "47px", "left": "0px"});
    // })
    $(".search-input").keyup((data) => {
        $(".search-dropdown-menu").css({"display": "block", "top": "47px", "left": "0px"});
        var search = data.target.value;
        var createHTML = "";
        // Get Data With Ajax
        if (search.length > 0 ){
            $.ajax({
                type: "GET",
                url: '/search/'+search,
                headers: {
                    'X-CSRF-TOKEN': "<?php echo csrf_token() ?>"
                },
                success: function (data) {
                    var product = {};
                    if (data.length !== 0){
                        data.forEach((product)=> {
                            createHTML += `<div class="search-item">
                                <a href="/product/${product.slug}">
                                    <div class="image">
                                        <img src="http://127.0.0.1:8000/storage/${product.image}">
                                    </div>
                                    <div class="name">${product.name}</div>
                                    <div class="price"><ins>${product.views}</ins> &nbsp; <del>${product.sales}</del></div>
                                    </a>
                                </div>`
                        })
                        if(data.length >= 5){
                            createHTML += `<div class="search-item remainder-count">
                                    <a href="">See all results</a>
                                </div>`
                        }
                    } else {
                        createHTML = `<div class="search-item empty">No results found for query</div>`
                    }
                    $("#tab-prod").html(createHTML);
                }
            })
        }else {
            createHTML = `<div class="search-item empty">No results found for query</div>`
        }
        $("#tab-prod").html(createHTML);
    })

});



// For Product Compare Filter
$( document ).ready(function() {

    $.fn.autocomplete = function(a) {
        return this.each(function() {
            var b = $(this),
                d = this;
            this.timer = null;
            this.items = [];
            this.wrap = '<ul class="dropdown-menu"></ul>';
            $.extend(this, a);
            b.attr("autocomplete", "off");
            b.on("focus", function() {
                d.request()
            });
            b.on("blur", function() {
                setTimeout(function(a) {
                    a.hide()
                }, 200, this)
            });
            b.on("keydown", function(a) {
                switch (a.keyCode) {
                    case 27:
                        d.hide();
                        break;
                    default:
                        d.request()
                }
            });
            d.click = function(a) {
                (value = $(a.target).parent().attr("data-value")) && this.items[value] && (a.preventDefault(), this.select(this.items[value]))
            };
            d.show = function() {
                var a = b.position(),
                    d = b.siblings(".dropdown-menu");
                d.css({
                    top: a.top + b.outerHeight() + "px",
                    left: a.left + "px"
                });
                d.show()
            };
            d.hide = function() {
                b.siblings(".dropdown-menu").hide()
            };
            this.request = function() {
                clearTimeout(d.timer);
                d.timer = setTimeout(function(a) {
                    a.source($(a).val(), a.response.bind(a))
                }, 500, this)
            };
            d.response = function(a) {
                var f = "";
                if (a.length) {
                    for (i = 0; i < a.length; i++) d.items[a[i].value] = a[i];
                    for (i = 0; i < a.length; i++) a[i].category || (f += '<li data-value="' + a[i].value + '"><a href="#">' + a[i].label + "</a></li>")
                }
                f ? d.show() : d.hide();
                b.siblings(".dropdown-menu").html(f)
            };
            b.after(this.wrap);
            b.siblings(".dropdown-menu").delegate("a", "click", this.click.bind(this))
        })
    };



    $(".cmpr-product").autocomplete({
        source: function(a, b) {
            $.ajax({
                type: "GET",
                url: '/compare-product',
                data: {keyword: a},
                headers: {
                    'X-CSRF-TOKEN': "<?php echo csrf_token() ?>"
                },
                success:  b
            })
        },
        select: function(a) {
            var b = $(this),
                c = b.siblings("input");
            b.val(a.label);
            c.val(a.value);
            console.log(c);
            c.trigger("change")
        }
    });

});

//For Mobile Nav Button
$( document ).ready(function() {
    $("#nav-toggler").click(function(){
        if (!$(".navbar").hasClass('open')) {
            $(".navbar").addClass('open')
        }else{
            $(".navbar").removeClass('open')
        }
    })

    $('.nav-item').click(function (e){
        if (!$(this).hasClass('open')) {
            $(this).addClass('open')
        }
    })
    $('.search-toggler').click(function (e){
        if (!$('#search').hasClass('open')) {
            $('#search').addClass('open')
        }else{
            $('#search').removeClass('open')
        }
    })
    $('.side-filter').click(function (e){
        if (!$('#column-left').hasClass('open')) {
            $('#column-left').addClass('open')
        }else{
            $('#column-left').removeClass('open')
        }
    })
    $('.filter-close').click(function (e){
        if ($('#column-left').hasClass('open')) {
            $('#column-left').removeClass('open')
            $('.filter-close').removeClass('close')
        }
    })
})

