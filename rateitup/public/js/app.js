$(document).on("click", ".edit-review-btn", function () {
    const id = $(this).data("id");
    const title = $(this).data("title");
    const content = $(this).data("content");
    const maps = $(this).data("maps");
    const url = $(this).data("url");

    $("#edit_title").val(title);
    $("#edit_content").val(content);
    $("#edit_maps_url").val(maps);
    $("#editReviewForm").attr("action", url);

    $("#editReviewModal").modal("show");
});

$(function () {
    // Sembunyikan skeleton
    const skeleton = document.getElementById("carousel-skeleton");
    if (skeleton) {
        skeleton.style.display = "none";
    }

    // Tampilkan carousel slider
    const slider = document.getElementById("carousel-slider");
    if (slider) {
        slider.classList.remove("d-none");
    }
    $(".slider").not('.slick-initialized').slick();
    // Inisialisasi Slick
    if ($(".slick-slider-responsive").length) {
        $(".slider").not('.slick-initialized').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }

    $('.dropdown-toggle').dropdown();
});
