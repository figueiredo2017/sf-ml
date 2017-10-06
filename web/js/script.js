/**
 * @author: Figueiredo Luiz <lffigueiredo@gmail.com>
 */

$('#searchSelector>.dropdown-menu>li>a').on('click', function() {
    $('#s-selected').html($(this).text());
    $('#search_type').val($(this).attr('id').substring(2));
    $('#search_key').val('');
});

$('#search_key').on('keyup', function() {
    if ( event.which == 13 ) {
        event.preventDefault();
    }
    var searchBy = $('#search_type').val();
    var inputString = $('#search_key').val();


    if (inputString.length == 0) {
        $('#suggestions').fadeOut();
    } else {
        $.get("../search/index", {k:  ""+searchBy+"", s: ""+inputString+""}, function(data){
            if(data.length >0) {
                var html = "";
                $.each(JSON.parse(data), function(i, item) {
                    html += "<div class='results'>"
                    if (item.title!==undefined) html += "<h3>"+item.title+" ("+item.release_year+")</h3>";
                    if (item.locations!==undefined) html += "<h4>Location: "+item.locations+"</h4>";
                    if (item.title!==undefined) html += "<a href='../site/detail?id="+item.id+"'>more details</a><br><br>";
                    html += "</div>";
                });

                $('#suggestions').fadeIn();
                $('#suggestionsList').html(html);
            }

        });
    }
});