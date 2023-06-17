// membuat script jquery, dijalankan jika sudah ready jquerynya
$(function(){
    // panggil, saat dokumen menjalankan scroll makan jalankan function
    $(document).scroll(function(){
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
    });
});