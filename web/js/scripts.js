// Using multiple unit types within one animation.
$('#btn<?= $characteristic->id ?>').click(function () {

    if (document.getElementById("span<?= $characteristic->id ?>1").className === "glyphicon glyphicon-chevron-down padingLeft hidden")
    {
        document.getElementById("span<?= $characteristic->id ?>1").className = "glyphicon glyphicon-chevron-down padingLeft";
        document.getElementById("span<?= $characteristic->id ?>2").className = "glyphicon glyphicon-chevron-up padingLeft hidden";
    } else
    {

        document.getElementById("span<?= $characteristic->id ?>1").className = "glyphicon glyphicon-chevron-down padingLeft hidden";
        document.getElementById("span<?= $characteristic->id ?>2").className = "glyphicon glyphicon-chevron-up padingLeft";

    }
});

$('#opener').on('click', function () {
    var panel = $('#slide-panel');
    if (panel.hasClass("visible")) {
        panel.removeClass('visible').animate({'margin-left': '-300px'});
    } else {
        panel.addClass('visible').animate({'margin-left': '0px'});
    }
    return false;
});

function OnClickStar(id)
{
    for (var i = 1; i < 6; i++) {
        var elem = document.getElementById(5 + i);
        elem.className = '';
        if (i <= id) {
            elem.className = 'star glyphicon glyphicon-star text-size-x-large';
        } else
        {
            elem.className = 'starEmpty glyphicon glyphicon-star-empty text-size-x-large';
        }
    }

}