document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
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

        // Inisialisasi Slick jika sudah ada
        if (typeof $(".slick-slider-responsive").slick === "function") {
            $(".slick-slider-responsive").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
            });
        } else {
            console.error(
                "Slick belum terload. Pastikan slick.min.js sudah disertakan."
            );
        }
    }, 5000);
});

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
