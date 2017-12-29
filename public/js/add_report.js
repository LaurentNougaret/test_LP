$(document).ready(function() {
    $('#plus').click(function() {
        $('#report-card').append('div', {
                    html: '<div class="row"><p class="col-sm-6">- Bulletins / Relevés de notes</p><input type="file" id="report-card" class="col-sm-6" accept="application/pdf"><a href="javascript:void(0);"><img src="web/images/add.png" class="addAutreDocument" /></div>'
                });
    })
    });

    // {
    //     var newAutreBulletin = new Element('div', {
    //         html: '<div class="row"><p class="col-sm-6">- Bulletins / Relevés de notes</p><input type="file" id="report-card" class="col-sm-6" accept="application/pdf"><a href="javascript:void(0);"><img src="web/images/add.png" class="addAutreDocument" /></div>'
    //     });
    //     newAutreBulletin.inject($("bloc_autre_bulletin"));
    // }
// })

