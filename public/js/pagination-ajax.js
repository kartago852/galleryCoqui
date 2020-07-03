$(document).ready(function(){
    setTimeout(function(){
        window.history.pushState("object or string", "Title", "/"+window.location.href.substring(window.location.href.lastIndexOf('/') + 1).split("?")[0]);
    },10);
});

/* $(window).on("load",function()
        {
            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var page=$(this).attr('href').split('page=')[1];

                getData(page);
            });

});

var text = document.querySelector('.pagination a');

text.addEventListener('click', function(event) {
    event.preventDefault();

    $("#Galeria").load('/gallery/imagenes.blade.php');
});

console.log(text);

function getData(page){
    $.ajax(
    {
        url: '?page=' + page,
        type: "get",
        datatype: "html"
    }).done(function(data){
        $("#Galeria").empty().html(data);
        location.hash = page;
    }).fail(function(jqXHR, ajaxOptions, thrownError){
        alert('No response from server');
    });
}
 */
