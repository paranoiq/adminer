
/**
 * Make table body scrollable, with the table header always visible.
 * Table shrinks vertically to fit the browser viewport.
 *
 * requirements:
 * - jQuery framework required (tested with 1.6.2)
 * - header must be wrapped in <thead> element
 *
 * warnings:
 * - table <caption> is not supported
 * - using with header including <input>s is not adviced
 *
 * @author Vlasta Neubauer [paranoiq@centrum.cz]
 * @license public domain
 *
 * @param object  table element (DOM or jQuery)
 * @param int  minimal table height (optional)
 * @param int  maximal table height (optional)
 * @return object  table container
 */
function makeScrollable($table, minHeight, maxHeight) {
    var $ = jQuery;

    // fuck IE7 and older
    //if ($.browser.msie && parseInt($.browser.version) < 8) return;

    $table = $($table);

    // scrolling container
    $table.wrap("<div>");
    var $container = $table.parent();
    $container.css({ 'display': 'inline-block', 'border': 'none', 'padding': 0 });

    $container.attr('class', $table.attr('class'));

    $container.css({ // cannot copy 'margin' (IE, FF, Webkit)
        'marginTop': $table.css('marginTop'), 'marginRight': $table.css('marginRight'),
        'marginBottom': $table.css('marginBottom'), 'marginLeft': $table.css('marginLeft') });
    $table.css({ 'margin': 0 });

    var $bottom = $table;
    if (!parseInt($bottom.css('borderBottomWidth'))) {
        $bottom = $table.find("tr:last").find("th, td");
    }
    $container.css({ // cannot copy 'borderBottom' (IE, FF)
        'borderBottomWidth': $bottom.css('borderBottomWidth'),
        'borderBottomColor': $bottom.css('borderBottomColor'),
        'borderBottomStyle': $bottom.css('borderBottomStyle') });
    $bottom.css({ 'borderBottom': 'none' });

    // fake header
    var $head = $table.find("thead").clone(true);
    $head.css({ 'display': 'block', 'position': 'absolute' });
    $head.find("th:not(:last-child), td:not(:last-child)").css({ 'borderRight': 'none' });
    $head.find("tr:not(:last-child)").find("th, td").css({ 'borderBottom': 'none' });
    $head.insertBefore($table);

    var $origCells = $table.find("thead tr:first-child").find("th, td");
    var $copyCells = $head.find("tr:first-child").find("th, td");

    $(window).resize(function (event) {
        var oldPosition = $container.scrollTop();
        $container.scrollTop(0); // FF looses position of header on refresh
        $head.css({ 'display': 'none', 'position': 'static' });

        $container.css({ 'maxHeight': 32000, 'overflowY': 'visible' }); // "maxHeight: auto" won't work

        var tableHeight = $table.outerHeight(true);

        var containerHeight = tableHeight
            - ($(document.body).outerHeight(true) - document.documentElement.clientHeight);
        if (containerHeight < minHeight) containerHeight = minHeight;
        //if ($.browser.opera || ($.browser.msie && parseInt($.browser.version) < 9)) containerHeight -= 4; // WTF?
        if (maxHeight && containerHeight > maxHeight) containerHeight = maxHeight;

        if (containerHeight >= tableHeight) {
            $container.css({ 'minHeight': 0 });
            return;
        } else {
            if (minHeight) $container.css({ 'minHeight': minHeight });

            $container.css({ 'maxHeight': containerHeight, 'overflowY': 'scroll' });
        }

        // sync column widths
        $origCells.each(function (n, th) {
            /*if ($.browser.msie && parseInt($.browser.version) < 9) {
                var columnWidth = th.clientWidth
                    - parseInt($(th).css('paddingLeft'))
                    - parseInt($(th).css('paddingRight'));
            } else { // dimensions from cell itself are not reliable, specially in Opera*/
                var columnWidth = th.getBoundingClientRect().width
                    - parseInt($(th).css('borderLeftWidth'))
                    - parseInt($(th).css('paddingLeft'))
                    - parseInt($(th).css('paddingRight'));
                //if ($.browser.mozilla) columnWidth -= parseInt($(th).css('borderRightWidth'));
            //}
            $($copyCells.get(n)).css({ 'width': columnWidth, 'minWidth': columnWidth });
        });

        $head.css({ 'display': 'block', 'position': 'absolute' });
        $container.scrollTop(oldPosition);
    });

    $(window).trigger('resize', null);
    return $container;
}

// jQuery plugin
(function ($) {
    $.fn.makeScrollable = function (minHeight, maxHeight) {
        this.each(function(n, table) {
            makeScrollable(table, minHeight, maxHeight);
        });
        return this;
    };
})(jQuery);

$(function () {
    console.log($("table"));
    $("table[cellspacing]").makeScrollable(1000);
});
