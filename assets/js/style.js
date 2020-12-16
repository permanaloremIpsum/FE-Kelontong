function carouselBanner(){
    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 4000,
        nav: false,
        lazyLoad: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1,
                stagePadding: 80
            },
            1000: {
                items: 1,
                stagePadding: 150
            },
            1200: {
                items: 1,
                stagePadding: 150
            },
            1400: {
                items: 1,
                stagePadding: 200
            },
            1600: {
                items: 1,
                stagePadding: 350
            },
            1800: {
                items: 1,
                stagePadding: 400
            }
        }
    })
}

function carouselKategori(){
    $('#owl-carousel-kategori').owlCarousel({
        loop: false,
        margin: 20,
        autoplay: false,
        nav: false,
        lazyLoad: true,
        dots: false,
        responsive: {
            0: {
                items: 4,
                dots: false,
            },
            600: {
                items: 4,
                stagePadding: 65
            },
            1000: {
                items: 8
            },
            1200: {
                items: 8
            },
            1400: {
                items: 8
            }
        }
    })
}

function countdownSale(){
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 30, 2020 23:59:59").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        $('#countdown').html(`
            <div class="card-count">`+days+`</div>
            <span> : </span>
            <div class="card-count">`+hours+`</div>
            <span> : </span>
            <div class="card-count">`+minutes+`</div>
            <span> : </span>
            <div class="card-count">`+seconds+`</div>
        `)

        // $('#review-list').append(`
        //     <div class="row" style="margin-top: 25px;">
        //         <div class="col-sm-3 col-3">
        //             <img src="`+data.user.avatar.small.url+`" class="img-fluid rounded-circle" alt="Responsive image" style="display: block; margin-left: auto; margin-right: auto;">
        //             <p class="text-center oswaldlight" style="font-size: 14px; margin-top: 5px;">`+data.user.username+`</p>
        //         </div>
        //         <div class="col-sm-9 col-9">
        //             <h4 style="font-size: 16px;">`+data.title+`</h4>
        //             <span><img src="https://static.tacdn.com/img2/ratings/traveler/ss`+data.rating+`.0.gif"></span>
        //             <span class="oswaldlight" style="font-size: 12px;">Reviewed `+dt+`</span>
        //             <p class="oswaldlight" style="font-size: 14px; margin-top: 10px;">`+data.text+`</p>
        //         </div>
        //         <div style="display: block; background: #FFFFFF; width: 90%; height: 2px; border-radius: 10px; margin-left: auto; margin-right: auto;"></div>
        //     </div>
        // `)
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
}

$(document).ready(function(){
    carouselBanner();
    carouselKategori();
    countdownSale();
})
